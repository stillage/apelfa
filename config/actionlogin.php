<?php
include '../database.php';

$nik = htmlspecialchars($_POST['nik']);
$password = htmlspecialchars($_POST['password']);

$sql = "SELECT * FROM user WHERE nik='$nik' AND password='$password'";

$login = mysqli_query($koneksi,$sql);
// die($sql);
$cek = mysqli_num_rows($login);
$cekrole = mysqli_fetch_array($login);

	if ($cek > 0) {

		// if ($cekrole['role'] != 'user') {

		// 	echo '<script>alert("Nik atau Password Salah !!!");
		// 	document.location.href="../login.php"
		// 	</script>';	
		// }

		session_start();
		$_SESSION['nama'] = $cekrole['nama'];
		$_SESSION['user_id'] = $cekrole['id'];
		$_SESSION['status'] = "login";
		header("location:../index.php");
	}
	else{

		echo '<script>alert("Nik atau Password Salah !!!");
			document.location.href="../login.php"
			</script>';	
	}


?>