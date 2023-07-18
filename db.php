<?php

//Your Mysql Config
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement_portal";
$port = "3307";

//Create New Database Connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

//Check Connection
if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}
