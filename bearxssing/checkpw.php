<h1>Password Checking Page</h1>
<?php
  if($_POST['userid'] == "Jesse" && $_POST['password'] == "Mercer"){
          echo "Welcome to the site!!!";
  }
  else
  {
          echo "Bad Login, try again: <a href='index.php'>Login</a><br>";
  }
  //echo $_POST['userid'] . "<br>";
  //echo $_POST['password'] . "<br>";
?>
<h2>Thank you!!</h2>
