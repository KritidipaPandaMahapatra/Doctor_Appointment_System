<?php
//include "connection.php";
require_once 'user.php';


/*Calculating Offset Code*/
$limit=5;
if(isset($_GET['page'])){
  $page=$_GET['page'];
}else{
  $page=1;
}
$offset=($page-1)*$limit;
$sql="SELECT * from dappointment WHERE pmail='$name' ORDER BY ddate DESC LIMIT {$offset},{$limit}";
$result=mysqli_query($conn,$sql) or die("query failed");
?>
<center>
	<h1 style="color:red">List Of Appointment</h1>

	<table class="table table-striped w-auto"  style="width: 90px; height: 70px">
  
    <tr>
      <th >SL No</th>
      <th >Doctor Category</th>
      <th >Doctor Name</th>
      <th >Appoinment Date</th>
      <th >Appoinment Description</th>
	  
    </tr>
 
   <?php
$sl=0;
while($sql_fetch=mysqli_fetch_assoc($result)) { ?> 
 
	<tr scope="row">
		<td><?php echo $sl+1; $sl++ ?></td>
		<td><?php echo $sql_fetch['dcategory'] ?></td>
		<td><?php echo $sql_fetch['dcname'] ?></td>
		<td><?php echo $sql_fetch['ddate'] ?></td>
		<td><?php echo $sql_fetch['des'] ?></td>
	
		
		</tr>
<?php } ?>		
</table>
</center>	
<!-- Pagination-->
<?php

$sql1=mysqli_query($conn,"SELECT * from `dappointment`");



if(mysqli_num_rows($sql1)>0){
	$total_records=mysqli_num_rows($sql1);
	$limit=5;
	$total_page=ceil($total_records/$limit);
    echo '<nav aria-label="Page navigation example">';
	echo '<ul class="pagination justify-content-center">';
	echo '<li class="page-item disabled">';
	echo '<a class="page-link" href="#" tabindex="-1">Previous</a>';
	echo '</li>';
     for($n=1;$n<=$total_page;$n++){
     echo '<li class="page-item"><a class="page-link" href="user_appoinment.php?page='.$n.'">'.$n.'</a></li>';
	}
	echo '<li class="page-item">';
	echo '<a class="page-link" href="#">Next</a>';
	echo '</li>';
	echo '</ul>';
	echo '</nav>';
}
?>

  
	
