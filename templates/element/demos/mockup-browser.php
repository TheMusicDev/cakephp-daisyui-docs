<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Mockup->browser('<p>Page content</p>', ['url' => 'example.com']) ?>
<?= $this->Mockup->browser('<p>Custom toolbar</p>', ['toolbar' => '<div class="text-center">Custom</div>']) ?>
