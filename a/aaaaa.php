<?php
		$con=mysqli_connect("localhost","root","","carlife");
		//=============select sql ====================
		$sql="select *from departments";
		$result=mysqli_query($con,$sql);
		$array=mysqli_fetch_all($result);
		$count=count($array);
		var_dump($array[0]);

	?>