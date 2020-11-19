<?php
require("dbconnect.php");
$TaskID=(int)$_GET['ID'];
if ($TaskID) {
	$sql = "UPDATE todolist set Status = 1 where `todolist`.`ID` = $TaskID;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
}
echo "Message:$TaskID completed.<br/>";
echo "<a href='listtodo.php'>back</a>";
?>

