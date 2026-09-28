<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Mockup->code(['echo "Hello";', 'echo "World";']) ?>
<?= $this->Mockup->code("$ npm install\n$ npm run build") ?>
<?= $this->Mockup->code(['Line 1', 'Line 2', 'Line 3'], ['numbered' => true]) ?>
