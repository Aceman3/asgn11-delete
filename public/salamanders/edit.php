<?php 
require_once('../../private/initialize.php');

if(!isset($_GET['id'])){
  redirect_to(url_for('/salamanders/index.php'));
}

$id = $_GET['id'];

if(is_request_post()) {
  $salamanderName = $_POST['salamanderName'] ?? '';
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? '';

  echo "form parameters<br />";
  echo "Salamander name: " . $salamanderName . "<br />";
  echo "Position: " . $position . "<br />";
  echo "Visible: " . $visible . "<br />";
} 
?>

<?php $page_title = 'Edit Salamander'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

  <div id="content">
  <a class="back-link" href="<?= url_for('salamanders/index.php'); ?> ">&laquo; Back to list</a>

  <div class="Salamander new">
    <h1>Edit Salamander</h1>
    <form action="<?= url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Salamander Name</dt>
        <dd><input type="text" name="salamanderName" value=""></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0">
          <input type="checkbox" name="visible" value="1">
        </dd>
      </dl>
      <div>
        <input type="submit" value="Edit Salamander">
      </div>
    </div>
  </form>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>