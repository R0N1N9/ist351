<?php

session_start();
include 'db.php';

#echo $_SESSION["email"] = "admin@secLounge.com";

?>

<form action="delete2.php" method="post">
  <input type="submit" name="submit" value="Delete your account">
</form>

<a href="http://localhost/phpsecurity/csrf/enemy.php">Gift for you</a>
