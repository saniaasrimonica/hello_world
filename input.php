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