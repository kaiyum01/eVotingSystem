<?php
include('db.php');
@session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("select public_voter_id from  voter_reg where public_voter_id='$check' ");

$row=mysql_fetch_array($session);
$login_session=$row['public_voter_id'];

if(!isset($login_session))
{
header("Location:index.php");
}
?>

