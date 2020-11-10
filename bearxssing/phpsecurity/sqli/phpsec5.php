<?php

require_once("db.php");

 ?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

 "http://www.w3.org/TR/xhtml/DTD/xhtml1-strict.dtd">

 <html xmlns="http://wwww.w3.org/1999/xhtml" lang="en" xml:lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

    <title>Bad Login</title>

      <div id="main">

        <?php

        if (isset($_POST['submitted'])) { //check if the form has been submitted

          $e = $_POST['email'];
          $p = $_POST['pass'];
          #thefix:
          /*
          $e = escape_data($_POST['email']);
          $p = escape_data($_POST['pass']);
          */


          //query the databases
          $query = "SELECT user_id, first_name, last_name, email, userid, pass FROM users WHERE email='$e' AND pass=SHA('$p')";

          $result = mysqli_query ($query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error());

          if(@mysqli_num_rows($result) > 0) { //a match was made
            //register the values and redirect.

            $row = mysqli_fetch_array ($result, MYSQL_NUM);

            echo "First name: " . $row[1] . "<br />";
            echo "Last name: " . $row[2] . "<br />";
            echo "Email: " . $row[3] . "<br />";
            echo "Login Id: " . $row[4] . "<br />";
            echo "Password: " . $row[5] . "<br />";

            while ($row = mysqli_fetch_assoc($result)) {
              echo "First name: " . $row['first_name'] . "<br />";
              echo "Last name: " . $row['last_name'] . "<br />";
              echo "Email: " . $row['email'] . "<br />";
              echo "Login Id: " . $row['userid'] . "<br />";
              echo "Password: " . $row['pass'] . "<br />";
            }
            mysqli_close(); //close database connection


          }
          else{ //no match was made
            echo '<br><br><p><font color="red" size="+1">Either the email address and password entered do not match those on file or you have not yet activated your account.';
            mysqli_close(); //Close the database connecction

          }
        }

         ?>
<h1>Login</h1>
<p>Your browser must allow cookies in order to log in.</p>

<form action="phpsec5.php" method="post">

  <fieldset>

    <p><b>Email Address:</b> <input type="text" name="email" size="25" /></p>

    <p><b>Password:</b> <input type="password" name="pass" size="30" /></p>

    <div align="center"><input type="submit" name="submit" value="Login" /></div>

    <input type="hidden" name="submitted" value="TRUE" />

  </fieldset>

</form>

</div>
</body>
</html>
