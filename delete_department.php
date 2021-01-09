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
		.icon{
			margin-left: 50%;
			filter: grayscale(100%);
		}
		.icon:hover{
			margin-left: 50%;
			filter: grayscale(0%);
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
			margin-left: 670px;
			margin-top: 20px;
				}
		.header1{
				display: inline;
				color:#726c6c;
				margin-left: 850px;
				}
		table{
			background: url('photo/background3.jpg');
			width: 100%;
			box-shadow: 0px 10px 20px, 0px -10px 20px;
		}
		th{
			
			margin-top: 5px;
			margin-left: 5px;
			margin-right: 5px;
			color: black;
		}
		.shows5{
			font-family: Candara;
			padding-left: 300px;
			
			color: black;
		}
		.shows6{
			padding: 5px;
			margin-top: 5px;
			margin-left: 5px;
			margin-right: 5px;
			color: black;
			padding-left: 50px;
		}
		.shows4{
			padding: 5px;
			margin-top: 5px;
			margin-left: 5px;
			margin-right: 5px;
			color: black;
			padding-left: 10px;

		}
		.shows3{
			padding-right: 130px;
			color: black;
		}
		.shows2{
			padding-right: 110px;
			color: black;
		}
		.shows1{
			padding-left: 10px;
			padding-right: 70px;
			color: black;
		}
		.show5{
			font-family: Candara;
			padding-left: 100px;
			padding-right: 70px;
			color: black;
			margin-right: 100px;
		}
		.show4{
			font-family: Candara;
			padding-left: 100px;
			padding-right: 70px;
			color: black;
			margin-right: 100px;

		}
		.show2{
			font-family: Candara;
			padding-left: 10px;
			padding-right: 70px;
			color: black;
			margin-right: 100px;
		}
		.show{
			font-family: Candara;
			padding-left: 70px;
			padding-right: 70px;
			color: black;
		}
		</style>
		<!--=======photos=======-->
		<body background="photo/background1.jpg" >	
		</body>
	</head>
	
	<body>
		<img src="photo/TRASH-513.PNG" width="100" height="100" class="logo"><br>
		<h1 class="header1" >CAR LiFE DELETE<h1>
		<a href="http://localhost/project/" target="_blank"><img src="photo/headertop1.png" width="50" height="50"
		class="headertop1"></a><br> <br>
		<!--======create table======-->
		<table>
			<thead>
				<tr>
					<th class="shows1">Id</th>
					<th class="shows2">Name</th>
					<th class="shows3">Number Of Employees</th>
					<th class="shows4">Manager Id</th>
					<th class="shows6">Roles</th>
					
					<th>Delete</th>
				</tr>
			</thead>

				<tbody>
					
						<!--======open conect with database and check======-->
					<?php
						$con=mysqli_connect("localhost","root","","carlife");
						//=============select sql ====================
						$sql="select *from departments";
						$result=mysqli_query($con,$sql);
						$array=mysqli_fetch_all($result);
						$count=count($array);

						for ($i=0; $i <$count ; $i++) { echo"
							<tr>
							<td class='show2'>".$array[$i][4]."</td>
							<td class='show'>".$array[$i][0]."</td>
						 	<td class='show5'>".$array[$i][2]."</td>
						 	<td class='show4'>".$array[$i][3]."</td>
						 	<td class='shows5'>".$array[$i][1]."<br><br></td>
						 	<td >
						 	<a href='http://localhost/project/delete_departmentsql.php?id=".$array[$i][4]."'>
						 	<img src='photo/delete.gif' width='30' height='30' class='icon' ></a></td>
						 	</tr> 
						";
						}
					?>
					
		</tbody>
	</table>
	<br>

	<img src="photo/Facebook-Icon-Grijs.png"  class="photobottom12">

	</body>
</html>
