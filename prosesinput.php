<?php 
	include "koneksi.php";
	$nama =$_POST['nama'];
	$nim =$_POST['nim'];
	$kelas =$_POST['kelas'];

	if(isset($_POST['jenis_kelamin'])){
		$jenis_kelamin =$_POST['jenis_kelamin'];
	}

	$hobby =$_POST['hobby'];
	$insert=mysql_query("INSERT into mahasiswa values('','$nama','$nim','$kelas','$jenis_kelamin','$hobby')");
	if ($insert) {
		header("location:index.php");
	}else{
		echo "gagal";
	}
 ?>