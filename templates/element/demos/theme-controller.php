<?php
/**
 * @var \App\View\AppView $this
 */
?>
<p><?= $this->Actions->themeController() ?> Light / dark (from DaisyUi.themes)</p>
<p><?= $this->Actions->themeController(['light', 'dark', 'cupcake', 'retro', 'synthwave'], ['label' => 'Pick a theme']) ?></p>
