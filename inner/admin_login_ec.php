<?php 
include('db.php');
session_start();
{
	$user=$_POST['varsityid'];
	$pass=$_POST['password'];
    $fetch=mysql_query("select varsityid from ec_login where varsityid='$user' and password='$pass'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
	//session_register("sessionusername");
    $_SESSION['login_username']=$user;
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