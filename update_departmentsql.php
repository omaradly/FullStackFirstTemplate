<!doctype html>
<html>
	<!--===========option of page in head===========-->
	<head>
		<!-- ===== for difrient languages =====-->
		<meta chareset="utf-8"> 
		<!-- ====== for decriptiom in search =====-->
		<meta name="description" content="car life we always say the car is the best for ever we hope you find what you need ">
		<title> CAR LIFE </title>
		<!-- ===========for formats========== -->
		<style>
		textarea{
			size: 50px;
			padding: 8px;
			width: 400px;
			font-size: 20px;
			margin: 10px auto;
			display: block;
			}
		.logo{
			margin-left:50%;
			display: inline;
		}
		.header1{
				display: inline;
				color:#726c6c;
				margin-left: 850px;
				}
		.headertop1{display: inline;
			float: right;
			margin-right: 20px;

		}
		.photobottom12{
			margin-left: 750px;
			margin-top: 20px;
				}
		fieldset{
			background-image: url('photo/background3.jpg');
			background-size: 2500px;}
		input{
			size: 50px;
			padding: 8px;
			width: 400px;
			font-size: 20px;
			margin: 10px auto;
			display: block;}
		label{
			color: #337aaf;
			font-size: 30px;
			display: block;
			margin: 10px auto;
			margin-left: 520px;}
			legend{
				background-image: url('photo/background1.jpg') ;
				font-size: 30px;
				color: white;
				border: 1px;
				padding: 10px;
				margin-bottom: 10px;}
			fieldset{
				margin-left:  200px;
				margin-right: 200px;}
		</style>
		<body background="photo/background1.jpg" >
				
		</body>
	</head>
	<body>
		<img src="photo/updateicon2.PNG" width="100" height="100" class="logo"><br>
		<h1 class="header1" >CAR LiFE UPDATE<h1>
		<a href="http://localhost/project/" target="_blank"><img src="photo/headertop1.png" width="50" height="50"
		class="headertop1"></a><br> <br>
		<!--======open conect with database and check======-->
	<?php
		$con=mysqli_connect("localhost","root","","carlife");
	?>
	
		<!--=============select sql ====================-->
	<?php
		$id=$_GET['id'];
		$con=mysqli_connect("localhost","root","","carlife");
		$sql1="select *from departments where id=".$id;
		$result=mysqli_query($con,$sql1);
		$array=mysqli_fetch_row($result);
	?>
	<!--======FORM======-->
	<FORM method="post" enctype="multipart/form-data">
		<fieldset >
			<legend>Update Department</legend>
			<label>Name</label>
			<input type="text" name="name" value="<?php
			echo $array[0];
			?>" maxlength="20">
			<label>Number Of Employee</label>
			<input type="text" name="number_of_employee" value="<?php
			echo $array[2];
			?>" maxlength="20">
			<label>Manager Id</label>
			<input type="text" name="manager_id" value="<?php
			echo $array[3];
			?>" maxlength="20">
			<label>Role</label>
			<textarea type="text" name="role"  maxlength="1000" cols="10" rows="10" ><?php
			echo $array[1];
			?></textarea>
			<input type="submit" name="save" value="Update">
			<!--======insert in sql======-->
	<?php
		if(isset($_POST['save'])) {
			$name=$_POST['name'];
			$number_of_employee=$_POST['number_of_employee'];
			$manager_id=$_POST['manager_id'];
			$role=$_POST['role'];
				$sql="UPDATE `departments` SET `name`='".$name."',`role`='".$role."',`no_of_employees`='".$number_of_employee."',`manager_id`='".$manager_id."' WHERE id= '".$id."'";
		$result=mysqli_query($con,$sql);#do insert in data base
		if ($result==true) {echo"<label>Success</label>";
		header("location:update_department.php");
	
			}
		}


	?>
	</FORM>

	</fieldset>
	<br>
		<br>
		<img src="photo/Facebook-Icon-Grijs.png"  class="photobottom12">	
	</body>
</html>