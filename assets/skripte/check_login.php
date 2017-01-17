<?php
ob_start();

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="sporty"; // Database name
// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($conn, $db_name)or die("cannot select DB");
mysqli_set_charset($conn,"utf8");

$myusername=mysqli_real_escape_string($conn, $_POST['username']);
$mypassword=mysqli_real_escape_string($conn, md5($_POST['password']));

$query = "SELECT * FROM users WHERE email='$myusername' and password='$mypassword'";
$result = mysqli_query($conn, $query);

$count=mysqli_num_rows($result);
echo $count;
if($count==1)
{
	session_start();
	$_SESSION['loggedin'] = true;
	$row = mysqli_fetch_assoc($result);
	$_SESSION['user_id'] = $row['id_user'];
	$_SESSION['user_role'] = $row['id_role'];
	mysqli_close($conn);
	if($row['id_role']==2)
		header("Location: ../../myexercises.php");
	else
		header("Location: ../../admin_page.php");
}
else 
{
	mysqli_close($conn);
	header("Location: ../../login.php");
}
ob_flush();
?>
