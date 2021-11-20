<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "basic-banking-system";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Failed to connect!");
}
?>