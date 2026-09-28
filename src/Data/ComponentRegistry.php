<?php
declare(strict_types=1);

namespace App\Data;

use Cake\Http\Exception\NotFoundException;
use DirectoryIterator;

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
        self::$all ??= self::scan();

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
     * Reads every config/components/*.php and groups by category in the
     * spec's fixed order; slugs are sorted alphabetically.
     *
     * @return array<string, array<string, array<string, mixed>>>
     */
    private static function scan(): array
    {
        $grouped = [];
        $dir = CONFIG . 'components';
        if (!is_dir($dir)) {
            return [];
        }
        foreach (new DirectoryIterator($dir) as $file) {
            if ($file->isDot() || $file->getExtension() !== 'php') {
                continue;
            }
            /** @var array<string, mixed> $component */
            $component = require $file->getPathname();
            $category = (string)($component['category'] ?? '');
            $slug = basename($file->getPathname(), '.php');
            $grouped[$category][$slug] = $component;
        }
        ksort($grouped);

        $out = [];
        foreach (self::CATEGORY_ORDER as $category) {
            if (isset($grouped[$category])) {
                ksort($grouped[$category]);
                $out[$category] = $grouped[$category];
            }
        }

        return $out;
    }
}
