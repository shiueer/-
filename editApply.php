<?php
require("dbconnect.php");
$TaskID=$_POST['id'];
$Title=mysqli_real_escape_string($conn,$_POST['Title']);
$Content=mysqli_real_escape_string($conn,$_POST['Content']);

if ($Title) { //if title is not empty
	$sql = "UPDATE todolist set`Title` = '$Title', `Content` = '$Content' WHERE `todolist`.`ID` = $TaskID;";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	echo "Tsak edited";
} else {
	echo "Task cannot be empty<br/>";
	echo "<a href='listtodo.php'>back</a>";
}
?>