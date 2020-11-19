<?php
session_start();
require("userModel.php");

$userName = $_POST['id'];
$passWord = $_POST['pwd'];
$role = $_POST['role'];

if (checkUserIDPwd($userName,$passWord,$role)) {
	//provide a link to the message list UI
	if($role == 0){//role is student
		echo "<a href='listtodo_student.php'>go</a>";
	}
	if($role == 1){//role is teacher
		echo "<a href='listtodo_teacher.php'>go</a>";
	}
	if($role == 2){//role is secretary
		echo "<a href='listtodo_secretary.php'>go</a>";
	}
	if($role == 3){//role is principal
		echo "<a href='listtodo_principal.php'>go</a>";
	}
} else {
	//print error message
	echo "Invalid Username or Password - Please try again <br />";
}
?>
