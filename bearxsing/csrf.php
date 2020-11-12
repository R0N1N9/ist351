<?php
  include_once 'header.php';
?>

<html>
<body style="background-image: url('img/pharmacy.gif')">

<summary>Enter: CSRF</summary>
<div style="background-color:darkslategrey" id="rcorners">
<blockquote class=classex>
Cross-Site Request Forgery (CSRF) is an attack that forces an end user to execute unwanted actions on a web application in which they’re currently authenticated. With a little help of social engineering (such as sending a link via email or chat), an attacker may trick the users of a web application into executing actions of the attacker’s choosing. If the victim is a normal user, a successful CSRF attack can force the user to perform state changing requests like transferring funds, changing their email address, and so forth. If the victim is an administrative account, CSRF can compromise the entire web application.
</blockquote>
</div>
<h5><a href="https://www.youtube.com/watch?v=j-rQiXYJsH0">The code used in this example was found in the following video.</a></h5>
<h5><a href="https://www.youtube.com/watch?v=PBvFuVRCuMg">Check out this video for a brief explaination of CSRF!</a></h5>

<div>
  <!--</details>-->
  <summary>CSRF</summary>
  	<div style="background-color:darkslategrey" id="rcorners">
      <h5>This exercise has already been completed. In this scenario you are logged in as the following user :</h5>
      <br>
      <h3>admin</h3>
      <br>
        <h5>and this site has a profile page button to delete your account that unsets the "active status" parameter in the database: </h5>
        <br>
      <?php

      #echo $_SESSION["email"] = "admin@secLounge.com";
      if (isset($_POST['view'])) {
        $testsql = "SELECT * FROM users";
        $testquery = $conn->query($testsql);
        if (mysqli_num_rows($testquery) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($testquery)) {
            echo "id: " . $row["id"]. " - Username: " . $row["username"]. "<br>". "bio: " . $row["bio"] . "<br>" . "Active status: " . $row["active"]. "<br>";
          }
        }
      }

      ?>
      <form action="" method="post">
        <input type="submit" name="view" value="View user account status">
      </form>

      <form action="./phpsecurity/csrf/delete.php" method="post">
        <input type="submit" name="submit" value="Delete your account">
      </form>
      <br>
      <h5>^This "gift" from an anonymous sender actually links to the same resource as the "Delete your account" button above:</h5>
      <br>
      <a href="./bearxssing/attacker/csrf.php">Gift for you</a>

  </div>
  <h1><a href="./phpsecurity/csrf/csrf.php">Alternatively if you would like a simple webpage.</a></h1>
  <details>
  <summary>HINT</summary>
    <div style="background-color:darkslategrey" id="rcorners">
      <p>Attackers can piggyback off of privileges of authenticated users by sending them webpages that link to protected resources.
      </p>
    </div>
  </details>
  <details>
  <summary>ANSWER</summary>
  <div style="background-color:darkslategrey" id="rcorners">
    <h1>As an attacker, you can create your own webpage or image sources
      <br>
      <br>
      that can be sent to a user with an authenticated/active session.
      <br>
      <br>
      This is the code behind the "Gift For You" link
    </h1><br>
    <p>
      <pre>
      <code>
        &lt;!DOCTYPE html&gt;
        &lt;html lang="en"&gt;
          &lt;head&gt;
            &lt;meta charset="UTF-8"&gt;
            &lt;title&gt;Attacker&lt;/title&gt;
          &lt;/head&gt;
          &lt;body&gt;
            &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"&gt;&lt;/script&gt;
            &lt;script&gt;
              $.ajax({
                'url': 'http://localhost/phpsecurity/csrf/delete.php'
                'type': 'post'
              });
            &lt;/script&gt;
          &lt;/body&gt;
        &lt;/html&gt;
      </code>
      </pre>
      <h1><a href="./phpsecurity/csrf/enemy.txt">Attacker code linking to resource that requires authentication (delete.php)</a></h1>
    </p>
    </p>
  </div>
  </details>
<!--
  <details>
  <summary>THE PROBLEM</summary>
  <div style="background-color:darkslategrey" id="rcorners">
    <h1> This was kind of a rough example, but essentially
      basic PHP forms
    </h1>
    </div>
  </details>
-->
  <details>
  <summary>THE FIX</summary>
  <div style="background-color:darkslategrey" id="rcorners">
    <h1>  #step 1 for protection: make sure your page ONLY accepts post requests
    </h1>
    <pre>
      <code>
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
      if(!isset($_POST['token'])) || ($_POST['token']) !== $_SESSION['token'])) { #if the token isn't set, OR if if the token doesn't doesn't equal the token stored in the session
        die('Invalid CSRF token')
      }
    }
    </code>
  </pre>
  <h1>  #step 2 for protection: TOKENS - generate a random token
  </h1>
  <pre>
    <code>

    $_SESSION['_token'] = bin2hex(openssl_random_pseudo_bytes(16));
    die($_SESSION['_token']);

    #check token in every form to further validate users (seen in step 1)
    &lt;form action="./phpsecurity/csrf/delete.php" method="post"&gt;
      &lt;input type="submit" name="submit" value="Delete your account"&gt;
      &lt;input type="hidden" name="_token" value="&lt;?php echo $_SESSION['_token'];"&gt; #place the token into the form
    </form>
    </code>
  </pre>
    <h5><a href="https://laravel.com/docs/8.x/csrf"> There are also modern packages and frameworks called "middleware" that include protections for CSRF.</a></h5>
    <h5><a href="https://www.checkmarx.com/2016/01/22/ultimate-guide-understanding-preventing-csrf/">CSRF tokens, for the uninitiated, are client-side mechanisms used to make each request unique for the user. When the token is verified on the server-side, the request is validated, and because the app creates a new token each time any page is served to anyone, the request could not be forged.</a></h5>
    <h5><a href="https://www.youtube.com/watch?v=Ub5TLow9GL4">Check out this link to learn more about Tokens and protection against CSRF!</a></h5>
    <h5><a href="https://www.youtube.com/watch?v=j-rQiXYJsH0">Check out this link to go through the same tutorial I did!</a></h5>
  </details>
<!--</details>-->


  </div>

</body>
</html>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>

<?php
  include_once 'footer.php';
?>
