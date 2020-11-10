<?php

//error_reporting();

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'php_security');

$con = new Mysqli(HOST, USER, PASS, DB);

if($con->connect_error){
  echo $con->connect_error;
}

?>
