<?php
require 'functions.php';
$user_id = $_POST['user_id'];
$exercise_id = $_POST['exercise_id'];
$sql="select * from `user_exercises` where `id_user`='$user_id' and `id_exercise`='$exercise_id' and `date_end` IS null";
$result=connectToDB($sql);
if(mysqli_num_rows($result) == 0){
$date_start = date("Y-m-d",time());
$query = "INSERT INTO `user_exercises`(`id_user`, `id_exercise`, `date_start`, `date_end`) 
		  VALUES ('$user_id','$exercise_id','$date_start',NULL)";
$result=connectToDB($query);
echo '1';
}
else echo '2';
//echo $user_id, $exercise_id, date("Y-m-d",time());
?>