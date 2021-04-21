<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Apelfa - Register</title>

		
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
	<!-- SUBSCRIBE -->
		<section id="subscribe">
			<div class="container">
				<i data-sr="ease-in over 1s, reset" class="fa fa-envelope icontop"></i>
				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<h2 data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="white-text">Daftar Akun</h2>
						<h5 data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="white-text">Daftarkan Diri Anda Jika Belum Punya Akun</h5>
						<!-- MAILCHIMP FORM -->
						<form method="POST" action="config/actionregister.php">
							<input data-sr="enter top over 1s, wait 0.3s, move 24px, reset" type="number" class="form-control" id="mc-nik" name="nik" placeholder="NIK Anda" /><br><br>
							<input data-sr="enter top over 1s, wait 0.3s, move 24px, reset" type="text" class="form-control" id="mc-email" name="nama" placeholder="Nama Anda"/><br><br>
							<input data-sr="enter top over 1s, wait 0.3s, move 24px, reset" type="password" class="form-control" id="mc-password" name="password" placeholder="Password Anda" /><br><br>
							<input type="hidden" name="role" value="user">
							<input type="submit" data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" type="submit" class="button-leweb"></input><br><br>
							<a href="login.php">Sudah Punya Akun</a>
							<label for="mc-email" class="mc-email"></label>
						</form>
						<!-- MAILCHIMP FORM ENDS -->
					</div>
				</div>
			</div>	
		</section>
	<!-- SUBSCRIBE ENDS -->
	
	<!-- FOOTER -->
		<footer id="footer">
			<div class="container">
				<div class="row text-center">	
					<p>
						&copy; 2021 Apelfa | Design By <a href="https://www.instagram.com/still.age/">Stillage & </a><a href="https://www.instagram.com/_romadhani/">Dhani</a>
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