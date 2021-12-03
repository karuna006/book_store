<?php?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Publisher</h1>
      </div>      
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  Publisher - <?= h($publisher->name) ?>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <dl class="row">
                  <dt class="col-sm-4"><?= __('Name') ?></dt>
                  <dd class="col-sm-8"><?= h($publisher->name) ?></dd>
                  <dt class="col-sm-4"><?= __('Id') ?></dt>
                  <dd class="col-sm-8"><?= h($publisher->id) ?></dd>                  
                  <dt class="col-sm-4"><?= __('Status') ?></dt>
                  <dd class="col-sm-8"><?= h($publisher->status) ?></dd>
                  <dt class="col-sm-4"><?= __('Added Date') ?></dt>
                  <dd class="col-sm-8"><?= h($publisher->added_date) ?></dd>
                  <dt class="col-sm-4"></dt>
                  <dd class="col-sm-8">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publisher->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publisher->id],['class'=>'btn btn-warning btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $publisher->id)]) ?>
                  </dd>                  
                </dl>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
  </div>
</section>