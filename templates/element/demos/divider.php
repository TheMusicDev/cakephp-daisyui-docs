<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="space-y-4">
    <div>
        <h4>Default Divider</h4>
        <p>Content before</p>
        <?= $this->Layout->divider() ?>
        <p>Content after</p>
    </div>
    <div>
        <h4>Divider with Text</h4>
        <p>Start</p>
        <?= $this->Layout->divider('OR') ?>
        <p>End</p>
    </div>
    <div>
        <h4>Divider with Colors</h4>
        <?= $this->Layout->divider('Primary') ?>
        <?= $this->Layout->divider('Secondary', ['color' => 'secondary']) ?>
        <?= $this->Layout->divider('Error', ['color' => 'error']) ?>
    </div>
    <div>
        <h4>Vertical Divider (inline)</h4>
        <div class="flex">
            <div>Left content</div>
            <?= $this->Layout->divider('', ['direction' => 'vertical']) ?>
            <div>Right content</div>
        </div>
    </div>
</div>
