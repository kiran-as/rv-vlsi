<?php

$username="nanoscom_nas";
$password="xnLrKEwvt2li";
$hostname="localhost";
$server_url="http://www.nanochipsolutions.com/";

/*
$username = "root";
$password = "password";
$hostname = "localhost"; 
*/
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");

mysql_select_db("nanoscom_nas",$dbhandle) 
  or die("Could not select College");
session_start();
?>