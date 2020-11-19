<?php
require("dbconnect.php");

$TaskID=(int)$_POST['id'];
if ($TaskID) {
	$sql = "delete from todolist where id=$TaskID;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
}
echo "Task:$TaskID deleted.<br/>";
echo "<a href='listtodo.php'>back</a>";
?>

