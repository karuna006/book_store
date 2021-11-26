<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Publisher[]|\Cake\Collection\CollectionInterface $publisher
  */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Publisher'), ['action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="publisher index large-9 medium-8 columns content">
    <h3><?= __('Publisher') ?></h3>
    <?= $this->Html->link(__('Create New Publisher'), ['action' => 'add']) ?>
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
                foreach ($publisher as $publisher): ?>
            <tr>
                <td><?= $this->Number->format($i) ?></td>
                <td><?= h($publisher->name) ?></td>
                <td><?= h($publisher->added_date) ?></td>
                <!-- <td><?= $this->Number->format($publisher->status) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $publisher->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publisher->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'softdelete', $publisher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publisher->id)]) ?>
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
