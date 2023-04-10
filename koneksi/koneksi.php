<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database ="mhs";

$connect = mysqli_connect($hostname, $username, $password, $database);


if (!$connect) {
	die("Koneksi gagal: ".
mysqli_connect_error());
}else{
	echo "Koneksi Berhasil";
}

?>