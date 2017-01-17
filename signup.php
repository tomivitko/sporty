<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Elements - Introspect by TEMPLATED</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.js"></script>

		
	</head>
	<body>

		<?php 
		require ('assets/skripte/header.php');
		?>

		<!-- Main -->
			<section id="main">
				<div class="inner">
					<header class="major special">
						<h1>Registracija</h1>

					</header>


          <!-- Form -->
						<section>
							
							<form id="registration_form" name="registration" method="post" action="assets/skripte/reg_new_user.php">
								<div class="row uniform 50%">
									<div class="12u$">
										<input type="text" name="firstname" id="demo-name" value="" placeholder="Ime" required="required"/>
									</div>
									<div class="12u$">
										<input type="text" name="lastname" id="demo-name" value="" placeholder="Prezime" required="required"/>
									</div>
									<div class="12u$">
										<input type="email" name="email" id="demo-email" value="" placeholder="E-mail" required="required"/>
									</div>
									<div class="4u 12u$(xsmall)">
										<input type="radio" id="priority-low" value="1" name="sex" required="required">
										<label for="priority-low">Muško</label>
									</div>
									<div class="4u 12u$(xsmall)">
										<input type="radio" id="priority-normal" value="2" name="sex">
										<label for="priority-normal">Žensko</label>
									</div>
									<div class="12u$">
										<input type="password" name="password" id="password_main" placeholder="Lozinka" required="required"/>
									</div>  
									<div class="12u$">
										<input type="password" name="password2" id="password_confirm" placeholder="Ponovi lozinku" required="required"/>
									</div>
									
									<div class="6u$ 12u$(xsmall)">
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" id="submit" value="REGISTRIRAJ ME"/></li>
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

<script type="text/javascript">
    var frm = $('#registration_form');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                window.location='login.php';
            }
        });

        ev.preventDefault();
    });
</script>