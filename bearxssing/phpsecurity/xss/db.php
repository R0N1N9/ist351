<?php

//error_reporting();

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'php_security');

$xss2 = new Mysqli(HOST, USER, PASS, DB);

if($xss2->connect_error){
  echo $con->connect_error;
}

?>
