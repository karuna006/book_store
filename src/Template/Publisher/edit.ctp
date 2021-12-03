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
        <div class="col-sm-12">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Add Publisher</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?= $this->Form->create($publisher) ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <?= $this->Form->control('name',['class'=>'form-control','placeholder'=>'Name','label' => false,'templates' => ['inputContainer' => '{{content}}']]) ?>                    
                  </div>                                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
  </div>
</section>