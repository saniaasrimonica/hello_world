<html>
<HEAD>
<TITLE>
	login site
</TITLE>
<style>
	body{
		background-image: url(idea-slider-background.jpg);
		font-family: arial;
		font-size: 20px;
	}
	input{
		margin-top: 20px;
		width: 150px;
		height: 50px;
		text-align: center;
		border-color: maroon;
	}
	a{	color: maroon;
		text-decoration: none;
	}
</style>
</HEAD>
	<body>
		<center>
			<img src="2.PNG" width="250px" height="250px">
			<form method="POST" action="proseslogiin.php">
				<input type="text" name="nama" placeholder="username">
				<input type="password" name="nim" placeholder="password">
				<input type="submit" name="submit" value="masuk">
			</form>
			<a href="input2.php">sign up!!!</a>
		</center>	
	</body>
</html>
