<?php

dbconnect();

if (isset($_GET['Submit'])){
</div>
//Retrieve data

$id = $_GET['id]'];
$id = stripslashes($id); //php function to remove slashes from a string
$id = mysql_real_escape_string($id); //php function to escape special characters in the unescaped string(input)

  if (is_numeric($id)){

    $getid = "SELECT first_name, last_name FROM users WHERE user_id = '$id'";
    $result = mysql_query($getid) or die('<pre>' . mysql_error() . '</pre>' );

    $num = mysql_numrows($result);

    $i=0;

    while ($i < $num) {

        $first = mysql_result($result,$i,"first_name");
        $last = mysql_result($result,$i,"last_name");

        echo '<pre>';
        echo 'ID: ' . $id . '<br>First name: ' . $first . '<br>Surname: ' . $last;
        echo '</pre>';

        $i++;
    }

  }

}

<h1>Vulnerability: SQL Injection</h1>
<div class = "vulnerable_code_area">
  <form action ="#" method = "GET">
    <input type="text" name="id">
    <input type="submit" name="Submit">
</form>

 ?>
