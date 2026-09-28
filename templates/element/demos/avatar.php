<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->avatar('https://www.loremfaces.net/128/id/1.jpg', ['innerClass' => 'w-16 rounded-full']) ?>
<?= $this->DataDisplay->avatar(null, ['placeholder' => 'AM', 'innerClass' => 'w-16 rounded-full bg-neutral text-neutral-content']) ?>
<?= $this->DataDisplay->avatar('https://www.loremfaces.net/128/id/2.jpg', ['modifier' => 'online', 'innerClass' => 'w-16 rounded-full']) ?>
<?= $this->DataDisplay->avatar('https://www.loremfaces.net/128/id/3.jpg', ['modifier' => 'offline', 'innerClass' => 'w-16 rounded-full']) ?>
<?= $this->DataDisplay->avatarGroup(
    $this->DataDisplay->avatar('https://www.loremfaces.net/128/id/4.jpg', ['innerClass' => 'w-12 rounded-full']) .
    $this->DataDisplay->avatar(null, ['placeholder' => 'AM', 'innerClass' => 'w-12 rounded-full bg-neutral text-neutral-content']),
) ?>
