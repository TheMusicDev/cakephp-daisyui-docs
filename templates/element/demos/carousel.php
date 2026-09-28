<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->carousel([
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
]) ?>
<?= $this->DataDisplay->carousel([
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
], ['modifier' => 'start']) ?>
<?= $this->DataDisplay->carousel([
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
], ['modifier' => 'center']) ?>
<?= $this->DataDisplay->carousel([
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
], ['modifier' => 'end']) ?>
<?= $this->DataDisplay->carousel([
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
    ['content' => $this->Html->image('cake-logo.png', ['alt' => 'Cake']), 'class' => 'w-full'],
], ['direction' => 'vertical']) ?>
