<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Books'), ['action' => 'index']) ?></li>
    </ul>
</nav> -->
<div class="books form large-9 medium-8 columns content">
    <?php
        // $author = array_column($Author,'name');
        // $publisher = array_column($publisher,'name');
        // echo "<pre>";
        // print_r($Author);
        // echo "</pre>";
    ?>
    <?= $this->Form->create($book,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Book') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->input('author',['options' => $Author ,'label' => 'Author']);
            echo $this->Form->input('publisher',['options' => $publisher ,'label' => 'Publisher']);
            echo $this->Form->control('edition');
            echo $this->Form->input('cover_pic', ['type' => 'file']);
            echo $this->Form->input('file', ['type' => 'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
