<html>
<head>
	<title>Beasiswa site</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<style>
		img{
			width: 140px;
			height: 140px;
			padding-top: 10px;
			padding-left: 20px;
		}
	</style>
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
		<center>
		<table>
				<form method="post" action="prosesedit.php">
				<?php 
					include "koneksi.php";
					$id = $_GET['id'];
					$select = mysql_query("SELECT * FROM mahasiswa WHERE id='$id'");
					$data = mysql_fetch_array($select);
				 ?>
						<tr>
							<td colspan="">
								<input type="hidden" name="id" value="<?php echo $id; ?>" >
							</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td>
								<input type="text" name="nama" value="<?php echo $data['nama']; ?>">
							</td>
						</tr>
						<tr>
							<td>NIM</td>
							<td>:</td>
							<td>
								<input type="text" name="nim" value="<?php echo $data['nim']; ?>">
							</td>
						</tr>
						<tr>
							<td>kelas</td>
							<td>:</td>
							<td>
								<input type="text" name="kelas" value="<?php echo $data['kelas']; ?>">
							</td>
						</tr>
						<tr>
							<td>jenis kelamin</td>
							<td>:</td>
							<td>
								<select name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>">
									<option value="pria">pria
									<option value="wanita">wanita
								</select>
							</td>
						</tr>
						<tr>
							<td>hobby</td>
							<td>:</td>
							<td>
								<input type="text" name="hobby" value="<?php echo $data['hobby']; ?>">
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<input type="submit" name="submit" value="edit">
							</td>
						</tr>			
				</form>
			</table>
			</center>
	<div id="clear">
	</div>
	<div id="footer">

	</div>
</body>
</html>
