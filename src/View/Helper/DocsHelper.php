<?php
declare(strict_types=1);

namespace App\View\Helper;

use Cake\View\Helper;
use ReflectionMethod;

/**
 * Docs-page helpers: renders a helper method's signature via ReflectionMethod
 * (spec §7).
 *
 * @extends \Cake\View\Helper<\Cake\View\View>
 */
class DocsHelper extends Helper
{
    /**
     * @param class-string $class Helper class.
     * @param string $method Method name.
     * @return string e.g. `DataDisplayHelper::badge(string $text, array $options = []): string`
     */
    public function signature(string $class, string $method): string
    {
        $reflection = new ReflectionMethod($class, $method);
        $params = [];
        foreach ($reflection->getParameters() as $param) {
            $type = $param->getType();
            $rendered = $type === null ? '' : (string)$type;
            $sig = '';
            if ($param->isPassedByReference()) {
                $sig .= '&';
            }
            if ($param->isVariadic()) {
                $sig .= '...';
            }
            if ($sig !== '') {
                $rendered = trim($rendered . ' ' . $sig);
            } elseif ($rendered !== '') {
                $rendered .= ' ';
            }
            $rendered .= '$' . $param->getName();
            if ($param->isOptional() && $param->isDefaultValueAvailable()) {
                $rendered .= ' = ' . $this->defaultRepresentation($param->getDefaultValue());
            }
            $params[] = $rendered;
        }

        $return = $reflection->getReturnType();

        return $reflection->getDeclaringClass()->getShortName()
            . '::' . $reflection->getName()
            . '(' . implode(', ', $params) . ')'
            . ($return === null ? '' : ': ' . (string)$return);
    }

    /**
     * Formats a parameter's default value per spec §7.
     *
     * @param mixed $value Default value from reflection.
     * @return string
     */
    private function defaultRepresentation(mixed $value): string
    {
        if ($value === []) {
            return '[]';
        }
        if ($value === null) {
            return 'null';
        }

        return var_export($value, true);
    }
}
