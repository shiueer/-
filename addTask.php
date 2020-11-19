<?php
require("dbconnect.php");
$Title=mysqli_real_escape_string($conn,$_POST['Title']);
$Content=mysqli_real_escape_string($conn,$_POST['Content']);
$Status=mysqli_real_escape_string($conn,$_POST['Status']);

if ($Title) { //if title is not empty
	$sql = "insert into todolist (ID,Title, Content, Status) values (Null,'$Title', '$Content','$Status');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	echo "Tsak added<br/>";
	echo "<a href='listtodo.php'>back</a>";
} else {
	echo "Task cannot be empty";
}
?>