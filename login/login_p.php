<?php 

include('db.php');

session_start();


if ($_SERVER["REQUEST_METHOD"]=="POST") {


				$username=$_POST["username"];
				$password=$_POST["password"];

				      $sql = "SELECT * FROM user_table WHERE username = '$username' and password = '$password'";

				      $result = mysqli_query($con,$sql);

			

    				  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    		

    				  $count= mysqli_num_rows($result);


    				  if($count==1){
    				  	 header("location: dashboard.php");

    				  		}
    				  else {
    				  	
    				  	header("location: login.php");
    				  }

				}


 ?>