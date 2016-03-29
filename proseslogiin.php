<?php
	include('koneksi.php');
	session_start();
	$username = $_POST['nama'];
	$password = $_POST['nim'];
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	if (empty($username) && empty($password)) {
		header('location:index.php?error=1');
		break;
	} else if (empty($username)) {
		header('location:index.php?error=2');
		break;
	} else if (empty($password)) {
		header('location:index.php?error=3');
		break;
	}
	$q = mysql_query("select * from mahasiswa where nama='$username' and nim='$password'");

	if (mysql_num_rows($q) == 1) {
		$_SESSION['nama'] = $username;
		header('location:index1.php?page=view');
	} else {
		header('location:index.php?error=4');
	}
?>