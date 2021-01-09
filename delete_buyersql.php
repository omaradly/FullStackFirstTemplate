<?php
$id=$_GET['id'];
//============== open conection ==============
$con=mysqli_connect("localhost","root","","carlife");
		//=============delete sql ====================
		if (isset($_GET['id'])) {
		$sql="delete from buyer where car_id=".$id;
		$result=mysqli_query($con,$sql);
		if ($result==true) {
			
		header("location: delete_buyer.php");
	} 

	}

?>