<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
include 'assets/skripte/functions.php';
session_start();
$user_id = $_SESSION['user_id'];
if(isset($_POST['add_new_exercise']))
{
	$sql="INSERT INTO `exercises`(`name`, `description`) VALUES ('" . $_POST['exercise_name'] . "','" . $_POST['exercise_description'] . "')";
	connectToDB($sql);
	echo "<script> alert('Vježba uspješno dodana!');</script>";
}
?>
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
						<h1>DODAJ VJEŽBU</h1>
					</header>


          <!-- Form -->
						<section>
							<form id="" method="post" action="">
								<div class="row uniform 50%">
									<div class="12u$">
										<input type="text" name="exercise_name" id="demo-name" value="" placeholder="Naziv vježbe" />
									</div>
									<div class="12u$">
										<textarea name="exercise_description" id="demo-message" placeholder="Opis vježbe" rows="4"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="DODAJ VJEŽBU" name="add_new_exercise" class="special" /></li>
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
