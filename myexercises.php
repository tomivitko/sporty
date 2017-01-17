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
?>

<html>
	<head>
		<title>Generic - Introspect by TEMPLATED</title>
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
						<h1>MOJE VJEŽBE</h1>
						<p id="myExercisesList"><?php myExercises(); ?></p>
						<h1>SVE VJEŽBE</h1>
						<p><?php allExercises(); ?></p>
					</header>
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
<script>
function addExercise(exercise_id, user_id) {
	document.getElementById("myExercisesList").innerHTML ="";
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if(this.responseText == '1')
		  window.location='results.php?exercise_id='+exercise_id;
	  else
		  alert('vježba je već odabrana!');
    }
  };
  xhttp.open("POST", "assets/skripte/addExercise.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("user_id=" + user_id + "&exercise_id=" + exercise_id);
}
</script>