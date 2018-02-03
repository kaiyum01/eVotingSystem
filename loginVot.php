<?php 
include('db.php');
session_start();
{
	$user=$_POST['public_voter_id'];
	$pass=$_POST['public_password'];
    $fetch=mysql_query("select public_voter_id from voter_reg where public_voter_id='$user' and public_password='$pass'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
	//session_register("sessionusername");
    $_SESSION['login_username']=$user;
	header("Location:adminpanelVot.php");	
    }
    else
    {
        echo "<p style=color:#FFFFFF;>"."Login Failed"."</p>";
        echo "<td style=background-color:#2A3542;color:#FFFFFF;padding:5px;font-size:15px;>" . "login failed" . "</td>";
	   header('Location:index.php');
	}

}
?>
