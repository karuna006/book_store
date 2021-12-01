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
                ['action' => 'delete', $book->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Books'), ['action' => 'index']) ?></li>
    </ul>
</nav> -->
<div class="books form large-9 medium-8 columns content">
    <?= $this->Form->create($book,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Book') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->input('author',['options' => $Author ,'label' => 'Author','default'=>$book->author]);
            echo $this->Form->input('publisher',['options' => $publisher ,'label' => 'Publisher','default'=>$book->publisher]);
            echo $this->Form->control('edition');
            echo $this->Form->input('cover_pic', ['type' => 'file']);
            if($book->cover_pic != '')
            {
                echo "<small style='color:red'>".$book->cover_pic."</small>";
            }
            echo $this->Form->input('file', ['type' => 'file']);
            if($book->file != '')
            {
                echo "<small style='color:red'>".$book->file."</small>";
            }
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
