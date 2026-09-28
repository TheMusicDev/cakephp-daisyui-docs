<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->carousel([
    ['content' => $this->Html->image('https://picsum.photos/id/10/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
    ['content' => $this->Html->image('https://picsum.photos/id/11/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
    ['content' => $this->Html->image('https://picsum.photos/id/12/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
]) ?>
<?= $this->DataDisplay->carousel([
    ['content' => $this->Html->image('https://picsum.photos/id/13/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
    ['content' => $this->Html->image('https://picsum.photos/id/14/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
    ['content' => $this->Html->image('https://picsum.photos/id/15/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
], ['modifier' => 'start']) ?>
<?= $this->DataDisplay->carousel([
    ['content' => $this->Html->image('https://picsum.photos/id/16/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
    ['content' => $this->Html->image('https://picsum.photos/id/17/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
    ['content' => $this->Html->image('https://picsum.photos/id/18/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
], ['modifier' => 'center']) ?>
<?= $this->DataDisplay->carousel([
    ['content' => $this->Html->image('https://picsum.photos/id/19/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
    ['content' => $this->Html->image('https://picsum.photos/id/20/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
    ['content' => $this->Html->image('https://picsum.photos/id/21/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
], ['modifier' => 'end']) ?>
<?= $this->DataDisplay->carousel([
    ['content' => $this->Html->image('https://picsum.photos/id/22/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
    ['content' => $this->Html->image('https://picsum.photos/id/23/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
    ['content' => $this->Html->image('https://picsum.photos/id/24/400/250', ['alt' => 'Sample photo']), 'class' => 'w-full'],
], ['direction' => 'vertical']) ?>
