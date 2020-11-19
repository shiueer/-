<?php
require("dbconnect.php");

function checkUserIDPwd($userName,$passWord,$role) {
	global $conn;
$userName = mysqli_real_escape_string($conn,$userName);
$role = mysqli_real_escape_string($conn,$role);
$isValid = false;

$sql = "SELECT password,id,role FROM user WHERE loginID='$userName' AND role='$role'";
if ($result = mysqli_query($conn,$sql)) {
	if ($row=mysqli_fetch_assoc($result)) {
		if ($row['password'] == $passWord and $row['role'] == $role) {
			//keep the user ID in session as a mark of login
			$_SESSION['uID'] = $row['id'];
			//provide a link to the message list UI
			$isValid = true;
		}
	}
}
return $isValid;
}


function getUserPwd($userName,$userIdentity) {
	$password="You guess!!";
	return $password;
}

function setUserPassword($userName,$userIdentity){
		return false;
}

?>










