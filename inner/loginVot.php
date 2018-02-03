<?php 
include('db.php');
session_start();
{
	$user=$_POST['varsityIDD'];
	$pass=$_POST['passwordd'];
    $fetch=mysql_query("select varsityIDD from voter_reg where varsityIDD='$user' and passwordd='$pass'");
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
