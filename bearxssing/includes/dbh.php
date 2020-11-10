<?php

#$serverName = "34.106.176.228";
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Bears";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);
#mysqli_connect("localhost", "root", "", "awa");

if (!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
