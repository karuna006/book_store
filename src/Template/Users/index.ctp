<?php
  // echo "<pre>";
  // print_r($this->request->session()->read('Auth.User'));
  // echo "</pre>";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->  
  <?= $this->Html->css('../custom/plugins/fontawesome-free/css/all.min.css') ?>
  <!-- icheck bootstrap -->  
  <?= $this->Html->css('../custom/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>
  <!-- Theme style -->  
  <?= $this->Html->css('../custom/dist/css/adminlte.min.css') ?>
</head>
<body class="hold-transition login-page">
    <?= $this->Flash->render(); ?>
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Book</b>Store</a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <?= $this->Form->create('post',['url'=>['controller'=>'users','action'=>'login']]); ?>
            <div class="input-group mb-3">          
              <?= $this->Form->control('username',['class'=>'form-control','placeholder'=>'Username','label' => false,'templates' => ['inputContainer' => '{{content}}']]) ?>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">          
              <?= $this->Form->control('password',['class'=>'form-control','placeholder'=>'Password','label' => false,'templates' => ['inputContainer' => '{{content}}']]) ?>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">            
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          <?= $this->Form->end(); ?>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
<!-- /.login-box -->

<!-- jQuery -->
<?= $this->Html->script('../custom/plugins/jquery/jquery.min.js') ?>
<!-- Bootstrap 4 -->
<?= $this->Html->script('../custom/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>
<!-- AdminLTE App -->
<?= $this->Html->script('../custom/dist/js/adminlte.min.js') ?>
</body>
</html>