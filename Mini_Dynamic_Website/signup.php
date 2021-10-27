<?php 

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "registersystem";

$conn = new mysqli($servername, $dBUsername, $dBPassword);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

 mysqli_select_db($conn,$dBName);

 ?>