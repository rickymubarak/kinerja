<?php
	$Open = mysqli_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db("db_kearsipan");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
?>

<?php
	<?php
	$mysqli = new mysqli("localhost","my_user","my_password","my_db");
	
	if ($mysqli -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}
	
	// Return name of current default database
	if ($result = $mysqli -> query("SELECT DATABASE()")) {
	  $row = $result -> fetch_row();
	  echo "Default database is " . $row[0];
	  $result -> close();
	}
	
	// Change db to "test" db
	$mysqli -> select_db("test");
	
	// Return name of current default database
	if ($result = $mysqli -> query("SELECT DATABASE()")) {
	  $row = $result -> fetch_row();
	  echo "Default database is " . $row[0];
	  $result -> close();
	}
	
	$mysqli -> close();
	?>
?>