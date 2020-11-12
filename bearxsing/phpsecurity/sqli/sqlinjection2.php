<?php

$con = new mysqli("localhost","root","","php_security");

if($con->connect_error){
  echo $con->connection_error;
}

if (isset($_POST["submit"])) {
  $user = $_POST["user"];
  $password = $_POST["password"];

  #$sql = "SELECT * FROM user_info WHERE user = '$user' AND password = '$password'";
  echo $sql = "SELECT * FROM user_info WHERE user = '$user' AND password = '$password'";
  #$sql = "SELECT * FROM user_info WHERE user = '' OR '1'='1' AND password = '$password'";

  $run_query = $con->query($sql); #object oriented

  if($run_query){
    $row = $run_query->fetch_assoc();
    $user = $row["user"];
      header("location:profile.php?user=".$user);
  }
}

#exploit code:
  #' OR '1'='1
    #^always true
  #'; DROP TABLE test; --

  #full sql query:
  #SELECT * FROM user_info WHERE user = ''; DROP TABLE test; -- AND password = '' OR '1'='1'
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>

  <form method="post" action="">
    <input type="text" name="user" placeholder="Enter Username"/>
    <br/><input type="password" name="password" placeholder="Enter Password"/>
    <br/><input type="submit" name="submit" value="Login"/>
  </form>
</body>
</html>
