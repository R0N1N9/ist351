
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

<body style="background-image: url('flyingcars.gif'); background-size:2000px 10000px" style="background-color:darkslategrey">

<button class="tablink" onclick="openPage('276', this, 'red')" id="defaultOpen">secLounge Legacy (276)</button>
<button class="tablink" onclick="openPage('351', this, 'green')">secLounge 2.0 (351)</button>
<button class="tablink" onclick="openPage('bearXXSing', this, 'blue')">bearXXSing</button>
<button class="tablink" onclick="openPage('LOIC', this, 'orange')">LOIC</button>
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<div id="276" class="tabcontent" >

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


  <header class="blinkingyellow">Simple CTF</header>

  <!--Title -->
  <h3 id="rcorners" class="blinkingyellow" style="background-image: url('walking.gif')">Welcome</h3>




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
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<div id="351" class="tabcontent">
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  <head>
  	<title>351</title>
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

  	<!--Title -->
  		<header id="rcorners" class="blinkingyellow" style="background-image: url('walking.gif')">Welcome!!!</header>
  	</div>


    <summary> Types of Cross-Site Scripting Attacks </summary>
    <p>
    XSS attacks can be categorised in two ways. The first lies in how malicious input navigates the web application. Input to an application can be included in the output of the current request, stored for inclusion in the output of a later request, or passed to a Javascript based DOM operation. This gives rise to the following categories:
    Reflected XSS Attack
    </p>
    <details>
    <summary>Reflected</summary>
    <p>
    In a Reflected XSS attack, untrusted input sent to a web application is immediately included in the application’s output, i.e. it is reflected from the server back to the browser in the same request. Reflection can occur with error messages, search engine submissions, comment previews, etc. This form of attack can be mounted by persuading a user to click a link or submit a form of the attacker’s choosing. Getting a user to click untrusted links may require a bit of persuasion and involve emailing the target, mounting a UI Redress attack, or using a URL Shortener service to disguise the URL. Social services are particularly vulnerable to shortened URLs since they are commonplace in that setting. Be careful of what you click!
    Stored XSS Attack
    </p>
  </details>

  <details>
  <summary>Stored</summary>
    <p>
    A Stored XSS attack is when the payload for the attack is stored somewhere and retrieved as users view the targeted data. While a database is to be expected, other persistent storage mechanisms can include caches and logs which also store information for long periods of time. We’ve already learned about Log Injection attacks.
    DOM-based XSS Attack
  </p>
</details>
  <details>
  <summary>DOM</summary>
    <p>
    DOM-based XSS can be either reflected or stored and the differentiation lies in how the attack is targeted. Most attacks will strike at the immediate markup of a HTML document. However, HTML may also be manipulated by Javascript using the DOM. An injected payload, rendered safely in HTML, might still be capable of interfering with DOM operations in Javascript. There may also be security vulnerabilities in Javascript libraries or their usage which can also be targeted.
    </p>
</details>
  	<div class="container">
  		<div class="alert alert-warning alert-dismissible">
  	    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  	    <strong class="blinkingmint">ALERT!</strong> MASKS REQUIRED BEFORE EATING DUE TO COVID-49
  	  </div>
  	</div>

  	<hr/>
  	<hr/>
  	<hr/>
  	<button onclick="playAudio()">Synthwave</button>
  	<button onclick="pauseAudio()">Un-Synthwave</button>
  			<audio id="Dust">
  				<source src="Dust.mp3" type="audio/mpeg">
  			</audio>
      </div>

  	<hr/>
  	<hr/>
  	<hr/>
  	<footer>© JR Gumarin, IST 351 at Mercer University, ALL WORK DONE BY MY ME AND MY OWN COLD CYBERNETIC HANDS! Copyright 2020</footer>

  </body>
</div>
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<div id="bearXXSing" class="tabcontent">
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
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
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>

  <details >
  <summary>INJECTION</summary>
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
  <summary>HINT</summary>
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

</div>

</body>
</html>	<script type="text/javascript">
		</script>
</body>
</html>

</div>
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<div id="LOIC" class="tabcontent">
  <!DOCTYPE html>
<html>
<body>
<h1>My First Google Map</h1>
<div id="googleMap" style="width:100%;height:400px;"></div>
<script>
function myMap() {
var mapProp= {
 center:new google.maps.LatLng(51.508742,-0.120850),
 zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var atlanta = new google.maps.Marker({position: new google.maps.LatLng(32.028201,-81.090171)});
atlanta.setMap(map);
}
var infowindow = new google.maps.InfoWindow({content:"Hlellow"});
google.maps.event.addListener(marker, 'click', function() {
       infowindow.open(map,marker);
});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD97GsO0Tz_TglMCDlpsZwnqeuEEbALYkk&callback=myMap"></script>
</body>
</html>
</div>
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
