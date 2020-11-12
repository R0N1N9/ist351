<?php
  include_once 'header.php';
?>
<!DOCTYPE html>

<section class="index-intro" style="background-image: url('img/walking.gif')">
  <h1 class=blinking>Welcome</h1>


  <h2 class=blinkingyellow>Select a category</h2>
  <div class="index-categories-list">
    <div style="background-image: url('img/nightcity.gif')">
      <h3><a href="ctf.php">secLounge Legacy (276)</a></h3>
    </div>
    <div style="background-image: url('img/flyingcars.gif')">
      <h3><a href="sqli.php">SQLI</a></h3>
    </div>
    <div style="background-image: url('img/signs.gif')">
      <h3><a href='xss.php'>XSS</a></h3>
    </div>
    <div style="background-image: url('img/pharmacy.gif')">
      <h3><a href='csrf.php'>CSRF</a></h3>
    </div>
  </div>
</section>



<?php
  include_once 'footer.php';
?>
