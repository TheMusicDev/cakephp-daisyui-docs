<?php
declare(strict_types=1);

namespace App\Data;

use Cake\Http\Exception\NotFoundException;
use DirectoryIterator;
use RuntimeException;

/**
 * Loads the component metadata files under config/components/.
 */
final class ComponentRegistry
{
    /**
     * daisyUI category order from the plugin spec (§5.1).
     *
     * @var list<string>
     */
    private const CATEGORY_ORDER = [
        'Actions',
        'Data display',
        'Navigation',
        'Feedback',
        'Data input',
        'Layout',
        'Mockup',
    ];

    /**
     * @var array<string, array<string, array<string, mixed>>>|null Category => slug => metadata.
     */
    private static ?array $all = null;

    /**
     * All components, grouped by category in the spec's order.
     *
     * @return array<string, array<string, array<string, mixed>>>
     */
    public static function all(): array
    {
        self::$all ??= self::load(CONFIG . 'components');

        return self::$all;
    }

    /**
     * One component's metadata by docs slug.
     *
     * @param string $slug The daisyUI URL slug, e.g. `radial-progress`.
     * @return array<string, mixed>
     * @throws \Cake\Http\Exception\NotFoundException When the slug is unknown.
     */
    public static function get(string $slug): array
    {
        foreach (self::all() as $components) {
            if (isset($components[$slug])) {
                return $components[$slug];
            }
        }

        throw new NotFoundException(sprintf('Unknown component slug "%s".', $slug));
    }

    /**
     * Reads every $dir/*.php and groups by category in the spec's fixed
     * order; slugs are sorted alphabetically. A metadata file whose
     * `category` is not one of the seven daisyUI categories throws.
     *
     * @param string $dir Directory containing {slug}.php metadata files.
     * @return array<string, array<string, array<string, mixed>>>
     * @throws \RuntimeException When a file names an unknown category.
     */
    public static function load(string $dir): array
    {
        if (!is_dir($dir)) {
            return [];
        }
        $grouped = [];
        foreach (new DirectoryIterator($dir) as $file) {
            if ($file->isDot() || $file->getExtension() !== 'php') {
                continue;
            }
            /** @var array<string, mixed> $component */
            $component = require $file->getPathname();
            $category = (string)($component['category'] ?? '');
            if (!in_array($category, self::CATEGORY_ORDER, true)) {
                throw new RuntimeException(sprintf(
                    'Unknown component category "%s" in %s.',
                    $category,
                    $file->getFilename(),
                ));
            }
            self::validate($component, $file->getFilename());
            $slug = basename($file->getPathname(), '.php');
            $grouped[$category][$slug] = $component;
        }

        $out = [];
        foreach (self::CATEGORY_ORDER as $category) {
            if (isset($grouped[$category])) {
                ksort($grouped[$category]);
                $out[$category] = $grouped[$category];
            }
        }

        return $out;
    }

    /**
     * Fails loudly on metadata the docs page can't render (spec §7).
     *
     * @param array<string, mixed> $component Metadata from one file.
     * @param string $file File name, for the error message.
     * @return void
     * @throws \RuntimeException On a missing helper method or an incomplete option row.
     */
    private static function validate(array $component, string $file): void
    {
        $helper = $component['helper'] ?? null;
        $method = $component['method'] ?? null;
        if (!is_string($helper) || !is_string($method) || !method_exists($helper, $method)) {
            throw new RuntimeException(sprintf(
                '%s: "helper" must be a class name and "method" one of its methods (got %s::%s).',
                $file,
                var_export($helper, true),
                var_export($method, true),
            ));
        }
        foreach ((array)($component['options'] ?? []) as $i => $option) {
            foreach (['name', 'type', 'default', 'values'] as $key) {
                if (!is_array($option) || !is_string($option[$key] ?? null)) {
                    throw new RuntimeException(sprintf('%s: option row %d needs a string "%s".', $file, $i, $key));
                }
            }
        }
    }
}
