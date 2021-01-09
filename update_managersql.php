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
		$sql1="select *from managers where employee_id=".$id;
		$result=mysqli_query($con,$sql1);
		$array=mysqli_fetch_row($result);
	?>
	<!--======FORM======-->
	<FORM method="post" enctype="multipart/form-data">
		<fieldset >
			<legend>Update  Manager </legend>
			<label>Name</label>
			<input type="text" name="name" value="<?php
			echo $array[0];
			?>" maxlength="20">
			<label>Salary</label>
			<input type="text" name="salary" value="<?php
			echo $array[1];
			?>" maxlength="10">
			<label>Part Jop </label>
			<input type="text" name="part" value="<?php
			echo $array[2];
			?>" maxlength="10">
			<input type="submit" name="save" value="Update">
			<!--======insert in sql======-->
	<?php
		if(isset($_POST['save'])) {
			$name=$_POST['name'];
			$salary=$_POST['salary'];
			$part=$_POST['part'];
			
				$sql="UPDATE `managers` SET `name`='".$name."',`salary`='".$salary."',`part`='".$part."'WHERE employee_id='".$id."'";
		$result=mysqli_query($con,$sql);#do insert in data base
		if ($result==true) {echo"<label>Success</label>";
		header("location:update_manager.php");
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