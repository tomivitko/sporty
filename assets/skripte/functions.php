<?php

//spajanje na bazu
function connectToDB($sql)
{
    $host="localhost"; // Host name
    $username="root"; // Mysql username
    $password=""; // Mysql password
    $db_name="sporty"; // Database name
    // Connect to server and select databse.
    $conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
    mysqli_select_db($conn, $db_name)or die("cannot select DB");
    mysqli_set_charset($conn,"utf8");
    return mysqli_query($conn, $sql);
}

//ispis vjezbi koje korisnik ima
function myExercises()
{
	global $user_id;
	if(isset($_GET["delete"])){ 
		//echo $_GET["delete"];
		$sql="update user_exercises set date_end=NOW() where user_exercises.id_user = ".$user_id." and user_exercises.id_exercise = ".$_GET["delete"];	
		connectToDB($sql);
	}
	
	$sql = "select exercises.id_exercise, exercises.name, exercises.description
			FROM exercises INNER JOIN user_exercises ON (exercises.id_exercise = user_exercises.id_exercise)
			where user_exercises.date_end is null and user_exercises.id_user =" .$user_id;
	$result = connectToDB($sql);
	if(mysqli_num_rows($result) == 0)
		echo 'Nema odabranih vježbi';
	else 
		while($row=mysqli_fetch_array($result))
			echo '<h3>' . $row['name'] . '</h3>
				  <p>' . $row['description'] . '</p>
				  <div class="6u$ 12u$(xsmall)">
						<ul class="actions fit small">
							<li><a href="results.php?exercise_id='. $row['id_exercise'] .'" class="button fit small">Rezultati</a></li>
							<li><a href="myexercises.php?delete='. $row['id_exercise'] .'" name="delete" class="button alt fit small">Izbriši</a></li>
						</ul>
				  </div>
				  <hr />';
}

//ispis svih vjezbi
//select exercises.id_exercise, exercises.name, exercises.description, user_exercises.date_end
//FROM exercises INNER JOIN user_exercises on (exercises.id_exercise = user_exercises.id_exercise)
//where 1
function allExercises()
{
	global $user_id;
	$sql = "select exercises.id_exercise, exercises.name, exercises.description
			FROM exercises";
	$result = connectToDB($sql);
	while($row=mysqli_fetch_array($result))
			echo '<h3>' . $row['name'] . '</h3>
				  <p>' . $row['description'] . '</p>
				  <div class="6u$ 12u$(xsmall)">
						<ul class="actions fit small">
							<li><a href="#" onclick="javascript:addExercise(' . $row['id_exercise'] . ',' . $user_id . ')" class="button fit small">Dodaj</a></li>
						</ul>
				  </div>
				  <hr />';	
}



?>