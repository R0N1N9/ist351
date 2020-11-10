<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>PHP DB Demo</title>
</head>
<body style="text-align:center; color:#006600;">

<?php
// Try to connect with the MySQL Server
$con = new mysqli('localhost','root','','php_security');
if ($con->connect_error)
  {
  die('Could not connect to mySQL: ' . $con->connect_error);
  }


// Create table favFoods in database
if (isset($_POST['create']))
  {
        $sql = "CREATE TABLE favStuff
        (
        FavID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(FavID),
        color varchar(15),
        number int(11),
        Who varchar(50)
        )";
        if ($con->query($sql)===TRUE)
          {
                  echo "Table Created<br>";
          }
        else
          {
                  die('Error in Create Table: ' . $con->error);
          }
}

///////Add data to the Database
        $theColors = array("red", "white", "blue", "green", "purple", "macYellow");
        $theNumbers = array(8, 212, 351, -99, 20, 1);
        $theWho = array("Jesse", "Bob", "Cozart", "Dad", "Sylvester", "Sandy");

        for ($i=0; $i<$theColors.length; $i++)
        {
                $sql = "INSERT INTO favStuff (color, number, who) VALUES ('$theColors[$i]', '$theNumbers[$i]', '$theWho[$i]');";

                $con->query($sql);
        }
?>
