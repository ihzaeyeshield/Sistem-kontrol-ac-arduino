<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		

		date_default_timezone_set('Asia/Jakarta');
        $date = new DateTime('now');
		$time= $date->format('d-m-Y : H:i:s'); // 21-01-2017 05:13:0

        $ip_address = gethostbyname("www.google.com");  

		mysqli_query($koneksi,"insert into iplog (username, ipaddress, waktu)
		values('$_SESSION[username]', '$ip_address', '$time')");
		// alihkan ke halaman dashboard admin
		header("location:../index.php?pesan=berhasil");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";

		date_default_timezone_set('Asia/Jakarta');
        $date = new DateTime('now');
		$time= $date->format('d-m-Y : H:i:s'); // 21-01-2017 05:13:0

        $ip_address = gethostbyname("www.google.com");  

		mysqli_query($koneksi,"insert into iplog (username, ipaddress, waktu)
		values('$_SESSION[username]', '$ip_address', '$time')");
		// alihkan ke halaman dashboard pegawai
		header("location:../indexuser.php?pesan=berhasil");

	// cek jika user login sebagai pengurus
	}else{

		// alihkan ke halaman login kembali
		header("location:../login.php?pesan=gagal");
	}


}else{
	header("location:../login.php?pesan=gagal");
}



?>
