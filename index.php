<?php
include 'database.php';

// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}

?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Apelfa - Aplikasi Pelaporan Kerusakan Infrastruktur</title>

		
		<!-- WEB FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		
		<!-- BOOTSTRAP -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- CUSTOM STYLING -->
		<link href="css/styles.css" rel="stylesheet">
		<!-- PRELOADER -->	
		<link href="css/loader.css" rel="stylesheet">
			
	</head>
	
<body>
	<!-- PRELOADER -->
		<div id="loader-wrapper">
			<div id="loader"><div class="sk-spinner sk-spinner-cube-grid"><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div><div class="sk-cube"></div></div></div>
		</div>	
		
	<!-- HEADER -->
		<section id="header">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8">
						<img class="logo" src="images/logo.png" />
						<h1 class="white-text">Selamat Datang di Website Apelfa</h1>
						<h5 class="white-text">Untuk melakukan pelaporan silahkan lakukan di form lapor.</h5>
						<div id="countdown" class="white-text"></div>
					</div>
				</div>
			</div>
			<div class="animation">
			<a class="arrow-down-animation" data-scroll href="#about"><i class="fa fa-angle-down"></i></a>
			</div>
		</section>
	<!-- HEADER ENDS -->
		
	<!-- ABOUT -->
		<section id="about">
			<div class="container">
				<div class="row text-center">
					<!-- Section 1 -->
					<div data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="col-md-4">
						<i class="fa fa-laptop"></i>
						<h3>Melapor dengan Mudah</h3>
						<div class="colored-line-small-center"></div>
						<p>Melapor menggunakan apelfa sangan praktis dan mudah.</p>
					</div>
					<!-- Section 2 -->
					<div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="col-md-4 middle">
						<i class="fa fa-lightbulb-o"></i>
						<h3>Hemat Biaya</h3>
						<div class="colored-line-small-center"></div>						
						<p>Tanpa datang ke kantor dan tanpa biaya tranport.</p>						
					</div>
					<!-- Section 3 -->
					<div data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="col-md-4">
						<i class="fa fa-newspaper-o"></i>
						<h3>Cepat Tanggap</h3>
						<div class="colored-line-small-center"></div>
						<p>Cepat menanggapi laporan dari masyarakat.</p>						
					</div>
				</div>
			</div>			
		</section>
	<!-- ABOUT ENDS -->
	<!-- CONTACT US -->
		<section id="contact">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<!-- CONTACT FORM -->
						<form method="post" action="config/inputlaporan.php">
							<p data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="contact-info text-center"><b>Form Pelaporan Kerusakan Infrastruktur</b></p>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-12">
								<input type="text" class="form-control" id="name" name="nama_tempat" placeholder="Nama Tempat" />
							</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-6">
								<input type="file" class="form-control" id="gambar" name="foto" placeholder="Upload Gambar" />
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-6">
								<div class="form-group col-md-6">
									<select name="subject">
										<option disabled="disabled" selected="selected">Tingkat kerusakan</option>
										<option id="tingkat" name="tingkat">Tinggi</option>
										<option id="tingkat" name="tingkat">Sedang</option>
										<option id="tingkat" name="tingkat">Rendah</option>
									</select>
									<div class="select-dropdown"></div>
								</div>
								<div class="form-group col-md-6">
									<select name="subject">
										<option disabled="disabled" selected="selected">Jenis Kerusakan</option>
										<option id="jenis" name="jenis">Taman</option>
										<option id="jenis" name="jenis">Tempat Sampah</option>
										<option id="jenis" name="jenis">Jalan Raya</option>
										<option id="jenis" name="jenis">Toilet Umum</option>
										<option id="jenis" name="jenis">Rambu Lalu Lintas</option>
										<option id="jenis" name="jenis">Trotoar</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							</div>
							<div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-12">
								<textarea cols="60" rows="3" id="rincian" name="rincian" class="form-control" placeholder="Rincian Kerusakan"></textarea>
							</div>
							<div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-12">
								<textarea cols="60" rows="3" id="alamat" name="alamat" class="form-control" placeholder="Alamat Kerusakan"></textarea>
							</div>
							<div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-12">
								<input type="text" name="user_id" value="$_SESSION['id']">
								<input type="submit" class="button-leweb col-md-12">Kirim</input>
							</div>
						</form>			
						<!-- CONTACT FORM ENDS -->	
					</div>				
				</div>
			</div>
		</section>
	<!-- CONTACT ENDS -->
	
	<!-- FOOTER -->
		<footer id="footer">
			<div class="container">
				<div class="row text-center">	
					<p>
						&copy; 2021 Apelfa | Design By <a href="http://site.alt-on.net">Alton</a>
						<span class="social">
							<a href="#"><i class="fa fa-facebook-square"></i></a>
							<a href="#"><i class="fa fa-twitter-square"></i></a> 
							<a href="#"><i class="fa fa-google-plus-square"></i></a>
						</span>
					</p>
				</div>
			</div>		
		</footer>
	<!-- FOOTER ENDS -->	

	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<!-- SMOOTH SCROLL -->
		<script src="js/smooth-scroll.min.js"></script>
		<!-- PARALLAX IMG -->
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- SCROLL REVEAL -->
		<script src="js/scrollReveal.min.js"></script>
		<!-- FUNCTIONS -->
		<script src="js/functions.js"></script>

</body>
</html>