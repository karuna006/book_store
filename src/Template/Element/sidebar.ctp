<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Books'), ['controller' => 'Books','action' => 'index']) ?>
        	<?php
        		if($this->request->params['controller'] == 'Books')
                {
            ?>
        	<ul class="side-nav" style="padding-left:20px">
        		<li><?= $this->Html->link(__('Create New Book'), ['action' => 'add']) ?></li>
        		<li><?= $this->Html->link(__('View Book'), ['action' => 'index']) ?></li>
                <?php
                    if($this->request->params['action'] == 'view' || $this->request->params['action'] == 'edit')
                    {
                ?>
                <li><?= $this->Form->postLink(__('Delete Book'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?> </li>
                <?php
                    }
                ?>                
        	</ul>
            <?php
                }
        	?>
        </li>
        <li><?= $this->Html->link(__('Author'), ['controller' => 'Author','action' => 'index']) ?>
            <?php
                if($this->request->params['controller'] == 'Author')
                {
            ?>
            <ul class="side-nav" style="padding-left:20px">
                <li><?= $this->Html->link(__('Create New Author'), ['action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('View Author'), ['action' => 'index']) ?></li>
                <?php
                    if($this->request->params['action'] == 'view' || $this->request->params['action'] == 'edit')
                    {
                ?>
                <li><?= $this->Form->postLink(__('Delete Author'), ['action' => 'delete', $author->id], ['confirm' => __('Are you sure you want to delete # {0}?', $author->id)]) ?> </li>
                <?php
                    }
                ?>                
            </ul>
            <?php
                }
            ?>
        </li>
        <li><?= $this->Html->link(__('publisher'), ['controller' => 'publisher','action' => 'index']) ?>
            <?php
                if($this->request->params['controller'] == 'Publisher')
                {
            ?>
            <ul class="side-nav" style="padding-left:20px">
                <li><?= $this->Html->link(__('Create New Publisher'), ['action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('View Publisher'), ['action' => 'index']) ?></li>
                <?php
                    if($this->request->params['action'] == 'view' || $this->request->params['action'] == 'edit')
                    {
                ?>
                <li><?= $this->Form->postLink(__('Delete Publisher'), ['action' => 'delete', $publisher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publisher->id)]) ?> </li>
                <?php
                    }
                ?>       
            </ul>
            <?php
                }
            ?>
        </li>
    </ul>
</nav>