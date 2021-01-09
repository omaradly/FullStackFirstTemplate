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
		$sql1="select *from cars where id=".$id;
		$result=mysqli_query($con,$sql1);
		$array=mysqli_fetch_row($result);
	?>
	<!--======FORM======-->
	<FORM method="post" enctype="multipart/form-data">
		<fieldset >
			<legend>Update Car</legend>
			<label>Type</label>
			<input type="text" name="type" value="<?php
			echo $array[0];
			?>" maxlength="15">
			<label>Model</label>
			<input type="text" name="model" value="<?php
			echo $array[1];
			?>" maxlength="20">
			<label>Price</label>
			<input type="text" name="price" value="<?php
			echo $array[2];
			?>" maxlength="10">
			<label>Date Of Make</label>
			<input type="date" name="date_of_make" value="<?php
			echo $array[4];
			?>" maxlength="10" >
			<label>Country Of Make</label>
			<input type="text" name="country_of_make" value="<?php
			echo $array[5];
			?>" maxlength="10">
			<label>Image Of Car</label>
			<input type="file" name="image_of_car" >
			<input type="submit" name="save" value="Update">
			<!--======insert in sql======-->
	<?php
		if(isset($_POST['save'])) {
				
			copy($_FILES['image_of_car']['tmp_name'], './uplod/'.$_FILES['image_of_car']['name']);
			$image=$_FILES['image_of_car']['name'];#t7ded msar el photo
							
			$type=$_POST['type'];
			$model=$_POST['model'];
			$price=$_POST['price'];
			$date_of_make=$_POST['date_of_make'];
			$country_of_make=$_POST['country_of_make'];
				$sql="UPDATE `cars` SET `type_of_cars`='".$type."',`model_of_cars`='".$model."',`price`='".$price."',`date_of_make`='".$date_of_make."',`country_of_make`='".$country_of_make."',`image`='".$image."'WHERE id='".$id."'";
		$result=mysqli_query($con,$sql);#do insert in data base
		if ($result==true) {echo"<label>Success</label>";
			header("location:update_car.php");}
		}


	?>
	</FORM>

	</fieldset>
	<br>
		<br>
		<img src="photo/Facebook-Icon-Grijs.png"  class="photobottom12">	
	</body>
</html>