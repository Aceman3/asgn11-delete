<?php
require_once('../../private/initialize.php');

if(is_request_post()) {
  $name = $_POST['name'] ?? '';
  $position = $_POST['habitat'] ?? '';
  $desc = $_POST['description'] ?? '';

  $sql = "INSERT INTO salamander ";
  $sql .="(name, habitat, description) ";
  $sql .= "VALUES (";
  $sql .= "'" . $name . "',<br />";
  $sql .= "'" . $habitat . "',<br />";
  $sql .= "'" . $desc . "'<br />";
  $sql .= ")";
  $result = mysqli_query($db, $sql);

  if($result) {
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('/salamanders/show.php?id= ' . $new_id))
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
 else {
  redirect_to(url_for('/salamanders/new.php'));
}
?>
