<?php
  include_once 'header.php';
?>
<head>
  	<title>secLounge 2.0: SQL INJECTION</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <!-- ******************************************************************************************************** -->
  <body style="background-image: url('img/flyingcars.gif')">

  	<div class="container" style="background-image: url('img/flyingcars.gif')">

  		<header id="rcorners" style="background-image: url('img/walking.gif')">Welcome!!!</header>

  	<!--Title -->
  		<h3 id="rcorners" class="blinkingyellow" style="background-image: url('img/walking.gif')">secLounge 2.0</h3>
  	</div>

    <summary> What is SQL Injection?</summary>

      <div style="background-color:darkslategrey" id="rcorners">
        <blockquote class=classex>
    A SQL injection attack consists of insertion or “injection” of a SQL query via the input data from the client to the application. A successful SQL injection exploit can read sensitive data from the database, modify database data (Insert/Update/Delete), execute administration operations on the database (such as shutdown the DBMS), recover the content of a given file present on the DBMS file system and in some cases issue commands to the operating system. SQL injection attacks are a type of injection attack, in which SQL commands are injected into data-plane input in order to effect the execution of predefined SQL commands. (OWASP)
    </blockquote>
  </div>


  	<hr/>
  	<hr/>
  	<hr/>



    <div>
      <h1><a href="https://www.youtube.com/watch?v=wcaiKgQU6VE">Check out this video for a brief explaination of SQLI!</a></h1>
    <summary>SQLI 1</summary>
      <div style="background-color:darkslategrey" id="rcorners">
        <?php

        # '; DROP TABLE forum_topics; --
        #now running 2 queries - first where email = empty string; then drop table forum_topics
        #$conn = mysqli_connect('localhost','root','', 'codecourse');
        $connpdo = new PDO('mysql:host=127.0.0.1;dbname=php_security','root','');

        if (isset($_POST['pass'])) {
          $pass = $_POST['pass'];

          #give back no record at all or record if email is found
          $user = $connpdo->query("SELECT * FROM users WHERE password = '{$pass}'");
          #412497samloo
          #$user = $conn->query("SELECT * FROM users WHERE email = ''; DROP TABLE forum_topics; --'");

          #fix:
          /*
          $user = $db->prepare("SELECT * FROM users WHERE email = :email");
          $user->execute([
            'email' => $email,
          ]);*/

          if ($user->rowCount()) {
            #die('Authenticated successfully');
            echo " Authenticated successfully";
            echo "<br>";
            $testsql = "SELECT * FROM test";
            $testquery = $conn->query($testsql);
            if (mysqli_num_rows($testquery) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($testquery)) {
                echo "id: " . $row["id"]. " - data: " . $row["data"] ."<br>";
              }
            }
          }
          else {
            echo 'Incorrect password.';
          }

        }
        ?>


        <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="UTF-8">
            <title></title>

          </head>
          <body>
            <form action="" method="post" autocomplete="off">
              <label for="pass">
                Enter the admin password to reveal the "test" database.
                <input type="text" name="pass" id="pass">
              </label>
              <input type="submit" value="Recover">
            </form>
            <br>Objective: Try to delete the "test" database!
          </body>

    </div>
    <h1><a href="./phpsecurity/sqli/sqlinjection.php">Simple Layout Version.</a></h1>
    <details>
    <summary>HINT</summary>
      <div style="background-color:darkslategrey" id="rcorners">
        <p>Think of how input might be accepted into a PHP SQL query. Can there be quotes surrounding user inputs? Are boolean conditions involved when authenticating into a form?
        </p>
        <br>(You will know you are successful if you get a MYSQLI_NUM_ROWS() error message,<br> because then the PHP code can no longer find the database!)
      </div>
    </details>
    <details>
    <summary>ANSWER</summary>
    <div style="background-color:darkslategrey" id="rcorners">
      <h1>Admin password:</h1>
      <p>412497samloo <br><br>(Fun fact, this password was found in a NordVPN data breach)</p>
      <h1>exploit code:</h1>
      <pre>
        <code>
      ' OR '1'='1 <p>(this statement is always true)</p>
        '; DROP TABLE test; -- <p>SQL query to delete the test database</p>
        <h1>full sql query in PHP variable:</h1>
        $user = $conn->query("SELECT * FROM users WHERE password = ''; DROP TABLE forum_topics; --'");
      </code>
    </pre>
    </div>
    </details>
    <details>
      <summary>THE PROBLEM</summary>
      <div style="background-color:darkslategrey" id="rcorners">
        <p>The problem lies in the way the backend php code is accepting inputs.
          Pay attention to how the user variable is passed into the sql query from the form:
        </p>

        <pre>
          <code>
          if (isset($_POST['user'])) {
          $user = $_POST['user'];
          $user = $sql->query("SELECT * FROM users WHERE user = '{$user}'");
          </code>
        </pre>
        </div>
      </details>
      <details>
      <summary>THE FIX</summary>
      <div style="background-color:darkslategrey" id="rcorners">
        <p>Instead, using prepared statements is a quick and easy way to sanitize your inputs:
        </p>

        <pre>
          <code>
            if (isset($_POST['user'])) {
            $pre_stmt = $con->prepare("SELECT * FROM user_info WHERE user = ? AND password = ?");
            $pre_stmt->bind_param("ss",$_POST["email"],$_POST["password"]); #this parameter binds with the above query
            $pre_stmt->execute();
            $result = $pre_stmt->get_result();
        </code>
      </pre>
        </div>
        <h5><a href="https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php.">Check out this link to learn more about prepared statements and protection against SQLI!</a></h5>
      </details>



    <summary>SQLI 2</summary>
      <div style="background-color:darkslategrey" id="rcorners">
        <?php

        if($conn->connect_error){
          echo $conn->connection_error;
        }

        if (isset($_POST["submit"])) {
          $user = $_POST["user"];
          $password = $_POST["password"];

          #$sql = "SELECT * FROM user_info WHERE user = '$user' AND password = '$password'";
          echo "Query:" . $sql = "SELECT * FROM user_info WHERE user = '$user' AND password = '$password'";
          echo "<br>";
          #$sql = "SELECT * FROM user_info WHERE user = '' OR '1'='1' AND password = '$password'";

          $run_query = $conn->query($sql); #object oriented
          echo "<br>";

          if($run_query){
            $row = $run_query->fetch_assoc();
            $userrow = $row["user"];
            $passwordrow = $row["password"];
                if($userrow = $row["user"] && $passwordrow = $row["password"]){
                echo "Authentication successful. You are now logged in as ". $user;
                echo "<br>";
                echo "email: " . $row["email"];
                echo "<br>";
                echo "password: " . $row["password"];
                echo "<br>";
                echo "balance: " . $row["balance"];
                }
                else{
                  echo "Authentication failure: Invalid credentials.";
                }
          }

          /*
          while($row = mysqli_fetch_array($run_query))
          {
            echo $user;
            if($row['user'] == $user)
            {
              //row found, do processing ...
              echo "Success. Welcome " . $user;
              //reset pointer and break from loop
              if(!mysqli_data_seek($run_query, 0))
                //handle error
              break;
            }
            else{
              echo "Authentication unsuccessful";
              break;
            }
          }*/

          /*
          if (mysqli_num_rows($run_query) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($run_query)) {
              echo "id: " . $row["id"]. " - email: " . $row["email"]. "<br>". "- Username:" . $row["user"]. "<br>"."Password: " . $row["password"]. "<br>"."Balance: " . $row["balance"]. "<br>";
            }
          } else {
              echo "Authentication unsuccessful";
          }*/
        }
        #' OR '1'='1
          #^always true
        #'; DROP TABLE test; --

if (isset($_POST["tables"])) {
        $tables = "SHOW TABLES FROM php_security";
        $result = mysql_query($tables);

        if (!$result) {
            echo "DB Error, could not list tables\n";
            echo 'MySQL Error: ' . mysql_error();
            exit;
        }

        while ($rowtables = mysql_fetch_row($result)) {
            echo "Table: {$rowtables[0]}\n";
        }

        mysql_free_result($result);
      }
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
        Objective: Log into the admin account to reveal their account balance
      <h1><a href="./phpsecurity/sqli/sqlinjection2.php">Alternatively if you would like a simple webpage.</a></h1>
    </div>


    <details>
    <summary>HINT</summary>
      <div style="background-color:darkslategrey" id="rcorners">
        <p>Think of how input might be accepted into a PHP SQL query. Can there be quotes surrounding user inputs? Are boolean conditions involved when authenticating into a form?
        </p>
      </div>
    </details>
    <details>
    <summary>ANSWER</summary>
    <div style="background-color:darkslategrey" id="rcorners">
      <h1>exploit code:</h1>
      <pre>
        <code>
            ' OR '1'='1
            <p>(This statement is always true, which can be useful in authentication scenarios)
            </p>

        '; DROP TABLE test; -- <p>(This is an SQL query to delete a table in the database</p>

        <h1>full sql query:</h1>

        SELECT * FROM user_info WHERE user = 'admin' AND password = '' OR '1'='1'
        </code>
      </pre>
    </div>
    </details>
    <details>
    <summary>THE PROBLEM</summary>
    <div style="background-color:darkslategrey" id="rcorners">
      <p>The problem lies in the way the backend php code is accepting inputs.
        Pay attention to how the user variable is passed into the sql query from the form:
      </p>

      <pre>
        <code>
        if (isset($_POST['user'])) {
        $user = $_POST['user'];
        $user = $sql->query("SELECT * FROM users WHERE user = '{$user}'");
        </code>
      </pre>
      </div>
    </details>
    <details>
    <summary>THE FIX</summary>
    <div style="background-color:darkslategrey" id="rcorners">
      <p>Instead, using prepared statements is a quick and easy way to sanitize your inputs:
      </p>

      <pre>
        <code>
          if (isset($_POST['user'])) {
          $pre_stmt = $con->prepare("SELECT * FROM user_info WHERE user = ? AND password = ?");
          $pre_stmt->bind_param("ss",$_POST["email"],$_POST["password"]); #this parameter binds with the above query
          $pre_stmt->execute();
          $result = $pre_stmt->get_result();
      </code>
    </pre>
      </div>
      <h5><a href="https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php.">Check out this link to learn more about prepared statements and protection against SQLI!</a></h5>
    </details>

    </details>
    </div>

  	<hr/>
  	<hr/>
  	<hr/>
  	<footer>© JR Gumarin, IST 351 at Mercer University, ALL WORK DONE BY MY ME AND MY OWN COLD CYBERNETIC HANDS! Copyright 2020</footer>

  </body>
</div>

<?php
  include_once 'footer.php';
?>
