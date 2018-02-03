<?php
include('db.php');
session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("select varsityid from  ec_login where varsityid='$check' ");

$row=mysql_fetch_array($session);
$login_session=$row['varsityid'];

if(!isset($login_session))
{
header("Location:admin.php");
}
?>