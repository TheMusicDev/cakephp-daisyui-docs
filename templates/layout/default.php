<?php
/**
 * @var \App\View\AppView $this
 */

$cakeDescription = 'cakephp-daisyui documentation';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Assets->css() ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <main>
        <?= $this->fetch('content') ?>
    </main>
</body>
</html>
