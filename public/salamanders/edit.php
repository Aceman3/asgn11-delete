<?php require_once('../../private/initialize.php');?>
<?php
if(!isset($_GET['id'])){
  redirect_to(url_for('/salamanders/index.php'));
}

$id = $_GET['id'];
$sql = "SELECT * FROM salamander ";
$sql .= "WHERE id='" . $id . "'";
$result = mysqli_query($db, $sql);
confirm_result_set($result);

$salamander = mysqli_fetch_assoc($result);
mysqli_free_result($result);

if(is_request_post()) {
  $name = $_POST['name'] ?? '';
  $habitat = $_POST['habitat'] ?? '';
  $description = $_POST['description'] ?? '';

  echo "form parameters<br />";
  echo "Salamander name: " . $name . "<br />";
  echo "habitat: " . $habitat . "<br />";
  echo "Description: " . $description . "<br />";
} 
?>

<?php $page_title = 'Edit Salamander'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div id="content">
    <a class="back-link" href="<?= url_for('salamanders/index.php'); ?> ">&laquo; Back to list</a>
    <div class="Salamander new">
      <h1>Edit Salamander</h1>
      <form action="<?= url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
      <div>
          <dl>
            <dt>Name</dt>
            <dd><input type="text" name="name" value="<?= h($salamander['name']); ?>"/></dd>
          </dl>
          <dl>
            <dt>Habitat</dt>
            <dd><textarea rows="2" cols="74" name="habitat"><?= h($salamander['habitat']); ?></textarea></dd>
          </dl>

          <dl>
            <dt>Description</dt>
            <dd><textarea rows="4" cols="74" name="description"><?= h($salamander['description']); ?></textarea></dd>
          </dl>
          <input type="submit" value="Edit Salamander">
     </div>
  </div>
</form>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>