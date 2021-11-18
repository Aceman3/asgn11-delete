<?php
require_once('../../private/initialize.php');

if(is_request_post()) {
  $salamanderName = $_POST['salamanderName'] ?? '';
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? '';

  echo "form parameters<br />";
  echo "Salamander name: " . $salamanderName . "<br />";
  echo "Position: " . $position . "<br />";
  echo "Visible: " . $visible . "<br />";
} else {
  redirect_to(url_for('/salamanders/new.php'));
}
?>
