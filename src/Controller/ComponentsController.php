<?php
declare(strict_types=1);

namespace App\Controller;

use App\Data\ComponentRegistry;

/**
 * Renders the documentation index and one page per component.
 */
class ComponentsController extends AppController
{
    /**
     * @return void
     */
    public function index(): void
    {
        $this->set('grouped', ComponentRegistry::all());
    }

    /**
     * @param string $slug The component's docs slug.
     * @return void
     */
    public function view(string $slug): void
    {
        $this->set('component', ComponentRegistry::get($slug));
        $this->set('slug', $slug);
    }
}
