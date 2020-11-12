<?php
  session_start();
  include_once 'includes/functions.inc.php';
  include_once 'includes/dbh.php'
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Project 01</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <style>
a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
</style>

  <body>

    <audio id="Dust">
  		<source src="audio/Dust.mp3" type="audio/mpeg">
  	</audio>
  	<script>
  		var myMusic = document.getElementById("Dust");
  		function playAudio() {
  		  myMusic.play();
  		}
  		function pauseAudio() {
  		  myMusic.pause();
  		}
  	</script>


    <!--A quick navigation-->
    <nav>
      <div class="wrapper">
        <!-- <a href="index.php"><img src="img/logo-white.png" alt="Blogs logo"></a> -->
        <ul>

          <?php
          /*
          $dbhost = 'localhost';
                   $dbuser = 'root';
                   $dbpass = '';
                   $dbconn = mysqli_connect($dbhost, $dbuser, $dbpass);
              if (isset($_POST['reset'])) {
                   if(! $dbconn ){
                      echo 'Connected failure<br>';
                   }
                   echo 'Connected successfully<br>';

                   $sqldrop = "DROP DATABASE php_security";

                            if (mysqli_query($dbconn, $sqldrop)) {
                            echo "Record deleted successfully";
                            } else {
                               echo "Error deleting record: " . mysqli_error($dbconn);
                            }


                   $sqlcreate = "CREATE DATABASE php_security";

                   if (mysqli_query($dbconn, $sqlcreate)) {
                      echo "Database created successfully";
                   } else {
                      echo "Error creating database: " . mysqli_error($dbconn);
                   }
                   mysqli_close($dbconn);

          $conn = mysqli_connect("localhost", "root", "", "php_security");
          $filePath = "restore.sql";
          function restoreMysqlDB($filePath, $conn)
          {
              $sql = '';
              $error = '';

              if (file_exists($filePath)) {
                  $lines = file($filePath);

                  foreach ($lines as $line) {

                      // Ignoring comments from the SQL script
                      if (substr($line, 0, 2) == '--' || $line == '') {
                          continue;
                      }

                      $sql .= $line;

                      if (substr(trim($line), - 1, 1) == ';') {
                          $result = mysqli_query($conn, $sql);
                          if (! $result) {
                              $error .= mysqli_error($conn) . "\n";
                          }
                          $sql = '';
                      }
                  } // end foreach

                  if ($error) {
                      $response = array(
                          "type" => "error",
                          "message" => $error
                      );
                  } else {
                      $response = array(
                          "type" => "success",
                          "message" => "Database Restore Completed Successfully."
                      );
                  }
              } // end if file exists
              #return $response;
          }
          restoreMysqlDB($filePath,$conn);
        }*/
          ?>
          <!-- <li><form action=""><input type="submit" name="reset" value="RESET DATABASE"/></form></li> -->

          <li><button><a href="phpsecurity/xss/reset.php" style="color: red"/>RESET DATABASE</a></button></li>
          <li><button onclick="playAudio()">Synthwave</button></li>
          <li><button onclick="pauseAudio()">Un-Synthwave</button></li>

          <li><a href="index.php">Home</a></li>
          <li><a href="ctf.php">secLounge Legacy (276)</a></li>
          <li><a href="sqli.php">SQLI</a></li>
          <li><a href='xss.php'>XSS</a></li>
          <li><a href='csrf.php'>CSRF</a></li>
          <?php
            if (isset($_SESSION["useruid"])) {
              #echo "<li><a href='profile.php'>Profile Page</a></li>";
              echo "<li><a href='logout.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>Sign up</a></li>";
              echo "<li><a href='login.php'>Log in</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>

<!--A quick wrapper to align the content (ends in footer.php)-->
<div>
