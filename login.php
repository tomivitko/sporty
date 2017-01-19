<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>sporty</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<?php 
		require ('assets/skripte/header.php');
		?>

		<!-- Main -->
			<section id="main">
				<div class="inner">
					<header class="major special">
						<h1>PRIJAVA</h1>

					</header>


          <!-- Form -->
						<section>
							
							<form id="login_form" method="post" action="assets/skripte/check_login.php">
								<div class="row uniform 50%">
									<div class="12u$">
										<input type="text" name="username" id="demo-name" value="" placeholder="E-mail" />
									</div>
									<div class="12u$">
										<input type="password" name="password" id="demo-email" value="" placeholder="Lozinka" />
									</div>
								<div class="6u$ 12u$(xsmall)">
									<ul class="actions fit small">
										<li><a href="javascript:{}" onclick="document.getElementById('login_form').submit(); return false;" class="button fit small">Prijavi me</a></li>
										<li><a href="signup.php" class="button alt fit small">Registracija</a></li>
									</ul>
								</div>
								</div>
									
							</form>
						</section>
            <hr />
					
          

					

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
