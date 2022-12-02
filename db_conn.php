<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "test_db";

// Our database credentials

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

// database connection to mysql database