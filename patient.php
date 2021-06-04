<?php
session_start();
$name=$_SESSION['email'];
include 'connection.php';
$sql3=mysqli_query($conn,"SELECT * FROM signup WHERE ='$email'");
?>
<!-- <h1>Welcome <?php echo $name ?></h1> -->
<h1 align="center" style="color:red">Profile Details</h1>
        <table border="2" align="center">
			<tr>
				<th >SL No</th>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone No</th>
				<th>Address</th>
				<th>Image</th>
			</tr>
<?php
$sl=0;
while($sql_fetch=mysqli_fetch_assoc($sql3)) { ?> 
 
?>
	<tr>
		<td><?php echo $sl+1; $sl++ ?></td>
		<td><?php echo $sql_fetch['id'] ?></td>
		<td><?php echo $sql_fetch['name'] ?></td>
		<td><?php echo $sql_fetch['email'] ?></td>
		<td><?php echo $sql_fetch['phone'] ?></td>
		<td><?php echo $sql_fetch['address'] ?></td>
		<td><center><?php echo "<img src='".$sql_fetch['image']."'height='100' width='100'" ?></center></td>
		<!-- <td><a href="edit.php?ep=<?php echo $sql_fetch['id'] ?>">Edit</a>
		<a href="delete.php?del=<?php echo $sql_fetch['id']?>">Delete</a></td> -->
	</tr>
	<?php } ?>
</table>