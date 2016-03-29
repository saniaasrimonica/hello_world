<html>
<head>
	<title>beasiswa site</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body>
	<div id="header">
			<img src="logo.PNG">
	</div>
	<div id="menu">
	</div>
		<div class="table-left">
			<ul>
				<li><a href="index1.php?page=tentang">tentang</a></li>
				<li><a href="index1.php?page=input">Input</a></li>
				<li><a href="index1.php?page=view">View Data</a></li>
				<li><a href="logout.php">LOG OUT</a></li>	
			</ul>
		</div>
		<table border="0" class="table-right">
			<tr>
				<td class="td1">Dashboard</td>
			</tr>
			<tr>
				<td align="center">
						<?php 
							session_start();
							if(empty($_GET['page'])){
								include "input.php";
							}
							else{
								$page=$_GET['page'];
								if($page=="input"){
									include "input.php";
								}
								elseif ($page=="view") {
									include "view.php";
								}
							}
						 ?>
				</td>
			</tr>
		</table>
	<div id="clear">
	</div>
	<div id="footer">

	</div>
</body>
</html>
