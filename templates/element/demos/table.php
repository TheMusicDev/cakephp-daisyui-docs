<?php
/**
 * @var \App\View\AppView $this
 */

use Cake\ORM\Entity;

$people = [
    new Entity(['name' => 'Cy Ganderton', 'job' => 'Quality Control Specialist', 'team' => new Entity(['name' => 'Blue']), 'active' => true]),
    new Entity(['name' => 'Hart Hagerty', 'job' => 'Desktop Support Technician', 'team' => new Entity(['name' => 'Purple']), 'active' => false]),
    new Entity(['name' => 'Brice Swyre', 'job' => 'Tax Accountant', 'team' => new Entity(['name' => 'Red']), 'active' => true]),
];
$status = fn($active) => $this->DataDisplay->badge($active ? 'Active' : 'Away', ['color' => $active ? 'success' : 'neutral', 'size' => 'sm']);
?>
<?= $this->DataDisplay->table($people, [
    'name',
    'job' => 'Job',
    'team.name' => 'Team',
    'active' => ['label' => 'Status', 'format' => $status],
], ['modifier' => 'zebra', 'rowHeader' => true, 'caption' => 'Team members']) ?>

<?= $this->DataDisplay->table($people, ['name', 'job'], ['size' => 'xs', 'modifier' => 'pin-rows']) ?>

<?= $this->DataDisplay->table([], ['name', 'job'], ['empty' => 'No people yet.']) ?>
