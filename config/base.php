<?php
session_start();

$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "newportholdings"; // the name of the database that you are going to use for this project
$dbuser = "root"; // the username that you created, or were given, to access your database
$dbpass = "Hideki8080"; // the password that you created, or were given, to access your database

// $dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
// $dbname = "nph_database"; // the name of the database that you are going to use for this project
// $dbuser = "bfavakehi"; // the username that you created, or were given, to access your database
// $dbpass = "Attorney2008"; // the password that you created, or were given, to access your database

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());

?>
