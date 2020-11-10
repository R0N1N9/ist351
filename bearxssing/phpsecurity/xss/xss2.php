<?php

include_once "db.php";

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
    echo "Please enter a valid message";
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

    <?php/
#$conn = mysqli_connect("localhost", "root", "", "YOUR DATABASE NAME");

?>

  </body>
</html>
