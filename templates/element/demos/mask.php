<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="flex gap-4 flex-wrap">
    <?= $this->Layout->mask('https://picsum.photos/id/64/200/200', ['appearance' => 'circle', 'alt' => 'Circle', 'class' => 'w-24']) ?>
    <?= $this->Layout->mask('https://picsum.photos/id/65/200/200', ['appearance' => 'hexagon', 'alt' => 'Hexagon', 'class' => 'w-24']) ?>
    <?= $this->Layout->mask('https://picsum.photos/id/91/200/200', ['appearance' => 'heart', 'alt' => 'Heart', 'class' => 'w-24']) ?>
    <?= $this->Layout->mask('https://picsum.photos/id/177/200/200', ['appearance' => 'star', 'alt' => 'Star', 'class' => 'w-24']) ?>
    <?= $this->Layout->mask('https://picsum.photos/id/237/200/200', ['appearance' => 'squircle', 'alt' => 'Squircle', 'class' => 'w-24']) ?>
</div>
