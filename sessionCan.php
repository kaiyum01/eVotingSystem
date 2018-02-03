<?php
include('db.php');
@session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("select can_voter_id from  candidate_reg where can_voter_id='$check' ");


$row=mysql_fetch_array($session);
$login_session=$row['can_voter_id'];

if(!isset($login_session))
{
header("Location:index.php");
}
?>
