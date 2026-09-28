<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->chat('Hello, how are you?') ?>
<?= $this->DataDisplay->chat('I am doing great!', ['placement' => 'end', 'color' => 'primary']) ?>
<?= $this->DataDisplay->chat('Nice!', ['placement' => 'start', 'header' => 'John']) ?>
<?= $this->DataDisplay->chat('Thanks!', ['placement' => 'end', 'header' => 'Me', 'footer' => '1 min ago']) ?>
<?= $this->DataDisplay->chat('Hello!', ['placement' => 'start', 'image' => $this->Html->image('cake-logo.png', ['alt' => 'John', 'class' => 'w-10 h-10']), 'color' => 'secondary']) ?>
<?= $this->DataDisplay->chat('Perfect!', ['placement' => 'end', 'image' => $this->Html->image('cake-logo.png', ['alt' => 'Me', 'class' => 'w-10 h-10']), 'color' => 'primary', 'footer' => 'just now']) ?>
