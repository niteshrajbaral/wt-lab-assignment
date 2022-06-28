<?php 

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "studentmgnt";

$conn = new mysqli($serverName, $userName, $password, $databaseName);

if($conn->connect_error) {
	die("Connection failed!");
}