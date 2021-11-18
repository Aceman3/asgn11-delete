<?php require_once('../../private/initialize.php');?>

<?php
$id = $_GET['id'] ?? '1';
?>

<?php $page_title = 'View Salamander'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div id="content">
  <a class="back-link" href="<?= url_for('salamanders/index.php'); ?> ">&laquo; Back to list</a>

  <div class="page show">
    Page ID: <?= h($id); ?>
  </div>
</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>