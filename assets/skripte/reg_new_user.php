<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="sporty"; // Database name
// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($conn, $db_name)or die("cannot select DB");
mysqli_set_charset($conn,"utf8");

$firstname=mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname=mysqli_real_escape_string($conn, $_POST['lastname']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$sex=mysqli_real_escape_string($conn, $_POST['sex']);
$password=mysqli_real_escape_string($conn, $_POST['password']);
$password2=mysqli_real_escape_string($conn, $_POST['password2']);

if($password!=$password2)
{
	echo "Lozinke nisu iste";
}
else
{
	$query = "INSERT INTO `users`(`first_name`, `last_name`, `password`, `email`, `sex`, `id_role`) 
			VALUES ('" . $firstname . "', '" . $lastname . "', '" . md5($password) . "', '" . $email . "', '" . $sex . "', '2')";
	$result = mysqli_query($conn, $query);
	
}
?>