<?php
/**
 * In an app you set messages in a controller with `$this->Flash->success(...)`;
 * here they are queued on the request so the page can show the result.
 *
 * @var \App\View\AppView $this
 */
$flash = $this->getRequest()->getFlash();
$flash->set('A default message.');
$flash->success('Your changes were saved.');
$flash->error('Something went wrong.');
$flash->warning('Check the highlighted fields.');
$flash->info('A new version is available.');
$flash->success('A soft success alert.', ['params' => ['alert' => ['appearance' => 'soft']]]);
$flash->info('<strong>Raw HTML</strong> message.', ['escape' => false]);
$flash->warning('Not dismissible.', ['params' => ['dismiss' => false]]);
?>
<?= $this->Flash->render() ?>
