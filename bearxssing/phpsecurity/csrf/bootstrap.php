<?php

session_start();

$_SESSION['user_id'] = 1;

$conn = new PDO('mysql:host=127.0.0.1;dbname=php_security','root','');

#step 1 for protection:
#make sure this page ONLY accepts post requests
/*
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(!isset($_POST['token'])) || ($_POST['token']) !== $_SESSION['token'])) {
    die('Invalid CSRF token')
  }
}

#SOLUTION: TOKENS
#generate a random token
$_SESSION['_token'] = bin2hex(openssl_random_pseudo_bytes(16));
die($_SESSION['_token']);
*/
#check token in every form
