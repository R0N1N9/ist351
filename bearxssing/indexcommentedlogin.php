<?php
  #include_once 'includes/dbh.php';

  session_start();
  /*
  if (isset ($_GET['newAccount']))
{



<h1>Create an Account</h1><br>
<form method="post" action=".">
  First name:<br>
  <input type="text" name="firstname"><br>
  Last name:<br>
  <input type="text" name="lastname" ><br><br>
  User name:<br>
  <input type="text" name="username" >
<?php
        if (isset($_GET['badUserName'])) echo "Username must be valid";
?>
<br><br>
Password:<br>
<input type="password" name="password1" >
<?php
      if (isset($_GET['badPassword'])) echo "Password must be valid";
?>
<br><br>
Re-enter your Password:<br>
<input type="password" name="password2" ><br><br>
<input type="submit" value="Create Account">
</form>
<?php
die("Create a new account.");
}
// Check for new account creation
if (isset ($_POST['password2']))
{
      if (strlen($_POST['username']) == 0)
      {
              header("Location: .?newAccount=true&badUserName=true");
              exit();
      }
      if (strlen($_POST['password1']) == 0)
      {
              header("Location: .?newAccount=true&badPassword=true");
              exit();
      }
      if ($_POST['password1'] == $_POST['password2'] )
      {
              $md5Pass = md5($_POST['password1']);
              $con = new mysqli('localhost','root','','bears');
              if ($con->connect_error)
              {
              die('Could not connect to mySQL in account creation: ' . $con->connect_error);
              }
              $sql = "INSERT INTO Users (userid, FirstName, LastName, Password) VALUES ('$_POST[username]','$_POST[firstname]', '$_POST[lastname]', '$md5Pass')";
              if (!$con->query($sql)=== TRUE)
                 {
                      echo "<h2>Account was Not created, please try again.</h2><br>";
                 }
              else
                      echo "<h2>Account Created</h2><br>";
       }
      else
      {
              die('Passwords do not match');
      }
}
// CHECK if login form is submitted
if(isset ($_POST["submit"])){
  $username=$_POST["username"];
  $password=$_POST["password"];
// Try to connect with the MySQL Server
$con = new mysqli('localhost','root','','Bears');
if ($con->connect_error)
{
die('Could not connect to mySQL: ' . $con->connect_error);
}
// Process logging in
$md5Password = md5($password);
$sql = "SELECT * FROM Users WHERE userid = '" . $username . "' AND Password = '" . $md5Password . "'";


$result = $con->query($sql);

if ($result->num_rows == 1)
{
   echo "<h2>YOU LOGGED IN!</h2><br>";
        $_SESSION["isLoggedIn"]=1;
        //setting a varable so that later I know
        // that this user is logged in
        $_SESSION["uname"]=$username;
        //setting another variable
        $_SESSION["bgcolor"]="lightcyan";
}
else
{
   echo "<h2>LOGIN FAILED!</h2><br>";
}


}

// Check if new color was selected
if (isset($_POST["pickColor"]))
{
        $_SESSION["bgcolor"] = $_POST["pickColor"];
}

// for logout or destroy session
if(isset($_GET["action"])){
    if($_GET["action"]){

        session_unset();
        //unset all session variables

        session_destroy();
        // destroy session
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IST351 Sessions Example</title>
</head>
    <body>
          <?php
               /////////////////  This is really cool.  Note how the PHP if statement is started here, but ended in another php block.
               ////////////////   The html that follows is only included if the php if condition is true.

            if(!$_SESSION["isLoggedIn"]==1){
                // checking the value of isLoggedIn
          ?>

        <div style="margin:auto; margin-bottom: 20px; width:500px; background-color:lightcyan; padding:20px; text-align:center; border:solid;">
        <h1>Our Favorite Sites</h1>
                <h3>Login to see our favorite sites</h3>
        <form action="." method="post">
        <table style="margin:auto; width:400px; border:solid; padding: 20px;">
          <tr>
            <td style="text-align:right;">User Name : </td>
            <td><label for="username"></label>
            <input name="username" type="text" id="username" size="35" /></td>
          </tr>
          <tr>
            <td style="text-align:right;">Password : </td>
            <td><label for="pass"></label>
            <input name="password" type="password" id="pass" size="35" /></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" name="submit" id="submit" value="See Favorite Sites" /></td>
          </tr>
          <tr>
              <td colspan="2"><a href=".?newAccount=true">Create Account</a></td>
          </tr>
          </table>
        </form>
<?php
               /////////////////   Here is the else part of the if started above.
            }
            else{
                                         echo "<div style='margin:auto; margin-bottom: 20px; width:500px; background-color
:".$_SESSION['bgcolor']."; padding:20px; text-align:center; border:solid;'>         <h1>Our Favorite Sites</h1>";
                 echo "<h3>Welcome <b><em>".$_SESSION["uname"]."</em></b></h3>";
                    ?>
            <div style='text-align:left; margin-left: 200px; margin-right:0px;'>
                                          <ul>
                                          <li><a href='http://google.com' target='_blank'>Google</a></li>
                                          <li><a href='http://w3schools.com' target='_blank'>W3Schools</a></li>
                                          <li><a href='http://php.net' target='_blank'>PHP</a></li>
                                          <li><a href='page2.php' >My Page 2</a></li>
                                          </ul>
                                          </div>
                  <br />
                                          <br />
                                          Set background color:
                                          <form action="." method="post">
                                              <select name="pickColor" >
                                                  <option value="black">Black</option>
                                                  <option value="white">White</option>
                                                  <option value="yellow">yellow</option>
                                                  <option value="blue">blue</option>
                </select>
                                              <input type="submit" value="Change Color" />
                                          </form>
            <a href='index.php?action=logout'>Logout</a>
         <?php
            ////////////////////  And here is the end of the php if statment.
            }
         ?>
</div>
</body>
</html>


*/
?>
<!DOCTYPE html>




<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}


</style>
</head>

<body style="background-image: url('images/nightcity.gif'); background-size:2000px 10000px" style="background-color:darkslategrey">

<button class="tablink" onclick="openPage('Home', this, 'red')">secLounge Legacy (276)</button>
<button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">secLounge 2.0: SQL Injection</button>
<button class="tablink" onclick="openPage('Contact', this, 'blue')">secLounge 2.0: bearXSSing</button>
<button class="tablink" onclick="openPage('About', this, 'orange')">secLounge 2.0: CSRF</button>

<div id="Home" class="tabcontent" >

  <head>
  	<title>JR Gumarin's IST 276 Project</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>

  <body>



  <div style="background-image: url('images/outrun.gif')" class="container">

  <header class="blinkingyellow" style="background-image: url('images/steamuserimages-a.akamaihd.net.gif')">JR Gumarin IST 276 Project: Simple CTF</header>

  <!--Title -->
  <h2 id="rcorners" class="blinking">Howdy!</h2>
  <h3 id="rcorners" class="blinkingyellow" style="background-image: url('walking.gif')">Welcome to the secLounge!</h3>

  </div>



  <div class="container">

  	<div class="alert alert-warning alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong class="blinking">ALERT!</strong> YOU ARE NOW ENTERING THE SIMULATION
    </div>


  <hr/>
  <hr/>
  <hr/>
  <div>
  <!-- Project Description -->
  <div>
  <details>
  <summary>CTF</summary>
  	<h4>CTF = Capture the Flag</h4>
  	<h2>FIND THE FLAGS</h2>
  	<div style="background-color:darkslategrey" class="container">
  	<h3 >flags are structured as follows:</h3>
  	<h3 class="blinking">seclounge{hash}</h3>
  	<h1>You can input the flags here, or at each stage:</h1>
  		<form>
  			<input type="text" id="f" placeholder="Paste flag">
  			<button type="button" onclick="getInfoF()">Check!</button>
  		</form>
  		<script src="92bb42b845168fad6f9ccf3d50448512.js"></script>
  </div>
  </details>
  </div>


  <hr/>
  <hr/>
  <hr/>
  <!-- HTML -->
  <div>

  <details >
  <summary>CHALLENGE 1: HTML WEB EXPLOITATION</summary>
  <div id="rcorners" style="background-color:darkslategrey" class="container">
  	<h2>This is why you shouldn't use Autofill!</h2>
  	<p>Try to uncover this password to get the first flag!</p>
  	Password: <input type="password" value="secLounge{b09e0f69eb66768817aa11513219bdc0}" id="myInput"><br><br>

  	<h1>input the flag here:</h1>
  		<form>
  			<input type="text" id="f" placeholder="Paste flag">
  			<button type="button" onclick="getInfoF()">Check!</button>
  		</form>
  		<script src="92bb42b845168fad6f9ccf3d50448512.js"></script>
  </div>
  <details>
  <summary id="rcorners">HINT</summary>
  	<p>View Page Source & try editing a "password"</p>
  </details>
  <details>
  <summary>ANSWER</summary>
  <input type="checkbox" onclick="myFunction()">I made it easy wiht this script

  <script>
  function myFunction() {
  	var x = document.getElementById("myInput");
  	if (x.type === "password") {
  		x.type = "text";
  	} else {
  		x.type = "password";
  	}
  }
  </script>
  	<p>Right click + inspect element on the password field. change type="password" to type="text"</p>
  <h1><a href="https://www.facebook.com/">Try this out in the password field of your favorite social media site!</a></h1>
  <p>And never use Autofill on shared computers</p>
  </details>
  </details>
  </div>

  <hr/>
  <hr/>
  <hr/>

  <!-- JavaScript -->
  <div>

  <details>
  <summary>CHALLENGE 2: JAVASCRIPT LOGIN</summary>
  <div style="background-color:darkslategrey" class="container">
  	<h2>3Com 3CR414492</h2>
  	<p>Try to find the creds for this JS login!</p>
  	<form>
  		<input type="text" id="username" placeholder="Choose Username">
  		<input type="password" id="password" placeholer="Choose Password">
  		<button type="button" onclick="getInfo()">Click Me</button>
  	</form>
  	<script src="main.js"></script>

  <h1>input the flag here:</h1>
  	<form>
  		<input type="text" id="f" placeholder="Paste flag">
  		<button type="button" onclick="getInfoF()">Check!</button>
  	</form>
  	<script src="92bb42b845168fad6f9ccf3d50448512.js"></script>
  	</div>
  	<details>
  	<summary>HINT</summary>
  		<p>Google is your friend for finding device DOCUMENTATION</p>
  		<p>How is JS LINKED to a webpage?</p>
  	</details>
  	<details>
  	<summary>ANSWER</summary>
  		<h4><a href="https://www.google.com/search?client=firefox-b-1-d&sxsrf=ALeKk00Z7jfoPPcippP56JG7pkoyDlcL2Q%3A1588435871567&ei=n5utXuGYItettQbXlrzICA&q=intext%3Apassword+3Com+3CR414492+default+login&oq=intext%3Apassword+3Com+3CR414492+default+login&gs_lcp=CgZwc3ktYWIQAzoECAAQR1CVJFiVJGCZJmgAcAJ4AIABbIgBbJIBAzAuMZgBAKABAaoBB2d3cy13aXo&sclient=psy-ab&ved=0ahUKEwih5P3eyJXpAhXXVs0KHVcLD4kQ4dUDCAs&uact=5">Please make sure to change your home router's default admin credentials!</a></h4>
  		<h1><a href="https://whatis.techtarget.com/definition/Google-dork-query">Also a great opporunity to try Google dorking!</a></h1>
  	</details>
  </details>
  </div>

  <hr/>
  <hr/>
  <hr/>
  <!-- PHP -->
  <div>
  <details>
  <summary>CHALLENGE 3: DIRBUSTED</summary>
  <div style="background-color:darkslategrey" class="container">

  <p>There is a hidden .txt file on this site that contains the flag.</p>

  <h1>input the flag here:</h1>
  	<form>
  		<input type="text" id="f" placeholder="Paste flag">
  		<button type="button" onclick="getInfoF()">Check!</button>
  	</form>
  	<script src="92bb42b845168fad6f9ccf3d50448512.js"></script>
  </div>
  <details>
  <summary>HINT</summary>
  <p>For this challenge, you will need a script that searches through url subdomains and subdirectories.</p>
  <p>Alternatively, if you've done CTFs before, try looking for some common .txt files.
  </details>
  <details>
  <summary>ANSWER</summary>
  	<p>Recommended and common tools for this challenge are Dirbuster, Dirb, and Gobuster. They can use wordlists to query url subdomains.</p>
  	<h1><a href="https://github.com/OJ/gobuster">gobuster on GitHub</a></h1>
  	<h1><a href="https://www.darknet.org.uk/2016/03/dirb-domain-brute-forcing-tool/r">dirb</a></h1>
  	<p>For those of you who are new to CTFs, 'robots.txt' is a common file on many CTF boxes.</p>
  </details>
  </details>
  </div>

  <hr/>
  <hr/>
  <hr/>
  <!-- Forensics -->
  <div>
  	<details>
  	<summary>CHALLENGE 4: FORENSICS</summary>
  	<div style="background-color:darkslategrey" class="container">
  	<h1 class="blinking">For this project, I ride solo!</h1>
  	<img src="images/drive_embed.gif" alt="drive" height="500" width="800">

  <h1><a href="https://stegosuite.org/">Did you know that you can hide messages in pictures?</a></h1>
  <h1>input the flag here:</h1>
  	<form>
  		<input type="text" id="f" placeholder="Paste flag">
  		<button type="button" onclick="getInfoF()">Check!</button>
  	</form>
  	<script src="92bb42b845168fad6f9ccf3d50448512.js"></script>
  </div>
  <details>
  <summary>HINT</summary>
  	<p>The flag is in the picture!</p>
  </details>
  <details>
  <summary>ANSWER</summary>
  	<p>Save the picture, install Stegosuite (linked), run it, and open the picture in Stegosuite. Then click extract.</p>
  </details>
  </details>
  </div>

  <hr/>
  <hr/>
  <hr/>
  <!-- Crypto -->
  <div>
  <details>
  <summary>CHALLENGE 5: CRYPTO</summary>
  <div style="background-color:darkslategrey" class="container">
  	<h4>CRYPTO</h4>
  	<p>39655fb7cccf3e04933f77508f5d1487</p>
  	<p>68e109f0f40ca72a15e05cc22786f8e6</p>
  	<p>467b7d12a5ecc3aaebdfed6d70ab7c51</p>
  	<h1>What can you make of these?...</h1>

  	<h1>input the flag here:</h1>
  		<form>
  			<input type="text" id="f" placeholder="Paste flag">
  			<button type="button" onclick="getInfoF()">Check!</button>
  		</form>
  		<script src="92bb42b845168fad6f9ccf3d50448512.js"></script>
  </div>
  <details>
  <summary>HINT</summary>
  	<h4><a href="https://hackernoon.com/cryptographic-hashing-c25da23609c3">These are MD5 hashes. The flag keyword is disguised as one of these hashes.</a></h4>
  	<p></p>
  	<h4><a href="https://resources.infosecinstitute.com/hashcat-tutorial-beginners/">You can use cracking software to find out what these words might be, but there are quicker ways...</a></h4>
  </details>
  <details>
  <summary>ANSWER</summary>
  	<h1><a href="https://crackstation.net/">Plug the hash into a database site like crackstation, and put the plaintext flag in the seclounge{} brackets for submission!</a></h1>
  </details>
  </details>
  </div>

  <hr/>
  <hr/>
  <hr/>
  <!-- External Resources -->
  <div>
  	<details>
  	<summary>CTI</summary>
  	<h4>Cyber Threat Intelligence</h4>
  	<blockquote class="classex">Below are some incredible cyber threat intelligence sources, so that you can stay abreast on the latest threats:</blockquote>

  	<article>
  		<h5><a href="https://exchange.xforce.ibmcloud.com/">IBM X-Force Exchange</a></h5>
  		<blockquote class="classex"></blockquote>
  		</article>

  			<article>
  				<h5><a href="https://unit42.paloaltonetworks.com/">Palo Alto Networks Unit 42 Blog</a></h5>
  				<blockquote class="classex"></blockquote>
  				</article>

  				<article>
  				<h5><a href="https://blog.talosintelligence.com/">Cisco Talos</a></h5>
  				<blockquote class="classex"></blockquote>
  			</article>

  			<article>
  				<h5><a href="https://research.checkpoint.com/category/threat-research/">CheckPoint</a></h5>
  				<blockquote class="classex"></blockquote>
  			</article>

  			<article>
  				<h5><a href="https://blog.trendmicro.com/trendlabs-security-intelligence/">Trend Micro</a></h5>
  				<blockquote class="classex"></blockquote>
  				</article>

  				<article>
  				<h5><a href="https://blog.malwarebytes.com/">Malwarebytes</a></h5>
  				<blockquote class="classex"></blockquote>
  			</article>

  			<article>
  				<h5><a href="https://threatpost.com/category/malware-2/">Threatposts</a></h5>
  				<blockquote class="classex"></blockquote>
  			</article>

  			<article>
  				<h5><a href="https://yara.readthedocs.io/en/latest/">Kaspersky</a></h5>
  				<blockquote class="classex"></blockquote>
  			</article>

  			<h4>Tools</h4>
  			<blockquote class="classex">Lastly, here are some amazing threat intelligence tools that you can access straight from your web browser:</blockquote>

  			<article>
  				<h1><a href="https://www.virustotal.com/gui/">VirusTotal</a></h1>
  				<blockquote class="classex">VirusTotal is a free signature-based virus, malware, and URL scanning service that queries malicious Indicators of Compromise (IOCs) across multiple databases.</blockquote>
  			</article>

  			<article>
  				<h1><a href="https://www.riskiq.com/webinar/how-analysts-use-passivetotal/">PassiveTotal</a></h1>
  				<blockquote class="classex">RiskIQ's PassiveTotal is a threat investigation platform that consolidates massive sets of diverse internet data sources into a single platform.</blockquote>
  			</article>

  				<article>
  				<h1><a href="https://www.shodan.io/">Shodan</a></h1>
  				<blockquote class="classex">Shodan is a powerful search engine that queries for Internet-connected devices around the world.</blockquote>
  			</article>


  </details>
  </div>
  <hr/>
  <hr/>
  <hr/>
  <hr/>
  <hr/>
  <footer>© JR Gumarin, IST 276 at Mercer University, ALL WORK DONE BY MY ME AND MY OWN COLD CYBERNETIC HANDS! Copyright 2020</footer>
  </div>
  </body>
  </div>

</div>
<!-- ******************************************************************************************************** -->
<div id="News" class="tabcontent">


  <head>
  	<title>secLounge 2.0: SQL INJECTION</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <!-- ******************************************************************************************************** -->
  <body>

  	<script src="RestaurantArrays.js"></script>

  	<audio id="Dust">
  		<source src="Dust.mp3" type="audio/mpeg">
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

  	<div class="container" style="background-image: url('flyingcars.gif')">

  		<header id="rcorners" style="background-image: url('walking.gif')">Welcome!!!</header>

  	<!--Title -->
  		<h3 id="rcorners" class="blinkingyellow" style="background-image: url('walking.gif')">secLounge 2.0</h3>
  	</div>

    <div>
    <button onclick="playAudio()">Synthwave</button>
    	<button onclick="pauseAudio()">Un-Synthwave</button>
  			<audio id="Dust">
  				<source src="Dust.mp3" type="audio/mpeg">
  			</audio>
      </div>

    <summary> What is SQL Injection?</summary>
    <blockquote class=classex>
    A SQL injection attack consists of insertion or “injection” of a SQL query via the input data from the client to the application. A successful SQL injection exploit can read sensitive data from the database, modify database data (Insert/Update/Delete), execute administration operations on the database (such as shutdown the DBMS), recover the content of a given file present on the DBMS file system and in some cases issue commands to the operating system. SQL injection attacks are a type of injection attack, in which SQL commands are injected into data-plane input in order to effect the execution of predefined SQL commands. (OWASP)
  </blockquote>

  	<hr/>
  	<hr/>
  	<hr/>



    <div>
      <h1><a href="https://www.youtube.com/watch?v=wcaiKgQU6VE">Check out this video for a brief explaination of SQLI!</a></h1>
    <details>
    <summary>SQLI 1</summary>
      <div style="background-color:darkslategrey" id="rcorners">
        <?php
        #Codecourse https://www.youtube.com/watch?v=cgwWpd4SqIM
        # '; DROP TABLE forum_topics; --
        #now running 2 queries - first where email = empty string; then drop table forum_topics
        #$conn = mysqli_connect('localhost','root','', 'codecourse');
        $sqli1 = new PDO('mysql:host=127.0.0.1;dbname=codecourse','root','');

        if (isset($_POST['email'])) {
          $email = $_POST['email'];

          #give back no record at all or record if email is found
          $user = $sqli1->query("SELECT * FROM users WHERE email = '{$email}'");

          #fix:
          /*
          $user = $db->prepare("SELECT * FROM users WHERE email = :email");
          $user->execute([
            'email' => $email,
          ]);*/

          if ($user->rowCount()) {
            die('Send email');
          }
        }
        ?>


        <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="UTF-8">
            <title>Reset password</title>

          </head>
          <body>
            <form action="sqlinjection.php" method="post" autocomplete="off">
              <label for="email">
                Email address
                <input type="text" name="email" id="email">
              </label>
              <input type="submit" value="Recover">
            </form>
            <h1><a href="./phpsecurity/sqli/sqlinjection.php">Alternatively if you would like a simple webpage.</a></h1>
          </body>

    </div>
    <details>
    <summary>HINT</summary>
      <p>asdjf;alksjdf;l</p>
    </details>
    <details>
    <summary>ANSWER</summary>
      <p>exploit code:
        ' OR '1'='1 (this statement is always true)
        '; DROP TABLE test; --

        full sql query:
        SELECT * FROM user_info WHERE email = ''; DROP TABLE test; -- AND password = '' OR '1'='1'
      </p>
    </details>
    <details>
    <summary>THE PROBLEM</summary>
    <div style="background-color:darkslategrey" id="rcorners">
      <p>if (isset($_POST['email'])) {
        $email = $_POST['email'];

        #give back no record at all or record if email is found
        $user = $sqli1->query("SELECT * FROM users WHERE email = '{$email}'");</p>
      </div>
    </details>
    <details>
    <summary>THE FIX</summary>
    <div style="background-color:darkslategrey" id="rcorners">
      <p>$user = $db->prepare("SELECT * FROM users WHERE email = :email");
      $user->execute([
        'email' => $email,
      ]);</p>
      </div>
    </details>


    </details>


    <details>
    <summary>SQLI 2</summary>
      <div style="background-color:darkslategrey" id="rcorners">
        <?php

        $sqli2 = new mysqli("localhost","root","","php_security");

        if($sqli2->connect_error){
          echo $sqli2->connection_error;
        }

        if (isset($_POST["submit"])) {
          $email = $_POST["email"];
          $password = $_POST["password"];

          #$sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
          echo $sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
          #$sql = "SELECT * FROM user_info WHERE email = '' OR '1'='1' AND password = '$password'";
          /*$run_query = $con->query($sql); #object oriented

          if($run_query){
            $row = $run_query->fetch_assoc();
            echo $email = $row["email"];
            header("location:profile.php?email=".$email);
          }*/
        }
        #' OR '1'='1
          #^always true
        #'; DROP TABLE test; --
        ?>
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>

          <form method="post" action="">
            <input type="text" name="email" placeholder="Enter Email"/>
            <br/><input type="password" name="password" placeholder="Enter Password"/>
            <br/><input type="submit" name="submit" value="Login"/>
          </form>
        </body>
        </html>

    </div>

      <details>
      <summary>HINT</summary>
        <p>asdjf;alksjdf;l</p>
      </details>
      <details>
      <summary>ANSWER</summary>
        <p>as;ldjfha;owiehbfo;</p>
      </details>
      <details>
      <summary>THE FIX</summary>
        <p>as;ldjfha;owiehbfo;</p>
      </details>

    </details>

    <details>
    <summary>SQLI 3</summary>
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


    </details>
    </div>


      <?php
      /*
      $con = new mysqli("localhost","root","","php_security");

      if($con->connect_error){
        echo $con->connection_error;
      }

      if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        #$sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
        echo $sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
        #$sql = "SELECT * FROM user_info WHERE email = '' OR '1'='1' AND password = '$password'";
        /*$run_query = $con->query($sql); #object oriented

        if($run_query){
          $row = $run_query->fetch_assoc();
          echo $email = $row["email"];
          header("location:profile.php?email=".$email);
        }*
      }
      #' OR '1'='1
        #^always true
      #'; DROP TABLE test; --
      */
      ?>

  	<hr/>
  	<hr/>
  	<hr/>
  	<footer>© JR Gumarin, IST 351 at Mercer University, ALL WORK DONE BY MY ME AND MY OWN COLD CYBERNETIC HANDS! Copyright 2020</footer>

  </body>
</div>


<!-- ******************************************************************************************************** -->

<div id="Contact" class="tabcontent">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Elegant Login Page - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    /* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height());
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <html>

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

  <summary>What is Cross Site Scripting</summary>
  <blockquote class=classex>
    Cross-Site Scripting (XSS) attacks are a type of injection, in which malicious scripts are injected into otherwise benign and trusted websites. XSS attacks occur when an attacker uses a web application to send malicious code, generally in the form of a browser side script, to a different end user. Flaws that allow these attacks to succeed are quite widespread and occur anywhere a web application uses input from a user within the output it generates without validating or encoding it.

  An attacker can use XSS to send a malicious script to an unsuspecting user. The end user’s browser has no way to know that the script should not be trusted, and will execute the script. Because it thinks the script came from a trusted source, the malicious script can access any cookies, session tokens, or other sensitive information retained by the browser and used with that site. These scripts can even rewrite the content of the HTML page. For more details on the different types of XSS flaws, see: Types of Cross-Site Scripting. (OWASP)
  </blockquote>

  <?php
  /*
  $cookie_name = "user";
  $cookie_value = "John Doe";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


  $_SESSION{'username'] = "dani948a";
  echo $_SESSION['username'];

  if (!isset($_SESSION['username'])) {
      echo "You are not logged in!"
  }

  else {
    echo "You are logged in!"
  }*/
  ?>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method='post' action='checkpw.php'>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name='userid'>

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name='password'>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<a>Dont have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>


  <div>
    <h2><a href="https://www.youtube.com/watch?v=84YZXoJTp4E">Check out this video for a brief explaination of XSS!</a></h2>
    <h2>XSS</h2>
  <details>
  <summary>XSS 1</summary>
  	<div style="background-color:darkslategrey" id="rcorners">
  	<h2><a href="./phpsecurity/xss/xss.php">For a simple xss page</a></h2>
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
  </details>

  <details>
  <summary>XSS 2</summary>
  <div style="background-color:darkslategrey" id="rcorners">
  <?php

  include_once "./phpsecurity/xss/db.php";

  setcookie("username", "jr",strtotime("+1 day"));

  echo $_COOKIE["username"];

  if (isset($_POST["submit"])) {


    $pre_stmt = $xss2->prepare("INSERT INTO contact (name,message) VALUES (?,?)");

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

      <title>Hello, world!</title>
    </head>
    <body>

      <div class="container">
        <h2>Contact Form</h2>
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

    $pre_stmt = $xss2->prepare("SELECT * FROM contact");
    $pre_stmt->execute();
    $result = $pre_stmt->get_result();
    while($row = $result->fetch_assoc()){
      echo "<div class='row'>
        <div class='col-md-6'>
          <h4>".$row["name"]."</h4>
          <p>".$row["message"]."</p>
        </div>";
    }

     ?>

      </div>
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
  	<h2><a href="./phpsecurity/xss/xss2.php">For another simple xss page</a></h2>
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
  </details>

  <details>
  <summary>Flag 3</summary>
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


</details>
  </div>

</div>

</body>
</html>	<script type="text/javascript">
		</script>
</body>
</html>

</div>


<!-- ******************************************************************************************************** -->

<div id="About" class="tabcontent">
  <!DOCTYPE html>
<html>
<body>

<summary>Enter: CSRF</summary>
<blockquote class=classex>
Cross-Site Request Forgery (CSRF) is an attack that forces an end user to execute unwanted actions on a web application in which they’re currently authenticated. With a little help of social engineering (such as sending a link via email or chat), an attacker may trick the users of a web application into executing actions of the attacker’s choosing. If the victim is a normal user, a successful CSRF attack can force the user to perform state changing requests like transferring funds, changing their email address, and so forth. If the victim is an administrative account, CSRF can compromise the entire web application.
</blockquote>

<h2><a href="https://www.youtube.com/watch?v=PBvFuVRCuMg">Check out this video for a brief explaination of CSRF!</a></h2>

<div>
  <details>
  <summary>CSRF 1</summary>
  	<div style="background-color:darkslategrey" id="rcorners">
  	<h3 >flags are structured as follows:</h3>
  	<p>bearXXSing{hash}</hp>
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
  </details>

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
