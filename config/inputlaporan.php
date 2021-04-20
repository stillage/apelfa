<?php
include 'database.php';

$timezone = new DateTimeZone('Asia/Jakarta');
$date = new DateTime();
$date->setTimeZone($timezone);

// echo 'Indonesian Timezone: ' . $date->format('d-m-Y H:i:s') . '<br/>';
// echo 'Default Timezone: ' . date('d-m-Y H:i:s');

$nama_tempat = $_POST['nama_tempat'];
$alamat = $_POST['alamat'];
$tingkat_kerusakan = $_POST['tingkat'];
$jenis_kerusakan = $_POST['jenis'];
$foto = $_POST['foto'];
$rincian = $_POST['rincian'];
$tanggal_lapor = $date->format('d-m-Y');
$user_id = $_POST['user_id'];


$sql = "INSERT INTO pelaporan VALUES(NULL,'".$nama_tempat."','".$alamat."','".$tingkat_kerusakan."','".$jenis_kerusakan."','".$foto."','".$rincian."','".$tanggal_lapor."','".$user_id."')";

die($sql);

$insert = mysqli_query($koneksi,$sql);

if ($insert) {
	
	echo '<script>alert("Laporan Berhasil di tambahkan");
			document.location.href="../index.php"
			</script>';	
}
else{
	echo '<script>alert("Laporan Gagal di Simpan");
			document.location.href="../index.php"
			</script>';	
}
?>