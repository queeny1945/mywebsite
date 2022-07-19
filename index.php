
<?php
//inisialisasi session
session_start();
 
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: account/login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="home.css">
</head> 
<body>

	<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="petimati/petimati.html">PeTiMaTi</a></li>
			<li class="dropdown"><a href="#">Content</a>
				<ul class="isi-dropdown">
					<li><a href="gunung/gunung.html">Gunung</a></li>
					<li><a href="pantai/pantai.html">Pantai</a></li>
					<li><a href="kuliner/kuliner.html">Kuliner</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#">Account</a>
				<ul class="isi-dropdown">
					<li><a href="account/login.php">Log-In</a></li>
					<li><a href="account/signup.php">Sign-Up</a></li>
					<li><a href="account/logout.php">Log-Out</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="conten">
		<div class="satu">
			<h1>Welcome to our page</h1>

			<p class="quotes">"Bepergian menjadikanmu sederhana, kamu melihat betapa kecilnya tempat yang kamu tinggali di dunia"</p>

			<p>~(Gustave Flaubert)~</p>

		</div>
	</div>
	
	<div class="footer">
		<p class="copyright"><a href="../home/index.php">&copy; Gila Travel</a></p>
	</div>

	<script></script>
	
</body>
</html>

