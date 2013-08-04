<?php
//connect.php
$username = "AnD";
$password = "AnD";
$hostname = "localhost"; 
$database = "AnD";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password, $database)
  or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
mysql_select_db($database) or die(mysql_error()); ?>
