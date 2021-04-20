<?php
include '../database.php';

$nik = htmlspecialchars($_POST['nik']);
$nama = htmlspecialchars($_POST['nama']);
$role = "user";
$password = htmlspecialchars($_POST['password']);
// $password = md5($password);

$input = "INSERT INTO user VALUES (NULL,'".$nik."','".$nama."','".$password."','".$role."')";

$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM user WHERE nik ='$_POST[nik]'"));
// die($input);

$insert = mysqli_query($koneksi,$input);

if ($cek > 0) {
	
	echo '<script>alert("Register Gagal NIK Sudah Ada");
			document.location.href="../register.php"
			</script>';
}
else{

	if ($insert) {

	echo '<script>alert("Register Berhasil");
			document.location.href="../login.php"
			</script>';
	}
	else{

		echo '<script>alert("Register Gagal");
				document.location.href="../register.php"
				</script>';
	}
}


?>