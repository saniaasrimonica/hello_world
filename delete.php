<?php 
	include "koneksi.php";
	$id =$_GET['id'];
	$query=mysql_query("DELETE FROM mahasiswa WHERE id='$id'");
	if($query){
		header("location:index1.php?page=view");
	}else{
		echo "gagal";
	}
 ?>