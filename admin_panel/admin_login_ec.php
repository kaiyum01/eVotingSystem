<?php 
include('db.php');
session_start();
{
	$user=$_POST['can_voter_id'];
	$pass=$_POST['can_password'];
    $fetch=mysql_query("select can_voter_id from admin_login where can_voter_id='$user' and can_password='$pass'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
	session_register("sessionusername");
    $_SESSION['login_username']=$user;
	header("Location:admin_panel/admin.php");	
    }
    else
    {
        echo "<p style=color:#FFFFFF;>"."Login Failed"."</p>";
        echo "<td style=background-color:#2A3542;color:#FFFFFF;padding:5px;font-size:15px;>" . "login failed" . "</td>";
	   header('Location:../index.php');
	}

}
?>