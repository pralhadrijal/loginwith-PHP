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
    				  	echo "wrong";

    				 
    				  }

				}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Welcome to Admin Area</title>
 	<meta charset="utf-8" keyword="Admin panel">
 </head>
 <body>
 
<h1>Hello welcme to the Adnmin Panel. </h1>

<form action="login.php" method="POST" >
	<input type="text" placeholder="your user name" name="username">
	<input type="password" placeholder="Please Enter your password" name="password">
	<input type="submit" value="Login" name="">

</form>

<p><a href="forget password"> Forget password ?</a></p> <p><a href=""> dont have an Account? </a></p>

<footer>
	copyright &copy 2020. Pralhad Rijal
</footer>
 </body>
 </html>