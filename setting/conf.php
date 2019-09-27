<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "t_hasilpemilu"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
