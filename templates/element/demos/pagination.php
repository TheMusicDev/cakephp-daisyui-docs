<?php
/**
 * @var \App\View\AppView $this
 */

use Cake\Datasource\Paging\PaginatedResultSet;

// In an app, the controller's paginate() provides this; here it is set by hand.
$paging = fn(int $page, int $pages) => new PaginatedResultSet(new ArrayIterator([]), [
    'alias' => 'Articles', 'scope' => null, 'count' => 10, 'totalCount' => $pages * 10,
    'perPage' => 10, 'limit' => null, 'pageCount' => $pages, 'currentPage' => $page,
    'requestedPage' => $page, 'start' => ($page - 1) * 10 + 1, 'end' => $page * 10,
    'hasPrevPage' => $page > 1, 'hasNextPage' => $page < $pages,
    'sort' => null, 'direction' => null, 'sortDefault' => false, 'directionDefault' => false,
    'completeSort' => [],
]);

$this->Paginator->setPaginated($paging(2, 5));
?>
<?= $this->Paginator->links() ?>

<?php $this->Paginator->setPaginated($paging(10, 20)); ?>
<?= $this->Paginator->links(['prev' => 'Previous', 'next' => 'Next', 'numbers' => ['first' => 1, 'last' => 1, 'modulus' => 2]]) ?>

<?php $this->Paginator->setPaginated($paging(1, 3)); ?>
<?= $this->Paginator->links(['label' => 'First page (prev disabled)']) ?>
