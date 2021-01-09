<?php
$id=$_GET['id'];
//============== open conection ==============
$con=mysqli_connect("localhost","root","","carlife");
		//=============delete sql ====================
		if (isset($_GET['id'])) {
		$sql="delete from employee where id=".$id;
		$result=mysqli_query($con,$sql);
		if ($result==true) {
			
		header("location: delete_employee.php");
	} 

	}

?>