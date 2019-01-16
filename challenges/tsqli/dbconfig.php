<?php
error_reporting(-1);
$dbhost = "localhost";
$dbuser = "bsqli";
$dbpass = "bsqli";
$dbname = "bsqli";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("db error");
?>
