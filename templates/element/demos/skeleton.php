<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="flex gap-4 mb-4">
    <?= $this->Feedback->skeleton(['class' => 'h-32 w-32']) ?>
    <?= $this->Feedback->skeleton(['class' => 'h-4 w-28']) ?>
    <?= $this->Feedback->skeleton(['class' => 'h-4 w-full']) ?>
</div>

<div class="mt-4">
    <?= $this->Feedback->skeleton(['text' => 'Loading data...']) ?>
</div>
