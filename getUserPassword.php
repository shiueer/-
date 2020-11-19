<?php
session_start();
require("userModel.php");

$userName = $_POST['id'];
$passWord = $_POST['pwd'];
$userIdnetity = $_POST['identity'];

echo getUserPwd('kkk');

?>