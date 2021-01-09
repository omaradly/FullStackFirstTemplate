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
		.photobottom12{
			margin-left: 750px;
			margin-top: 20px;
				}
		textarea{
			size: 50px;
			padding: 8px;
			width: 400px;
			font-size: 20px;
			margin: 10px auto;
			display: block;
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
		<!--======open conect with database and check======-->
	<?php
		$con=mysqli_connect("localhost","root","","carlife");
	?>
	<!--======FORM======-->
	<FORM method="post" >
		<fieldset >
			<legend>Add Department</legend>
			<label>Name</label>
			<input type="text" name="name" placeholder="Enter Name" maxlength="20">
			<label>Number Of Employee</label>
			<input type="text" name="number_of_employee" placeholder="ENTER Number Of Employee" maxlength="20">
			<label>Manager Id</label>
			<input type="text" name="manager_id" placeholder="Enter Manager Id" maxlength="20">
			<label>Role</label>
			<textarea type="text" name="role"  maxlength="1000" cols="10" rows="10" placeholder="Enter Roles" ></textarea>
			<input type="submit" name="save" value="add">
			<!--======insert in sql======-->
	<?php
		if(isset($_POST['save'])) {
			$name=$_POST['name'];
			$number_of_employee=$_POST['number_of_employee'];
			$manager_id=$_POST['manager_id'];
			$role=$_POST['role'];
			$sql="INSERT INTO `departments`(`name`,`no_of_employees`,`manager_id`,`role`) VALUES ('$name','$number_of_employee','$manager_id','$role')";
		$result=mysqli_query($con,$sql);#do insert in data base
		if ($result==true) {echo"<label>Success</label>";}
		else{echo"<label>fielied</label>";}
		}
	?>
	</FORM>
	</fieldset>
	<br>
		<br>
		<img src="photo/Facebook-Icon-Grijs.png"  class="photobottom12">	
	</body>
</html>