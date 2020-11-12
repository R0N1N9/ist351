<?php
  include_once 'header.php';
?>
<body style="background-image: url('img/signs.gif')">
<summary>What is Cross Site Scripting</summary>
<div style="background-color:darkslategrey" id="rcorners">
  <blockquote class=classex>
    Cross-Site Scripting (XSS) attacks are a type of injection, in which malicious scripts are injected into otherwise benign and trusted websites. XSS attacks occur when an attacker uses a web application to send malicious code, generally in the form of a browser side script, to a different end user. Flaws that allow these attacks to succeed are quite widespread and occur anywhere a web application uses input from a user within the output it generates without validating or encoding it.

  An attacker can use XSS to send a malicious script to an unsuspecting user. The end user’s browser has no way to know that the script should not be trusted, and will execute the script. Because it thinks the script came from a trusted source, the malicious script can access any cookies, session tokens, or other sensitive information retained by the browser and used with that site. These scripts can even rewrite the content of the HTML page. For more details on the different types of XSS flaws, see: Types of Cross-Site Scripting. (OWASP)
  </blockquote>
</div>

  <?php
  /*
  $cookie_name = "user";
  $cookie_value = "John Doe";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


  $_SESSION{'username'] = "jr";
  echo $_SESSION['username'];

  if (!isset($_SESSION['username'])) {
      echo "You are not logged in!"
  }

  else {
    echo "You are logged in!"
  }*/
  ?>




  <div>
    <h1><a href="https://www.youtube.com/watch?v=84YZXoJTp4E">Check out this video for a brief explaination of XSS!</a></h1>
  <!--</details>-->
  <!--
  <summary>XSS 1</summary>
  	<div style="background-color:darkslategrey" id="rcorners">
      <h1><a href="./phpsecurity/xss/xss.php">For a simple xss page</a></h1>
  </div>

  <details>
  <summary>HINT</summary>
    <p>Think of how input might be accepted into a PHP SQL query. Are there quotes/strings? Are boolean conditions involved when authenticating into a form?</p>
  </details>
  <details>
  <summary>ANSWER</summary>
  <div style="background-color:darkslategrey" id="rcorners">
    <h1>exploit code:</h1>
    <p>  ' OR '1'='1 (this statement is always true)


      '; DROP TABLE test; --

      <h1>full sql query:</h1>
      <p>
      SELECT * FROM user_info WHERE email = ''; DROP TABLE test; -- AND password = '' OR '1'='1'
    </p>
  </div>
  </details>
  <details>
  <summary>THE PROBLEM</summary>
  <div style="background-color:darkslategrey" id="rcorners">
    <h1>The problem lies in the way the backend php code is accepting inputs.
      Pay attention to how the email variable is passed into the sql query from the form:
    </h1>

    <p>
      if (isset($_POST['email'])) {

      $email = $_POST['email'];

      $user = $sqli1->query("SELECT * FROM users WHERE email = '{$email}'");
    </p>
    </div>
  </details>
  <details>
  <summary>THE FIX</summary>
  <div style="background-color:darkslategrey" id="rcorners">
    <h1>Instead, using prepared statements is a quick and easy way to sanitize your inputs:
    </h1>

    <p>
      $user = $db->prepare("SELECT * FROM users WHERE email = :email");

    $user->execute(['email' => $email,]);
  </p>
    </div>
  </details>
-->
<!--</details>-->


  <!--</details>-->
  <summary>XSS</summary>
  <div style="background-color:darkslategrey" id="rcorners">
  <?php

  #include_once "./phpsecurity/xss/db.php";

  #setcookie("username", "jr",strtotime("+1 day"));

  #echo $_COOKIE["username"];

  if (isset($_POST["submit"])) {


    $pre_stmt = $conn->prepare("INSERT INTO contact (name,message) VALUES (?,?)");

    #vuln code:
    $pre_stmt->bind_param("ss",$_POST["name"],$_POST["message"]);
    /*
    #thefix:
    $name = htmlspecialchars($_POST["name"]);
    $message = htmlspecialchars($_POST["message"])
    $pre_stmt->bind_param("ss",$name,$message);
    */

    if($pre_stmt->execute()){
      echo "Message posted";
    }
    else{
      echo "Some error";
    }

  }


  #xss code:
  #<script>alert('hacked');</script>
  #<script>window.location = 'http://localhost/phplessons/XSSSQLI/phpsecurity/xss/xss2.php'


  #<script>alert(document.cookie)</script>

  ?>

  <!DOCTYPE HTML>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

      <title>Chat Room</title>
    </head>
    <body>

      <div class="container">
        <h2>Chat Room</h2>
        <div class="row">
        <div class="col-md-6">
          <form method="post" action="" autocomplete="off">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter Your Name">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else ;)</small>
                  </div>
                  <div class="form-group">
                    <label for="msg">Enter Your Message</label>
                    <textarea class="form-control" id="msg" name="message" placeholder="Enter Your Message here"></textarea>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
        </div>
      </div>

  <div class="container">

    <?php

    $pre_stmt = $conn->prepare("SELECT * FROM contact");
    $pre_stmt->execute();
    $result = $pre_stmt->get_result();
    while($row = $result->fetch_assoc()){
      echo "
          <h4>".$row["name"]."</h4>
          <p>".$row["message"]."</p>
        ";
    }

     ?>

      </div>




      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

      <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
      -->
    </body>
  </html>
  <h1><a href="./phpsecurity/xss/xss2.php">For the simple version</a></h1>
  </div>
    <details>
    <summary>HINT</summary>
      <div style="background-color:darkslategrey" id="rcorners">
      <p>These fields (name and message) are added to a database
        that is output to the screen for all visitors to see.
        Try inputting some javascript commands to see what happens!
      </p>
    </div>
    </details>
    <details>
    <summary>ANSWER</summary>
    <div style="background-color:darkslategrey" id="rcorners">
      <h1>XSS exploit code:
      </h1>
      <pre>
        <code>
          <p>
            This message added to the database will make it so that every site visitor gets an alert:
          </p>
       &lt;script&gt;alert('hacked');.&lt;/script&gt; <p>alerts are a good way to check if an application is vulnerable to XSS</p>
       <p>This window.location script can be used to direct visitors to ANY site.

         For example, if attacker Sandy wanted to sabotage my site by blinding my site viewers with images to mac and cheese, he can input the following script:
       </p>
       &lt;script&gt;window.location = 'https://www.kraftmacandcheese.com/products/100166000002/blue-box'&lt;/script&gt;
       <p>This script returns user cookies, which can be used by attackers to impersonate a session!
       </p>
       &lt;script&gt;alert(document.cookie)&lt;/script&gt;
      </code>
    </pre>
    </div>
    </details>
    <details>
    <summary>THE PROBLEM</summary>
    <div style="background-color:darkslategrey" id="rcorners">
      <h1>vuln code:
      </h1>
      <pre>
        <code>
        $pre_stmt->bind_param("ss",$_POST["name"],$_POST["message"]);
      </code>
      </pre>
      </div>
    </details>
    <details>
    <summary>THE FIX</summary>
    <div style="background-color:darkslategrey" id="rcorners">
      <h1>The fix is very simple - PHP code can be design so that pages can try escaping special characters as inputs with the htmlspecialchars function:
      </h1>
        <pre>
          <code>
            $name = htmlspecialchars($_POST["name"]);
            $message = htmlspecialchars($_POST["message"])
            $pre_stmt->bind_param("ss",$name,$message);
          </code>
        </pre>
    <p>
    This makes it so that instead of "<" for a less than sign, the output can be interpreted as entities rather than html elements
    (such as brackets from script tags that are often used in XSS attacks!)
  </p>
      </div>
    </details>

  </div>

<!--</details>-->


<!--
  <details>
  <summary>XSS3</summary>
  	<div style="background-color:darkslategrey" id="rcorners">
  	<h3 >flags are structured as follows:</h3>
  	<h3 class="blinking">bearXXSing{hash}</h3>
  	<h1>You can input the flags here, or at each stage:</h1>
  		<form>
  			<input type="text" id="f" placeholder="Paste flag">
  			<button type="button" onclick="getInfoF()">Check!</button>
  		</form>
  		<script src="92bb42b845168fad6f9ccf3d50448512.js"></script>
  </div>
  <details>
  <summary>HINT</summary>
    <p>asdjf;alksjdf;l</p>
  </details>
  <details>
  <summary>ANSWER</summary>
    <p>as;ldjfha;owiehbfo;</p>
  </details>
  </details>
-->

</details>
  </div>

</div>

</body>
</html>
<script type="text/javascript">
		</script>
</body>
</html>

</div>

<?php
  include_once 'footer.php';
?>
