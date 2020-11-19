<?php
session_start();
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>Add New Task</h1>
<form method="post" action="addTask.php">

      Task Title: <input name="Title" type="text" id="Title" /> <br>
      Task Content: <input name="Content" type="text" id="Content" /> <br>
      Status: <input name="Status" type="radio" id="Status" value="0"/><label>未完成</label><br>
      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>
</html>
