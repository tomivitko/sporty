<?php

echo '<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="" class="logo">sporty</a>
					<nav id="nav">
						<a href="index.php">Naslovnica</a>';
						if(isset($_SESSION['loggedin']) && $_SESSION['user_role'] == 2)
							echo'<a href="myexercises.php">Moje vježbe</a>
								<a href="about.php">O nama</a>
								<a href="assets/skripte/logout.php">Odjavi me</a>';
						else if(isset($_SESSION['loggedin']) && $_SESSION['user_role'] == 1)
							echo'<a href="admin_page.php">Admin</a>
								<a href="about.php">O nama</a>
								<a href="assets/skripte/logout.php">Odjavi me</a>';
						else
							echo '<a href="about.php">O nama</a>
								  <a href="login.php">Login</a>';
echo'				</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>';
?>
