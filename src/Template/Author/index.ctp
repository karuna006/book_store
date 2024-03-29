<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Author[]|\Cake\Collection\CollectionInterface $author
  */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Author'), ['action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="author index large-9 medium-8 columns content">
    <h3><?= __('Author') ?></h3>
    <?= $this->Html->link(__('Create New Author'), ['action' => 'add']) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('#') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('added_date') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('status') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $i = 1;
                foreach ($author as $author):
            ?>
            <tr>
                <td><?= $this->Number->format($i) ?></td>
                <td><?= h($author->name) ?></td>
                <td><?= h($author->added_date) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $author->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $author->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'softdelete', $author->id], ['confirm' => __('Are you sure you want to delete # {0}?', $author->id)]) ?>
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
