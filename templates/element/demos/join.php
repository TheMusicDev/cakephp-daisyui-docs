<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div>
    <h3>Horizontal join (default)</h3>
    <?= $this->Layout->join(
        $this->Actions->button('A', ['class' => $this->Layout->joinItemClass()]) .
        $this->Actions->button('B', ['class' => $this->Layout->joinItemClass()]) .
        $this->Actions->button('C', ['class' => $this->Layout->joinItemClass()]),
    ) ?>
</div>

<div>
    <h3>Vertical join</h3>
    <?= $this->Layout->join(
        $this->Actions->button('A', ['class' => $this->Layout->joinItemClass()]) .
        $this->Actions->button('B', ['class' => $this->Layout->joinItemClass()]) .
        $this->Actions->button('C', ['class' => $this->Layout->joinItemClass()]),
        ['direction' => 'vertical'],
    ) ?>
</div>

<div>
    <h3>Join with colored buttons</h3>
    <?= $this->Layout->join(
        $this->Actions->button('Primary', ['color' => 'primary', 'class' => $this->Layout->joinItemClass()]) .
        $this->Actions->button('Secondary', ['color' => 'secondary', 'class' => $this->Layout->joinItemClass()]) .
        $this->Actions->button('Accent', ['color' => 'accent', 'class' => $this->Layout->joinItemClass()]),
    ) ?>
</div>
