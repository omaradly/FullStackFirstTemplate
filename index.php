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
		a{
			color: #337aaf;
			text-decoration: none;
		}
		H1{
			color: white; 
			
		}

		.div_class {
			background-image: url('photo/background3.jpg');
			background-size: 2500px;
			box-shadow: 0px -5px 20px 5px,
			5px 5px 20px 5px;

			

		}	
		strong
		{
			size: "40";
			color: white;
			}
		</style>
		<!--=======photos=======-->
		<body background="photo/background1.jpg" >
				
		</body>
			<div>
			 <img src="photo/background.png" target="_blank"  > </div>
		<!--<div align="center"> <img src="photo/background2.jpg" target="_blank"> </div>-->
			
	</head>
	<body>

	<!--====== MORE PHOTOS1 TITLE=======-->	
		<FONT SIZE="36" color=white  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CARS HOME </FONT>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<!--====== MORE PHOTOS1=======-->
		<font  SIZE="36" color=white> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More Photos </font>
		<img src="photo/11.png" height="40" width="40">
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="photo/Ferrari-California-T.jpg" height="250" width="400" >
		<!--====== MORE PHOTOS2=======-->
			&nbsp;&nbsp;&nbsp;&nbsp;<img src="photo/2018-audi-a3-sedan.jpg" height="250" width="400" >
			<br>
			<br><br>
			<!--====== MORE PHOTOS3=======-->
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
			<img src="photo/مرسيدس-GLC-63-AMG-موديل-2018-1-1200x789.jpg" height="250" width="400" >
			<!--====== sql =======-->
		<div class="div_class">
			
			<h1 ><div align="center"> <FONT SIZE="36" color= #337aaf> WELCOME </FONT></div> </h1>
	<!--======open conect with database and check======-->
	<?php
		$con=mysqli_connect("localhost","root","","carlife");
			
			if ($con==false) {
				die("<font size='30' color= #337aaf>Conect With Database Faild </font>"."<image src='photo/clipart-red-round-error-warning-icon-512x512-94ae.png' width='35' height='35'>");	
			}
			else{echo "<font size='30' color= #337aaf>Connect With Database Success</font>" . "<image src='photo/clipart-dwcheckyes-complete-256x256-d2f9.png' width='30' height='30'>";}
			?>
	<!--===========sql orders links=========== -->
				
			<h1 > <FONT SIZE="36" color= #337aaf>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SELECT WHAT YOU NEED </FONT> <img src="photo/11.png" height="40" width="40"> </h1>

				

			
				
			<FONT SIZE="36" color=  #337aaf>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="photo/read.png" height="40" width="40">
			<a href="http://localhost/project/chose_read.php" target="_blank"><b>Read</b></a>
			<br>
			<hr>

			<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="photo/inseret.png" height="40" width="40">
			<a href="http://localhost/project/insert_chose.php" target="_blank"><b>Insert</b></a>
			<br>
			<hr>

			<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="photo/update.png" height="40" width="40">
			<a href="http://localhost/project/update_choice.php" target="_blank">
			<b> update</b></a>
			<br>
			<hr>

			<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="photo/delete.gif" height="40" width="40">
			<a href="http://localhost/project/chose_delete.php" target="_blank"><b> Delete</b></a>
			<br> <br>

			</FONt>
	

		</div >
		<br>
		<br>
		<img src="photo/Facebook-Icon-Grijs.png"  class="photobottom12">
		
	</body>
</html>



