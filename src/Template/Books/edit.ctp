<?php?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Book</h1>
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
                <h3 class="card-title">Add Book</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?= $this->Form->create($book,['type' => 'file']) ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Title</label>
                    <?= $this->Form->control('title',['class'=>'form-control','placeholder'=>'Title','label' => false,'templates' => ['inputContainer' => '{{content}}']]) ?>                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Author</label>
                    <?= $this->Form->input('author',['options' => $Author ,'label' => false,'class'=>'custom-select','default'=>$book->author,'templates' => ['inputContainer' => '{{content}}']]); ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Publisher</label>
                    <?= $this->Form->input('publisher',['options' => $publisher ,'label' => false,'class'=>'custom-select','default'=>$book->publisher,'templates' => ['inputContainer' => '{{content}}']]); ?>
                  </div>
                  <div class="form-group">
                    <label>Edition</label>
                    <?= $this->Form->control('edition',['class'=>'form-control','placeholder'=>'Edition','label' => false,'templates' => ['inputContainer' => '{{content}}']]) ?>                    
                  </div>
                  <div class="form-group">
                    <label>Cover Pic</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <?= $this->Form->input('cover_pic', ['type' => 'file','class'=>'custom-file-input','label' => false,'templates' => ['inputContainer' => '{{content}}']]) ?>                        
                        <label class="custom-file-label">Choose file</label>
                      </div>                      
                    </div>
                    <?php
                        if($book->cover_pic != '')
                        {
                            echo "<small style='color:red'>".$book->cover_pic."</small>";
                        }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Sample Images</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <?= $this->Form->input('file', ['type' => 'file','class'=>'custom-file-input','label' => false,'templates' => ['inputContainer' => '{{content}}']]) ?>
                        <label class="custom-file-label">Choose file</label>
                      </div>                      
                    </div>
                    <?php
                        if($book->file != '')
                        {
                            echo "<small style='color:red'>".$book->file."</small>";
                        }
                    ?>
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
<?= $this->Html->script('../custom/plugins/bs-custom-file-input/bs-custom-file-input.min.js') ?>
<script>
    $(function () {
      bsCustomFileInput.init();
    });
</script>