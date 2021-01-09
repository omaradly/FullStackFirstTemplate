<!doctype html>
<html>
	<head>
		<!-- ===== for difrient languages =====-->
		<meta chareset="utf-8"> 
		<!-- ====== for decriptiom in search =====-->
		<meta name="description" content="chose insert data ">
		<title> CAR LIFE </title>
		<!-- ===========for formats========== -->
		<style>
		.shadow{
			box-shadow: 5px 5px 10px #616161;
		}
		.logo{
			margin-left:50%;
			display: inline;
		}
		.headertop1{display: inline;
			float: right;
			margin-right: 20px;

		}
		.photobottom12{
			margin-left: 750px;
			margin-top: 20px;
				}
		.header1{
				display: inline;
				color:#726c6c;
				margin-left: 880px;
				}
		.heads{
			background: url('photo/background3.jpg');
			background-size: 100%;
			padding-left: 120px;
			display: inline-block;
			box-shadow: 0px -5px 20px 5px,
			5px 5px 20px 5px;	
			 }
		.show{

			display: inline-block;
			margin: 20px auto;
			margin-right: 20px;
			padding-top: 5px;
			padding-left: 20px;
			padding-right: 5px;
			}
		</style>
		<!--=======photos=======-->
		<body background="photo/background1.jpg" >	
		</body>
	</head>
	
	<body>
		<img src="photo/eye-512.png" width="100" height="100" class="logo"><br>
		<h1 class="header1" >CAR LiFE Read<h1>
		<a href="http://localhost/project/" target="_blank"><img src="photo/headertop1.png" width="50" height="50"
		class="headertop1"></a><br> <br>
		<!--======open conect with database and check======-->
		<div class="heads">
	<?php
		$con=mysqli_connect("localhost","root","","carlife");
		//=============select sql ====================
		$sql="select *from cars";
		$result=mysqli_query($con,$sql);
		$array=mysqli_fetch_all($result);
		$count=count($array);
		for ($i=0; $i <$count ; $i++) { echo"
			<div class='show'>
			
			<img src='uplod/".$array[$i][6] ."' height='350' width='500' class='shadow'  > "."<br>
			<h1>Details</h1>
			<p>Id=".$array[$i][3]."<p>
			<hr>
			<p>Type=".$array[$i][0]."<p>
			<hr>
		 	<p>Model=".$array[$i][1]."<p>
		 	<hr>
		 	<p>Date Of Make=".$array[$i][4]."<p>
		 	<hr>
		 	<p>Country Of Make=".$array[$i][5]."<p>
		 	<hr>
		 	<p>Price=".$array[$i][2]."<p>  
			</div>
			
			
		";
		}

	?>
	</div>
	
	<br>

	<img src="photo/Facebook-Icon-Grijs.png"  class="photobottom12">

	</body>
</html>
