<?php
session_start();
require("dbconnect.php");
$sql = "select * from apply_content;";
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
<a href="addTask.php"><button>Add apply</button></a><br>

<br><table width="auto" border="1">
  <tr>
    <td>No.</td>
    <td>姓名</td>
    <td>學號</td>
    <td>父姓名</td>
    <td>母姓名</td>
    <td>申請補助種類</td>
    <td>師長附註</td>
    <td>導師簽章</td>
    <td>秘書審核</td>
    <td>補助金額</td>
    <td>審查意見</td>
    <td>校長簽核</td>
  </tr>
<?php
while (	$rs=mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $rs['ID'] . "</td>";
	echo "<td>{$rs['Name']}</td>";
	echo "<td>" , $rs['sID'], "</td>";
  echo "<td>" . $rs['FName'] ,"</td>";
  echo "<td>" . $rs['MName'] ,"</td>";
  echo "<td>" . $rs['Income_status'] ,"</td>";
  echo "<td>" . $rs['Note'] ,"</td>";
  echo "<td>" . $rs['T_admit'] ,"</td>";
  echo "<td>" . $rs['S_admit'] ,"</td>";
  echo "<td>" . $rs['Amount'] ,"</td>";
  echo "<td>" . $rs['S_note'] ,"</td>";
  echo "<td>" . $rs['P_admit'] ,"</td>";
  echo "<td><a href= 'editTask.php?ID={$rs['ID']}'>Edit</a>". "</td>";
  echo "<td><a href= 'listtoset_employee.php?ID={$rs['ID']}'>OK</a>". "</td></tr>";
}
?>
</body>
</html>
