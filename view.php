<table border="1px" cellpadding="10px" cellspacing="5px">
	<tr bgcolor="maroon" style="color:white;">
		<th>Nomor urutan</th>
		<th>Nama</th>
		<th>NIM</th>
		<th>kelas</th>
		<th>jenis kelamin</th>
		<th>hobby</th>
		<th colspan="2">aksi</th>
	</tr>
<?php 
	include 'koneksi.php';
	$query=mysql_query("SELECT * FROM mahasiswa")or die(mysql_error());
	$no = 1;
	if(mysql_num_rows($query) == 0){
		echo '<tr>
				<td colspan="7">Tidak ada rumus!!!</td>
			</tr>';
		header("location:index.php");
							}else{
	while($data=mysql_fetch_array($query))
	{
?>
		
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['nim']; ?></td>
				<td><?php echo $data['kelas']; ?></td>
				<td><?php echo $data['jenis_kelamin']; ?></td>
				<td><?php echo $data['hobby']; ?></td>
				<td><a href="edit.php?id=<?php echo $data['id'];?>">edit</a></td>
				<td><a href="delete.php?id=<?php echo $data['id'];?>">hapus</a></td>
			</tr>
<?php
		}
	}
 ?>
</table>