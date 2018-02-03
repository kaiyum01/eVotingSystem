<?php 
include('db.php');
session_start();
{
	$canuser=$_POST['can_voter_id'];
	$canpass=$_POST['can_password'];
    $fetch=mysql_query("select can_voter_id from candidate_reg where can_voter_id='$canuser' and can_password='$canpass'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
	//session_register("sessionusername");
    $_SESSION['login_username']=$canuser;
	header("Location:adminpanelCan.php");	
    }
    else
    {
        echo "<p style=color:#FFFFFF;>"."Login Failed"."</p>";
        echo "<td style=background-color:#2A3542;color:#FFFFFF;padding:5px;font-size:15px;>" . "login failed" . "</td>";
	   header('Location:index.php');
	}

}
?>