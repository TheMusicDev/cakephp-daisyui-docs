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

    /**
     * @return void
     */
    public function testHighlightUsesThemeColorsAndEscapes(): void
    {
        $helper = new DocsHelper(new View());
        $html = $helper->highlight("<p><?= \$this->Badge->badge('<b>') ?></p>\n");

        $this->assertStringContainsString('light-dark(#007700, #85E89D)', $html);
        $this->assertStringContainsString('light-dark(#DD0000, #F97583)', $html);
        $this->assertStringContainsString('&lt;p&gt;', $html);
        $this->assertStringNotContainsString('<b>', $html);
    }

    /**
     * @return void
     */
    public function testHighlightFragmentDropsTheAddedOpenTag(): void
    {
        $html = (new DocsHelper(new View()))->highlight('Foo::bar(string $x): string', true);

        $this->assertStringNotContainsString('php', $html);
        $this->assertStringContainsString('Foo', $html);
    }

    /**
     * @return void
     */
    public function testHighlightRestoresIniSettings(): void
    {
        $before = ini_get('highlight.keyword');
        (new DocsHelper(new View()))->highlight('<?php echo 1;');

        $this->assertSame($before, ini_get('highlight.keyword'));
    }
}
