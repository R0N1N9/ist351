<?php

//error_reporting();

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'LVq7j78bJy8xYq');
define('DB', 'sqli');

$con = new Mysqli(HOST, USER, PASS, DB);

if($con->connect_error){
  echo $con->connect_error;
}

?>
