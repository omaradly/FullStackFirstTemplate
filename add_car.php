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
	<FORM method="post" enctype="multipart/form-data">
		<fieldset >
			<legend>Add Car</legend>
			<label>Type</label>
			<input type="text" name="type" placeholder="type of car" maxlength="15">
			<label>Model</label>
			<input type="text" name="model" placeholder="model of car" maxlength="20">
			<label>Price</label>
			<input type="text" name="price" placeholder="price of car" maxlength="10">
			<label>Date Of Make</label>
			<input type="date" name="date_of_make" placeholder="date of make" maxlength="10">
			<label>Country Of Make</label>
			<input type="text" name="country_of_make" placeholder="country of make" maxlength="10">
			<label>Image Of Car</label>
			<input type="file" name="image_of_car" >
			<input type="submit" name="save" value="add">
			<!--======insert in sql======-->
	<?php
		if(isset($_POST['save'])) {
			copy($_FILES['image_of_car']['tmp_name'], './uplod/'.$_FILES['image_of_car']['name']);#t7ded msar el photo
			$type=$_POST['type'];
			$model=$_POST['model'];
			$price=$_POST['price'];
			$date_of_make=$_POST['date_of_make'];
			$country_of_make=$_POST['country_of_make'];
			$image=$_FILES['image_of_car']['name'];
				$sql="INSERT INTO cars (`type_of_cars`, `model_of_cars`, `price`,  `date_of_make`, `country_of_make`,  `image`) VALUES ('$type','$model','$price','$date_of_make','$country_of_make','$image')";
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