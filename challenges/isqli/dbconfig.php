<?php
error_reporting(-1);
$dbhost = "localhost";
$dbuser = "isqli";
$dbpass = "isqli";
$dbname = "isqli";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("db error");
?>
