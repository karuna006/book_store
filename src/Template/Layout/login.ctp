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
<?= $this->fetch('content') ?>
<!-- /.login-box -->

<!-- jQuery -->
<?= $this->Html->script('../custom/plugins/jquery/jquery.min.js') ?>
<!-- Bootstrap 4 -->
<?= $this->Html->script('../custom/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>
<!-- AdminLTE App -->
<?= $this->Html->script('../custom/dist/js/adminlte.min.js') ?>
</body>
</html>
