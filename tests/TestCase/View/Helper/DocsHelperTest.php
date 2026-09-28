<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\DocsHelper;
use Cake\TestSuite\TestCase;
use Cake\View\Helper\HtmlHelper;
use Cake\View\View;
use TheMusicDev\DaisyUi\View\ClassMap;
use TheMusicDev\DaisyUi\View\Helper\DataInputHelper;

class DocsHelperTest extends TestCase
{
    private DocsHelper $helper;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->helper = new DocsHelper(new View());
    }

    /**
     * @return void
     */
    public function testSignatureUnionTypesAndDefaults(): void
    {
        $this->assertSame(
            'HtmlHelper::link(array|string $title, array|string|null $url = null, array $options = []): string',
            $this->helper->signature(HtmlHelper::class, 'link'),
        );
    }

    /**
     * @return void
     */
    public function testSignatureNeverReturnType(): void
    {
        $this->assertSame(
            'DataInputHelper::calendar(): never',
            $this->helper->signature(DataInputHelper::class, 'calendar'),
        );
    }

    /**
     * @return void
     */
    public function testSignatureVariadic(): void
    {
        $this->assertSame(
            'ClassMap::classes(string ...$keys): string',
            $this->helper->signature(ClassMap::class, 'classes'),
        );
    }
}
