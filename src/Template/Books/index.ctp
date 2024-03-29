<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Book[]|\Cake\Collection\CollectionInterface $books
  */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Book'), ['action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="books index large-9 medium-8 columns content">
    <h3><?= __('Books') ?></h3>
    <?= $this->Html->link(__('Create New Book'), ['action' => 'add']) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('#') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('author') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publisher') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edition') ?></th>
                <th scope="col"><?= $this->Paginator->sort('added_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $i = 1;
                // echo "<pre>";
                // print_r($books);
                // echo "</pre>";
                foreach ($books as $book): 
            ?>
            <tr>
                <td><?= $this->Number->format($i) ?></td>
                <td><?= h($book->title) ?></td>
                <td><?= h($book->author_name->name) ?></td>
                <td><?= h($book->publisher_name->name) ?></td>
                <td><?= h($book->edition) ?></td>
                <td><?= h($book->added_date) ?></td>                
                <td><?php if(($book->status) == 1){ echo('Active'); } ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $book->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $book->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'softdelete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?>
                </td>
            </tr>
            <?php 
                $i++;
                endforeach;
            ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
