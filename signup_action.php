<?php
include 'connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$password=($_POST['password']);
$image=$_FILES['img']['name'];
$new_image=rand(1111,9988).'_'.time().'_'.$image;
$upload_path='upload/'.$new_image;
$source_path=$_FILES['img']['tmp_name'];

if(move_uploaded_file($source_path, $upload_path)){
	$user_insert=mysqli_query($conn,"INSERT INTO signup VALUES ('','$name','$email','$phone','$address','$password','$upload_path')") or die(mysqli_error($conn));
	if($user_insert){
		echo"New Records sucessfully saved";
		header('location:patient.php');
	}
	else{
		echo"Records not saved";
	}
}
?>