<?php
  $cakeDescription = 'Book Store';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?= $this->Html->charset() ?>  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= $cakeDescription ?>:
    <?= $this->fetch('title') ?>
  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->  
  <!-- <?= $this->Html->css('../custom/plugins/fontawesome-free/css/all.min.css') ?> -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->  
  <?= $this->Html->css('../custom/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>
  <!-- iCheck -->  
  <?= $this->Html->css('../custom/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>
  <!-- JQVMap -->
  <link rel="stylesheet" href="">
  <?= $this->Html->css('../custom/plugins/jqvmap/jqvmap.min.css') ?>
  <!-- Theme style -->
  <link rel="stylesheet" href="">
  <?= $this->Html->css('../custom/dist/css/adminlte.min.css') ?>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="">
  <?= $this->Html->css('../custom/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>
  <!-- Daterange picker -->
  <link rel="stylesheet" href="">
  <?= $this->Html->css('../custom/plugins/daterangepicker/daterangepicker.css') ?>
  <!-- summernote -->
  <link rel="stylesheet" href="">
  <?= $this->Html->css('../custom/plugins/summernote/summernote-bs4.min.css') ?>

  <!-- jQuery --> 
 <?= $this->Html->script('../custom/plugins/jquery/jquery.min.js') ?>
<!-- jQuery UI 1.11.4 -->
<?= $this->Html->script('../custom/plugins/jquery-ui/jquery-ui.min.js') ?>
<?= $this->Html->script('../custom/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>
<!-- ChartJS -->
<?= $this->Html->script('../custom/plugins/chart.js/Chart.min.js') ?>
<!-- Sparkline -->
<?= $this->Html->script('../custom/plugins/sparklines/sparkline.js') ?>
<!-- JQVMap -->
<?= $this->Html->script('../custom/plugins/jqvmap/jquery.vmap.min.js') ?>
<?= $this->Html->script('../custom/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>
<!-- jQuery Knob Chart -->
<?= $this->Html->script('../custom/plugins/jquery-knob/jquery.knob.min.js') ?>
<!-- daterangepicker -->
<?= $this->Html->script('../custom/plugins/moment/moment.min.js') ?>
<?= $this->Html->script('../custom/plugins/daterangepicker/daterangepicker.js') ?>
<!-- Tempusdominus Bootstrap 4 -->
<?= $this->Html->script('../custom/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>
<!-- Summernote -->
<?= $this->Html->script('../custom/plugins/summernote/summernote-bs4.min.js') ?>
<!-- overlayScrollbars -->
<?= $this->Html->script('../custom/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>
<!-- AdminLTE App -->
<?= $this->Html->script('../custom/dist/js/adminlte.js') ?>
<!-- AdminLTE for demo purposes -->
<?= $this->Html->script('../custom/dist/js/demo.js') ?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?= $this->Html->script('../custom/dist/js/pages/dashboard.js') ?>
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo $this->request->webroot; ?>/custom/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->
  <?= $this->element('header'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?= $this->element('sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?= $this->Flash->render(); ?>    
    <?= $this->fetch('content') ?>
  </div>
  <!-- /.content-wrapper -->
  <?= $this->element('footer'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->

</body>
</html>
