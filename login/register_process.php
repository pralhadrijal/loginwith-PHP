<?php 

include("db.php");


 $username=$_POST["fname"];
 $email=$_POST["email"];
 $password=$_POST["password"];


 $sql= "INSERT INTO user_table (username, email, password) 
 VALUES ('$username', '$email', '$password')";

if ($con->query($sql) === TRUE) {
    header("Location: register.php");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

