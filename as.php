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
		H1{
			color: #6b192e; 
			
		}

		blockquote{
			background-color: #c9c9c9;
		}	
			
		</style>
		<!--=======photos=======-->
		<body background="photo/background.jpg" >
		<!--<div align="center"> <img src="photo/background2.jpg" target="_blank"> </div>-->
		
	<body>
		
		<blockquote>
			
			<div align="center"> <img src="photo/Untitled-1.png" target="_blank" height="500" width="1000"> </div>
			<h1 ><div align="center"> <FONT SIZE="36" color=#6b192e > WELCOME </FONT></div> </h1>
	<!--======open conect with database and check======-->
	<?php
		$con=mysqli_connect("localhost","root","","cdmaskd");
			if(mysqli_errno($con)) {
				echo"<h1>Error In Conect<h1>";
			}
			else{echo "<h1>connect success<h1>";
	}?>
	<!--===========sql orders links=========== -->
			<h1 > <FONT SIZE="36" color=#6b192e> SELECT WHAT YOU NEED </FONT> </h1>
			<img src="photo/read.png" height="40" width="40">
			<FONT SIZE="36" color=#6b192e>
			<b>Read</b>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="photo/select.png" height="40" width="40">
			<b>Select</b>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="photo/inseret.png" height="40" width="40">
			<b>Inseret</b>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="photo/update.png" height="40" width="40">
			<b> update</b>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="photo/delete.gif" height="40" width="40">
			<b> Delete</b>

			</FONt>
			<br>
			<br><br><br><br><br><br><br><br><br><br><br>

		</blockquote>
	</body>
</html>



