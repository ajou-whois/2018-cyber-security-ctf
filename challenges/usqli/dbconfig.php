<?php
error_reporting(-1);
$dbhost = "localhost";
$dbuser = "sqli";
$dbpass = "sqli";
$dbname = "sqli";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("db error");
?>
