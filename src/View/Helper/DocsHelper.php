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

    /**
     * PHP's built-in highlighter colours: PHP's own defaults on light themes, a
     * matching palette on dark ones. CSS `light-dark()` picks the pair member from
     * the active theme's `color-scheme` (every daisyUI theme sets it), so the code
     * recolours whenever the theme changes.
     */
    private const COLORS = [
        'highlight.html' => 'light-dark(#000000, #E1E4E8)',
        'highlight.default' => 'light-dark(#0000BB, #79B8FF)',
        'highlight.keyword' => 'light-dark(#007700, #85E89D)',
        'highlight.string' => 'light-dark(#DD0000, #F97583)',
        'highlight.comment' => 'light-dark(#FF8000, #FFAB70)',
    ];

    /**
     * Syntax-highlights PHP source (a template, or a code fragment with `$fragment`).
     *
     * @param string $code Source code.
     * @param bool $fragment True for code without an opening `<?php` tag (e.g. a signature).
     * @return string HTML (escaped by PHP's highlighter).
     */
    public function highlight(string $code, bool $fragment = false): string
    {
        $previous = [];
        foreach (self::COLORS as $key => $color) {
            $previous[$key] = ini_set($key, $color);
        }
        try {
            $html = highlight_string($fragment ? '<?php ' . $code : $code, true);
        } finally {
            foreach ($previous as $key => $value) {
                if ($value !== false) {
                    ini_set($key, $value);
                }
            }
        }
        if ($fragment) {
            // Drop the `<?php ` we added (PHP 8.2 renders the space as &nbsp;).
            $html = (string)preg_replace('/&lt;\?php(?:&nbsp;| )/', '', $html, 1);
        }

        return $html;
    }

    /**
     * A highlighted code block with a "Copy" button (`webroot/js/docs.js` wires it up).
     * The button reads the code panel's own text, so it always copies exactly what's shown.
     *
     * @param string $code Source code.
     * @param bool $fragment Same meaning as in `highlight()`.
     * @return string
     */
    public function codeBlock(string $code, bool $fragment = false): string
    {
        $html = $this->highlight($code, $fragment);

        return '<div class="relative group/code">'
            . '<button type="button" data-copy-code'
            . ' class="btn btn-xs btn-ghost absolute top-2 right-2 opacity-0 group-hover/code:opacity-100'
            . ' focus-visible:opacity-100 transition-opacity">Copy</button>'
            . '<div class="bg-base-200 rounded-box p-4 pr-16 overflow-x-auto text-sm">' . $html . '</div>'
            . '</div>';
    }
}
