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
            <h3 class="card-title">Book List</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <!-- <tr>
                  <th style="width: 10px">#</th>
                  <th>Task</th>
                  <th>Progress</th>
                  <th style="width: 40px">Label</th>
                </tr> -->
                <tr>
                  <th style="width: 10px"><?= $this->Paginator->sort('id') ?></th>
                  <th><?= $this->Paginator->sort('title') ?></th>
                  <th><?= $this->Paginator->sort('author') ?></th>
                  <th><?= $this->Paginator->sort('publisher') ?></th>
                  <!-- <th><?= $this->Paginator->sort('cover_pic') ?></th> -->
                  <!-- <th><?= $this->Paginator->sort('file') ?></th> -->
                  <th><?= $this->Paginator->sort('edition') ?></th>
                  <th><?= $this->Paginator->sort('added_date') ?></th>
                  <th><?= $this->Paginator->sort('status') ?></th>
                  <th class="actions"><?= __('Actions') ?></th>
              </tr>
              </thead>
              <tbody>
                <?php
                  $i = 1;
                  foreach ($books as $book): ?>
                  <tr>
                      <td><?= $this->Number->format($i) ?></td>
                      <td><?= h($book->title) ?></td>
                      <td><?= h($book->author_name->name) ?></td>
                      <td><?= h($book->publisher_name->name) ?></td>
                      <td><?= h($book->edition) ?></td>
                      <td><?= h($book->added_date) ?></td>                
                      <td><?php if(($book->status) == 1){ echo('Active'); } ?></td>
                      <td style="width: 20%">
                          <?= $this->Html->link(__('View'), ['action' => 'view', $book->id],['class'=>'btn btn-default btn-sm']) ?>
                          <?= $this->Html->link(__('Edit'), ['action' => 'edit', $book->id],['class'=>'btn btn-success btn-sm']) ?>
                          <?= $this->Form->postLink(__('Delete'), ['action' => 'softdelete', $book->id],['class'=>'btn btn-warning btn-sm'],['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?>
                      </td>
                  </tr>
                <?php $i++;endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <?= $this->Paginator->first('<< ' . __('first')) ?>
              <?= $this->Paginator->prev('< ' . __('previous')) ?>
              <?= $this->Paginator->numbers() ?>
              <?= $this->Paginator->next(__('next') . ' >') ?>
              <?= $this->Paginator->last(__('last') . ' >>') ?>
           <!--    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li> -->
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>