<?php 
 
$host = "localhost";
$user = "root";
$password = "";
$database = "laundry_cahaya_final";
$connect    = mysqli_connect($host, $user, $password, $database);
$koneksi = mysqli_connect($host,$user,$password,$database);

if($koneksi->connect_error){
	die("Koneksi gagal");
}

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>