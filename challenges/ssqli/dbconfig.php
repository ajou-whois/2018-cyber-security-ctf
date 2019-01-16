<?php
error_reporting(-1);
$dbhost = "localhost";
$dbuser = "ssqli";
$dbpass = "ssqli";
$dbname = "ssqli";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("db error");
?>
