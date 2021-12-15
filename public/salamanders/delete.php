<?php

 require_once('../../private/initialize.php');
 
if(!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/index.php'));
}
$id = $_GET['id'];


if(is_request_post()) {
  delete_salamander($id);
} else {
  $salamander = find_salamander_id($id);
}

?>

<?php $page_title = 'Delete Salamander'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div>
    <h1>Delete Salamander</h1>
    <p>Are you sure you want to delete this salamander?</p>
    <p><?php echo h($salamander['name']); ?></p>
<h2><?= h($salamander['name']); ?></h2>
    <form action="<?php echo url_for('/salamanders/delete.php?id=' . h(u($salamander['id']))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Salamander" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
