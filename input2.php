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
		<form method="post" action="prosesinput.php">
	<table align="center">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>
				<input type="text" name="nama">
			</td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>
				<input type="text" name="nim">
			</td>
		</tr>
		<tr>
			<td>kelas</td>
			<td>:</td>
			<td>
				<input type="text" name="kelas">
			</td>
		</tr>
		<tr>
			<td>jenis kelamin</td>
			<td>:</td>
			<td>
				<select name="jenis_kelamin">
					<option value="pria">pria
					<option value="wanita">wanita
				</select>
			</td>
		</tr>
		<tr>
			<td>hobby</td>
			<td>:</td>
			<td>
				<input type="text" name="hobby">
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="submit" name="submit" value="tambah">
			</td>
		</tr>		
	</table>	
</form>	
	</body>
</html>
