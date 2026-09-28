<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Layout->footer([
    ['title' => 'Services', 'links' => ['Branding' => '#', 'Design' => '#', 'Marketing' => '#']],
    ['title' => 'Company', 'links' => ['About us' => '#', 'Contact' => '#', 'Jobs' => '#']],
    ['title' => 'Legal', 'links' => [['text' => 'Terms of use', 'url' => '#'], ['text' => 'Privacy policy', 'url' => '#']]],
], ['direction' => 'horizontal', 'class' => 'bg-base-200 p-10']) ?>

<?= $this->Layout->footer('<p>Copyright © 2026 — All rights reserved</p>', ['placement' => 'center', 'class' => 'bg-base-300 p-4']) ?>
