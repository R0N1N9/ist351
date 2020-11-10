<?php      require_once(“db.php”);?>      <!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Strict//EN”
“http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd”>
<html xmlns=”http://www.w3.org/1999/xhtml” lang=”en” xml:lang=”en”>
<head>
<meta http-equiv=”Content-Type” content=”text/html; charset=ISO-8859-1″ />
<title>Good Login</title>
<div id=”main”>
<?php
if (isset($_POST[‘submitted’])) {

if (preg_match (‘%^[A-Za-z0-9]\S{8,20}$%’, stripslashes(trim($_POST[‘userid’])))) {
$u = escape_data($_POST[‘userid’]);
} else {
$u = FALSE;
echo ‘<p><font color=”red” size=”+1″>Please enter a valid User ID!</font></p>’;
}
if (preg_match (‘%^[A-Za-z0-9]\S{8,20}$%’, stripslashes(trim($_POST[‘pass’])))) {
$p = escape_data($_POST[‘pass’]);
} else {
$p = FALSE;
echo ‘<p><font color=”red” size=”+1″>Please enter a valid Password!</font></p>’;
}
$captchchk = 1;

require_once(‘recaptchalib.php’);

$privatekey = “privatekey”;

$resp = recaptcha_check_answer ($privatekey,

$_SERVER[“REMOTE_ADDR”],

$_POST[“recaptcha_challenge_field”],

$_POST[“recaptcha_response_field”]);

if (!$resp->is_valid) {

echo ‘<p><font color=”red” size=”+1″>The CAPTCHA Code wasn\’t entered correctly!</font></p>’;

$captchchk = 0;

}

if ($u && $p && $captchchk) {
$query = “SELECT user_id, first_name, last_name, email, userid, pass FROM users WHERE userid=’$u’ AND pass=SHA(‘$p’)”;

$result = mysql_query ($query) or trigger_error(“Either the Userid or Password are incorrect”);

if (mysql_affected_rows() == 1) {
// Register the values & redirect. I didn’t write this part
$row = mysql_fetch_array ($result, MYSQL_NUM);

echo “First name: ” . $row[1] . “<br />”;

echo “Last name: ” . $row[2] . “<br />”;

echo “Email: ” . $row[3] . “<br />”;

echo “Login Id: ” . $row[4] . “<br />”;

echo “Password: ” . $row[5] . “<br />”;

while ($row = mysql_fetch_assoc($result))

{

echo “First name: ” . $row[‘first_name’] . “<br />”;

echo “Last name: ” . $row[‘last_name’] . “<br />”;

echo “Email: ” . $row[’email’] . “<br />”;

echo “Login Id: ” . $row[‘userid’] . “<br />”;

echo “Password: ” . $row[‘pass’] . “<br />”;

} mysql_close();

} else { // No match was made.
echo ‘<br><br><p><font color=”red” size=”+1″>Either the Userid or Password are incorrect</font></p>’;

mysql_close();

exit(); }
} echo ‘<br><br><p><font color=”red” size=”+1″>Either the Userid or Password are incorrect</font></p>’;

mysql_close();

exit();
}// End of SUBMIT conditional.
?>
<h1>Login</h1>
<p>Your browser must allow cookies in order to log in.</p>
<form action=”goodlogin.php” method=”post”>
<fieldset>

<p><b>Userid:</b> <input type=”text” name=”userid” size=”20″ maxlength=”20″ /></p>
<p><b>Password:</b> <input type=”password” name=”pass” size=”20″ maxlength=”20″ /></p>

<?php          require_once(‘recaptchalib.php’);

$publickey = “publickey”; // you got this from the signup page

echo recaptcha_get_html($publickey);

?>
<div align=”center”><input type=”submit” name=”submit” value=”Login” /></div>
<input type=”hidden” name=”submitted” value=”TRUE” />
</fieldset>
</form>
</div>
</body>
</html>

Configbad.php

This code isn’t bad. It will actually clean most security issues

<?php
// Define these as constants so that they can’t be changed
DEFINE (‘DBUSER’, ‘mysqladm’);
DEFINE (‘DBPW’, ‘password’);
DEFINE (‘DBHOST’, ‘localhost’);
DEFINE (‘DBNAME’, ‘hamdb’);
if ($dbc = mysql_connect (DBHOST, DBUSER, DBPW)) {
if (!mysql_select_db (DBNAME)) { // If it can’t select the database.
// Handle the error.
trigger_error(“Could not select the database!<br />MySQL Error: ” . mysql_error());
exit();
} // End of mysql_select_db IF.
} else {
// Print a message to the user, and kill the script.
trigger_error(“Could not connect to MySQL!<br />MySQL Error: ” . mysql_error());
exit();
}
// A function that strips harmful data.
function escape_data ($data) {
// Check for mysql_real_escape_string() support.
// This function escapes characters that could be used for sql injection
if (function_exists(‘mysql_real_escape_string’)) {
global $dbc; // Need the connection.
$data = mysql_real_escape_string (trim($data), $dbc);
$data = strip_tags($data);
} else {
$data = mysql_escape_string (trim($data));
$data = strip_tags($data);
}
// Return the escaped value.
return $data;
}
?>
