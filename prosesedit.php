<?php 
	include "koneksi.php";
	$id =$_POST['id'];
	$nama =$_POST['nama'];
	$nim =$_POST['nim'];
	$kelas =$_POST['kelas'];
	$jenis_kelamin =$_POST['jenis_kelamin'];
	$hobby = $_POST['hobby'];

	$query = mysql_query("UPDATE mahasiswa set nama='$nama', nim='$nim', kelas='$kelas', jenis_kelamin='$jenis_kelamin', hobby='$hobby' where id='$id'");
	if($query)
	{
		header("location:index1.php?page=view");
	}else{
		echo "gagal";
	}
 ?>