<?php?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Books</h1>
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
                  Book - <?= h($book->title) ?>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <dl class="row">
                  <dt class="col-sm-4"><?= __('Title') ?></dt>
                  <dd class="col-sm-8"><?= h($book->title) ?></dd>
                  <dt class="col-sm-4"><?= __('Cover Pic') ?></dt>
                  <dd class="col-sm-8"><?= h($book->cover_pic) ?></dd>                  
                  <dt class="col-sm-4"><?= __('File') ?></dt>
                  <dd class="col-sm-8"><?= h($book->file) ?></dd>
                  <dt class="col-sm-4"><?= __('Edition') ?></dt>
                  <dd class="col-sm-8"><?= h($book->edition) ?></dd>
                  <dt class="col-sm-4"><?= __('Id') ?></dt>
                  <dd class="col-sm-8"><?= h($book->id) ?></dd>
                  <dt class="col-sm-4"><?= __('Author') ?></dt>
                  <dd class="col-sm-8"><?= h($book->author) ?></dd>
                  <dt class="col-sm-4"><?= __('Publisher') ?></dt>
                  <dd class="col-sm-8"><?= h($book->publisher) ?></dd>
                  <dt class="col-sm-4"><?= __('Status') ?></dt>
                  <dd class="col-sm-8"><?= h($book->Status) ?></dd>
                  <dt class="col-sm-4"><?= __('Added Date') ?></dt>
                  <dd class="col-sm-8"><?= h($book->added_date) ?></dd>
                  <dt class="col-sm-4"></dt>
                  <dd class="col-sm-8">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $book->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'softdelete', $book->id],['class'=>'btn btn-warning btn-sm'],['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?>
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