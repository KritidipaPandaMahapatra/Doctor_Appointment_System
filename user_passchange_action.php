<?php
require_once 'user.php';
// include'connection.php';
  $pass=$_POST['pass'];

  $user_update=mysqli_query($conn,"UPDATE signup SET password='$pass' WHERE email='$name' ") OR die(mysqli_error($conn));

  if($user_update){
 		echo "sucesful";
 		header('location:user.php');
 	}
 	else{
 		echo "<script>alert('PassWord Not Change');</script>";
 		
 	}


?>