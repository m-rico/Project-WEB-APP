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
 
?>