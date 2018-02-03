<?php
include('db.php');
session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("select varsityID from  candidate_reg where varsityID='$check' ");


$row=mysql_fetch_array($session);
$login_session=$row['varsityID'];

if(!isset($login_session))
{
header("Location:index.php");
}
?>
