<?php
session_start();
require("dbconnect.php");

//set the login mark to empty
$_SESSION['uID'] = "";
?>
<h1>Login Form</h1><hr />
<form method="post" action="loginCheck.php">
User Name: <input type="text" name="id"><br />
Password : <input type="password" name="pwd"><br />
Role : <input type="radio" name="role" value="0"><label>employee</label>
<input type="radio" name="role" value="1"><label>boss</label><br/>
<input type="submit">
</form>

<a href='getUserPassword.php'>Tell me passwords</a>