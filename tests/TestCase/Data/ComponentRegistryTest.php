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

    /**
     * @return void
     */
    public function testLoadThrowsWhenHelperIsNotAClassName(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('alias.php: "helper" must be a class name');
        ComponentRegistry::load(TESTS . 'test_files' . DS . 'components' . DS . 'bad-helper');
    }

    /**
     * @return void
     */
    public function testLoadThrowsOnIncompleteOptionRow(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('novalues.php: option row 0 needs a string "values"');
        ComponentRegistry::load(TESTS . 'test_files' . DS . 'components' . DS . 'bad-option');
    }

    /**
     * Every real metadata file passes validation.
     *
     * @return void
     */
    public function testRealMetadataIsValid(): void
    {
        $this->assertNotEmpty(ComponentRegistry::load(CONFIG . 'components'));
    }
}
