<?php if (isset($_SESSION['notice'])): ?>
<div class="alert alert-info alert-dismissible" style="padding: 5px; margin-bottom: 0px;">
  <p><b>Notice : </b><?php echo $_SESSION['notice']; ?><button type="button" class="btn btn-danger btn-xs pull-right" data-dismiss="alert" aria-hidden="true">×</button></p>
</div>
<?php unset($_SESSION['notice']); ?>
<?php endif ?>