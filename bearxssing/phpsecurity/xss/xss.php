<?php

#$date = new DateTime('+1 week');
#setcookie('session','abc',$date->getTimestamp());

#connect to database (PDO is object oriented)
$conn = new PDO('mysql:host=127.0.0.1;dbname=php_security','root','');
#$conn = PDO('localhost','root','', 'codecourse');

if (!isset($_GET['username'])) {
  die();
}

$user = $conn->prepare("SELECT * FROM users WHERE username = :username");

$user->execute([
  'username' => $_GET['username'],
]);

$user = $user->fetchObject();

var_dump($user);

 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="UTF-8">
     <title>User profile</title>

   </head>
   <body>
     <h2><?php echo $user->username; ?></h2>
     <p><?php echo $user->bio; ?></p>
   </body>
   </html>
