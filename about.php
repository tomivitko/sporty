<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
session_start();
?>
<html>
	<head>
		<title>sporty</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<?php 
		require ('assets/skripte/header.php');
		?>
		
		<!-- Main -->
			<section id="main" >
				<div class="inner">
					<header class="major special">
						<h1>O PROJEKTU</h1>
					</header>
					
					<p>Ovaj projekt je napravljen za kolegij PHP-web programiranje na Veleučilištu Velika Gorica. Aplikacija služi za odabir vježbi, upisivanje rezultata vježbi i praćenje rezultata pomoću grafa.</p>
					<p>Korištene tehnologije su HTML, PHP i MySQL, JavaScript te Apache web server. 
					Testni korisnici su: ivo@mail.com, ana@mail.com.
					Admin korisnik je: admin@admin.com. 
					Za sve korisnike je lozinka 'pass'.</p>
					</p>
					<p>Template za stranicu je preuzet sa <a href="https://templated.co/">templated.co</a><br>
					<a href="http://creativecommons.org/licenses/by/3.0"</a>creativecommons.org/licenses/by/3.0</a></p>
					<p>Dodatni linkovi:<br><a href="http://metro-portal.rtl.hr/zasto-je-bolje-vjezbati-ujutro-nego-navecer/57416">metro-portal.rtl.hr</a>
					<br><a href="http://www.ekologija.com.hr/zdrava-hrana-pravilna-prehrana/">http://www.ekologija.com.hr/</a></p>
				</div>
			</section>

		<?php 
		require ('assets/skripte/footer.php');
		?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
