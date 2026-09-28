<?php
/**
 * @var \App\View\AppView $this
 */
$this->Breadcrumbs
    ->add('Home', '/')
    ->add('Components', ['controller' => 'Components', 'action' => 'index'])
    ->add('Breadcrumbs');
?>
<?= $this->Breadcrumbs->render() ?>

<?php
$this->Breadcrumbs->reset()
    ->add('<strong>Raw HTML</strong>', '/', ['escape' => false])
    ->add('Escaped: <em>not italic</em>');
?>
<?= $this->Breadcrumbs->render(['class' => 'text-sm']) ?>
