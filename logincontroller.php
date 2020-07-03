<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM pengguna where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($result);
 
// cek apakah username dan password di temukan pada database
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);


	// cek jika user login sebagai admin
	if($data['role']=="A"){
 
		// buat session username dan nama
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['role'] = "A";
		// alihkan ke halaman dashboard admin
		header("location:beranda.php");

	// cek jika user login sebagai pelanggan / user biasa
	}else if($data['role']=="B"){
		// buat session login username dan nama
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['role'] = "B";
		// alihkan ke halaman dashboard pegawai
		header("location:BerandaUser.php");
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?tidak valid.");
	}	
	








	// //menyimpan session user, nama, status dan id login
	// $_SESSION['username'] = $username;
	// $_SESSION['nama'] = $data['nama'];
	// $_SESSION['status'] = "sudah_login";
	// $_SESSION['id_login'] = $data['id'];
	// header("location:beranda.php");



}else {
	header("location:login.php?pesan=gagal login data tidak ditemukan.");
}
?>



<!--- Link Buat Belajar --->

<!--- 

	https://www.malasngoding.com/membuat-login-multi-user-level-dengan-php-dan-mysqli/

	https://www.malasngoding.com/membuat-koneksi-database-dengan-php-dan-mysqli/

	https://www.malasngoding.com/membuat-desain-form-login-dengan-css/

 --->