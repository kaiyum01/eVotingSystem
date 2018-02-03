<?php
include('db.php');
session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("select varsityIDD from  voter_reg where varsityIDD='$check' ");

$row=mysql_fetch_array($session);
$login_session=$row['varsityIDD'];

if(!isset($login_session))
{
header("Location:index.php");
}
?>