<?php
	// koneksi database
	$server = "localhost";
	$user	= "root";
	$pass	= "";
	$database	= "e-kinerja";
	$koneksi	= mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));
?>