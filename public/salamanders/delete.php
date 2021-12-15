<?php

require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('salamanders/index.php'));
}
$id = $_GET['id'];

if(is_request_post()) {

  $result = delete_salamander($id);
  redirect_to(url_for('salamanders/index.php'));

} else {
    $id = $_GET['id'] ?? '1';

    $sql = "SELECT * FROM salamander ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    
    $salamander = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
}

?>

<?php $page_title = 'Delete Salamander'; ?>
<?php include(SHARED_PATH . 'salamanderHeader.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div class="salamander delete">
    <h1>Delete Salamander</h1>
    <p>Are you sure you want to delete this salamander?</p>
    <p class="item"><?php echo h($salamander['name']); ?></p>

    <form action="<?php echo url_for('/salamanders/delete.php?id=' . h(u($salamander['id']))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Salamander" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
