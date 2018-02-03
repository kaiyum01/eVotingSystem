<?php 
include('db.php');
session_start();
{
	$admin_user=$_POST['admin_voter_id'];
	$admin_pass=$_POST['admin_password'];
    $fetch=mysql_query("select admin_voter_id from admin_login where admin_voter_id='$admin_user' and admin_password='$admin_pass'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
	//session_register("sessionusername");
    $_SESSION['login_username']=$admin_user;
	header("Location:admin.php");	
    }
    else
    {
        echo "<p style=color:#FFFFFF;>"."Login Failed"."</p>";
        echo "<td style=background-color:#2A3542;color:#FFFFFF;padding:5px;font-size:15px;>" . "login failed" . "</td>";
	   header('Location:index.php');
	}

}
?>