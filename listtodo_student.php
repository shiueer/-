<?php
session_start();
require("dbconnect.php");
$sql = "select * from todolist where Status = 0;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<a href="loginForm.php"><button>OUT</button></a>
<p>my apply list !! </p>
<hr/>
<table width="200" border="1">
  <tr>
    <td>ID</td>
    <td>Title</td>
    <td>Content</td>
    <td>Status</td>
  </tr>
<?php
while (	$rs=mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $rs['ID'] . "</td>";
	echo "<td>{$rs['Title']}</td>";
	echo "<td>" , $rs['Content'], "</td>";
  echo "<td>" . $rs['Status'] ,"</td>";
  echo "<td><a href= 'listtoset_employee.php?ID={$rs['ID']}'>OK</a>". "</td></tr>";
}
?>
</body>
</html>
