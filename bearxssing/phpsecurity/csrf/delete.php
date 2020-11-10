<?php

require "bootstrap.php";

#step 1 for protection:
#make sure this page ONLY accepts post requests
/*
if ($_SERVER['RESQUEST_METHOD'] !== POST){
  die()
};
*/

$delete = $conn->prepare("UPDATE users SET active = 0 WHERE id = :user_id");

$delete->execute([
  'user_id' => $_SESSION['user_id'],
]);
