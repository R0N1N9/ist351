<?php
#Codecourse https://www.youtube.com/watch?v=cgwWpd4SqIM
# '; DROP TABLE forum_topics; --
#now running 2 queries - first where email = empty string; then drop table forum_topics
#$conn = mysqli_connect('localhost','root','', 'codecourse');
$conn = new PDO('mysql:host=127.0.0.1;dbname=php_security','root','');

if (isset($_POST['pass'])) {
  $pass = $_POST['pass'];

  #give back no record at all or record if email is found
  $user = $conn->query("SELECT * FROM users WHERE password = '{$pass}'");
  #412497samloo
  #$user = $conn->query("SELECT * FROM users WHERE email = ''; DROP TABLE forum_topics; --'");

  #fix:
  /*
  $user = $db->prepare("SELECT * FROM users WHERE email = :email");
  $user->execute([
    'email' => $email,
  ]);*/

  if ($user->rowCount()) {
    die('Authenticated successfully');
    echo $user ." Authenticated successfully";
  }
  else {
    echo 'Incorrect password.';
  }

}
/*
$sqli1 = "SELECT * FROM users";
$result = $conn->query($sqli1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - email: ". $row["email"]. " " . $row["password"] . $row["username"] . $row["bio"] . $row["active"]"<br>";
    }
} else {
    echo "0 results";
}
*/
#exploit code:
# ' OR '1'='1
# '; DROP TABLE forum_topics; --
# '; SELECT * FROM users; --

#SQLI can cause irreversible loss of data

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Reset password</title>

  </head>
  <body>
    <form action="sqlinjection.php" method="post" autocomplete="off">
      <label for="pass">
        Enter the password
        <input type="text" name="pass" id="pass">
      </label>
      <input type="submit" value="Recover">
    </form>
  </body>
