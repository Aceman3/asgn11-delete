<?php require_once('../../private/initialize.php');
$id = $_GET['id'] ?? '1';
$salamander = find_salamander_id($id);
?>

<?php $page_title = 'View Salamander'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div id="content">
  <a class="back-link" href="<?= url_for('salamanders/index.php'); ?> ">&laquo; Back to list</a>

  <div class="page show">
    <h1>Salamander: <? echo h($salamander['name']);?></h1>

    <div>
      <dl>
        <dt>ID</dt>
        <dd><? echo h($salamander['id']);?></dd><br>
      </dl>

      <dl>
        <dt>Name</dt>
        <dd><? echo h($salamander['name']);?></dd>
      </dl>

      <dl>
        <dt>Habitat</dt>
        <dd><? echo h($salamander['habitat']); ?></dd>
      </dl>

      <dl>
        <dt>Description</dt>
        <dd><? echo h($salamander['description']); ?></dd>
      </dl>
    </div>
  </div>
</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>