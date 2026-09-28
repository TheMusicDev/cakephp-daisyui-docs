<?php
declare(strict_types=1);

namespace App\Test\TestCase\Data;

use App\Data\ComponentRegistry;
use Cake\TestSuite\TestCase;
use RuntimeException;

class ComponentRegistryTest extends TestCase
{
    /**
     * @return void
     */
    public function testLoadGroupsByCategoryInSpecOrder(): void
    {
        $dir = TESTS . 'test_files' . DS . 'components' . DS . 'good';

        $this->assertSame(['Actions', 'Feedback'], array_keys(ComponentRegistry::load($dir)));
        $this->assertArrayHasKey('beta', ComponentRegistry::load($dir)['Actions']);
        $this->assertArrayHasKey('alpha', ComponentRegistry::load($dir)['Feedback']);
    }

    /**
     * @return void
     */
    public function testLoadThrowsOnUnknownCategory(): void
    {
        $dir = TESTS . 'test_files' . DS . 'components' . DS . 'bad';

        try {
            ComponentRegistry::load($dir);
            $this->fail('Expected RuntimeException.');
        } catch (RuntimeException $e) {
            $this->assertStringContainsString('typo.php', $e->getMessage());
            $this->assertStringContainsString('Feedbak', $e->getMessage());
        }
    }

    /**
     * @return void
     */
    public function testLoadMissingDirectoryReturnsEmpty(): void
    {
        $this->assertSame([], ComponentRegistry::load(TESTS . 'test_files' . DS . 'no-such-dir'));
    }
}
