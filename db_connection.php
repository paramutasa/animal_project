<?php
$serverName	= "localhost";
$userName	= "root";
$password	= "";
$dbName	= "animal_db";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if (mysqli_connect_errno()) {
	echo "failed connection" . mysqli_connect_error();
}
