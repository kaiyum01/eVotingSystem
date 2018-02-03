<?php
include('db.php');
session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("select admin_voter_id from  admin_login where admin_voter_id='$check' ");

$row=mysql_fetch_array($session);
$login_session=$row['admin_voter_id'];

if(!isset($login_session))
{
header("Location:admin.php");
}
?>