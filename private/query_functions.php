<?php

  function find_all_salamanders() {
    global $db;
    $sql = "SELECT * FROM salamander ";
    $sql .= "ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

  function find_salamander_id(){
    $sql = "SELECT * FROM salamander ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $salamander = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
  }

  function deleteSalamander($id) {
  global $db;
  $sql = "DELETE FROM salamander ";
  $sql .= "WHERE id='" . $id . "' ";
  $sql .= "LIMIT 1";
  
  $result = mysqli_query($db, $sql);
  if($result) {
    return true;
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
  }
?>