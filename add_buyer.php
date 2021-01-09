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
	<FORM method="post" >
		<fieldset >
			<legend>Add  Customer </legend>
			<label>Name</label>
			<input type="text" name="name" placeholder="name of Customer" maxlength="20">
			<label>Phone Number</label>
			<input type="text" name="phone_no" placeholder="Phone Number of Customer" maxlength="11">
			<label>Payment Method</label>
			<input type="text" name="payment_method" placeholder="Payment Method" maxlength="10">
			<label>	Car Id</label>
			<input type="text" name="car_id" placeholder="Car Id which buy" maxlength="11">
			<label>Seller Id</label>
			<input type="text" name="seller_id" placeholder="Seller Id who sell to him " maxlength="11">
			<label>Buyer Id</label>
			<input type="text" name="buyer_id" placeholder="Seller Id who sell to him " maxlength="11">
			<input type="submit" name="save" value="add">
			<!--======insert in sql======-->
	<?php
		if(isset($_POST['save'])) {
			$name=$_POST['name'];
			$phone_no=$_POST['phone_no'];
			$payment_method=$_POST['payment_method'];
			$car_id=$_POST['car_id'];
			$seller_id=$_POST['seller_id'];
			$buyer_id=$_POST['buyer_id'];
			$sql="INSERT INTO `buyer`(`name`, `phone_no`, `payment_method`, `car_id`, `seller_id`, `buyer_id`)VALUES ('$name','$phone_no','$payment_method','$car_id','$seller_id','$buyer_id')";
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