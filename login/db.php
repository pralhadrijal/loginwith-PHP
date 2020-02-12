<?php 



$servername="localhost";
$username="root";
$password="root";
$dbname="bio";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
	die("Connection aborted".$con->connect_error);
}



 ?>



