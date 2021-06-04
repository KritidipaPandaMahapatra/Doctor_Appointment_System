<?php
  include'connection.php';


  extract($_POST);

    if(isset($_POST['readrecord'])){

   }


  if(isset($_POST['pname']) && isset($_POST['pmail']) && isset($_POST['dname']) && isset($_POST['dcategory']) && isset($_POST['ddate']) && isset($_POST['des']))
  {
$user_insert=mysqli_query($conn,"INSERT INTO `dappointment` VALUES('','$pname','$pmail','$dcategory','$dname','$ddate','$des')");

	if($user_insert){
		echo "<script>alert('Data Saved Succcessfully')</script>";
		//header('location:display.php');
	}
	else{
		echo "<script>alert('Data Not Saved.Error Occured!')</script>";
	}

}
?>