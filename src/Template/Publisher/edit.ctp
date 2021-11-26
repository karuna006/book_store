<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $publisher->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $publisher->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Publisher'), ['action' => 'index']) ?></li>
    </ul>
</nav> -->
<div class="publisher form large-9 medium-8 columns content">
    <?= $this->Form->create($publisher) ?>
    <fieldset>
        <legend><?= __('Edit Publisher') ?></legend>
        <?php
            echo $this->Form->control('name');
            // echo $this->Form->control('added_date');
            // echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
