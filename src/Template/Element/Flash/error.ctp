<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div> -->
<section class="content">
  <div class="container-fluid">
    <div class="alert alert-danger alert-dismissible mt-2">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-ban"></i> Error!</h5>
     <?= $message ?>
    </div>
  </div>
</section>
