<?php require_once('../../private/initialize.php');?>

<?php $page_title = 'Create Salamander'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

  <div id="content">
  <a class="back-link" href="<?= url_for('salamanders/index.php'); ?> ">&laquo; Back to list</a>

  <div class="salamander new">
    <h1>Create Salamander</h1>

    <form action="<?= url_for('salamanders/create.php');?>" method="post">
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
        <input type="submit" value="Create Salamander">
      </div>
    </div>
  </form>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>