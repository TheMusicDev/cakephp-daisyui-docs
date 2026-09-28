<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Data\ComponentRegistry;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * Requests every registry page and asserts a 200 with no errors.
 */
class ComponentsSmokeTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * @return void
     */
    public function testIndexReturns200(): void
    {
        $this->get('/');

        $this->assertResponseOk();
    }

    /**
     * @return void
     */
    public function testEveryRegisteredComponentPageReturns200(): void
    {
        $all = ComponentRegistry::all();
        foreach ($all as $components) {
            foreach (array_keys($components) as $slug) {
                $this->get('/components/' . $slug);

                $this->assertResponseOk('Component page failed: ' . $slug);
            }
        }
    }

    /**
     * @return void
     */
    public function testUnknownSlugIs404(): void
    {
        $this->get('/components/does-not-exist');

        $this->assertResponseCode(404);
    }
}
