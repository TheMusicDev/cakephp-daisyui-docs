<p>
    <?= $this->Actions->button('Button') ?>
    <?= $this->Actions->button('Primary', ['color' => 'primary']) ?>
    <?= $this->Actions->button('Secondary', ['color' => 'secondary']) ?>
    <?= $this->Actions->button('Success', ['color' => 'success']) ?>
    <?= $this->Actions->button('Error', ['color' => 'error']) ?>
</p>
<p>
    <?= $this->Actions->button('Outline', ['appearance' => 'outline']) ?>
    <?= $this->Actions->button('Dash', ['appearance' => 'dash']) ?>
    <?= $this->Actions->button('Soft', ['appearance' => 'soft']) ?>
    <?= $this->Actions->button('Ghost', ['appearance' => 'ghost']) ?>
    <?= $this->Actions->button('Link', ['appearance' => 'link']) ?>
</p>
<p>
    <?= $this->Actions->button('Extra small', ['size' => 'xs']) ?>
    <?= $this->Actions->button('Small', ['size' => 'sm']) ?>
    <?= $this->Actions->button('Medium', ['size' => 'md']) ?>
    <?= $this->Actions->button('Large', ['size' => 'lg']) ?>
    <?= $this->Actions->button('Extra large', ['size' => 'xl']) ?>
</p>
<p>
    <?= $this->Actions->button('Active', ['behavior' => 'active']) ?>
    <?= $this->Actions->button('Disabled', ['behavior' => 'disabled']) ?>
    <?= $this->Actions->button('Docs link', ['url' => ['controller' => 'Components', 'action' => 'index']]) ?>
</p>