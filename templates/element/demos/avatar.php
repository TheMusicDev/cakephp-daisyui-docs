<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->DataDisplay->avatar('cake-logo.png', ['innerClass' => 'w-16 rounded-full']) ?>
<?= $this->DataDisplay->avatar(null, ['placeholder' => 'AM', 'innerClass' => 'w-16 rounded-full bg-neutral text-neutral-content']) ?>
<?= $this->DataDisplay->avatar('cake-logo.png', ['modifier' => 'online', 'innerClass' => 'w-16 rounded-full']) ?>
<?= $this->DataDisplay->avatar('cake-logo.png', ['modifier' => 'offline', 'innerClass' => 'w-16 rounded-full']) ?>
<?= $this->DataDisplay->avatarGroup(
    $this->DataDisplay->avatar('cake-logo.png', ['innerClass' => 'w-12 rounded-full']) .
    $this->DataDisplay->avatar(null, ['placeholder' => 'AM', 'innerClass' => 'w-12 rounded-full bg-neutral text-neutral-content']),
) ?>
