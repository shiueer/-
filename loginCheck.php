<?php
session_start();
require("userModel.php");

$userName = $_POST['id'];
$passWord = $_POST['pwd'];
$role = $_POST['role'];

if (checkUserIDPwd($userName,$passWord,$role)) {
	//provide a link to the message list UI
	if($role == 1){
		echo "<a href='listtodo.php'>go</a>";
	}
	else{
		echo "<a href='listtodo_employee.php'>go</a>";
	}
} else {
	//print error message
	echo "Invalid Username or Password - Please try again <br />";
}
?>
