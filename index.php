<?php
session_start();
?>

<?php 
include("head.php");
?>
  	<?php
	$target = mktime(0, 0, 0, 05, 31, 2018) ;
$today = time () ;
$difference =($target-$today) ;
$days =(int) ($difference/86400) ;
//print "Christmas is in $days days";
if($days==0 || $days<1)
{
	//echo "expired";
}
else 
{  
include("home_top_bar_menu.php");
}
?>
	

	<?php 
include("head_description.php");
?>
	  											
<?php
$target = mktime(0, 0, 0, 05, 31, 2018) ;
$today = time () ;
$difference =($target-$today) ;
$days =(int) ($difference/86400) ;
//print "Christmas is in $days days";
if($days==0 || $days<1)
{
	echo '<img style="float:left;margin-left:3.7%;margin-right:8%;" class="img-responsive" src="img/exp.png"><div style="color:red;font-size:20px;" class="container jumbotron">'.'License has been expired! <br/>'.'<p style="color:gray;font-size:15px;">'.'Please contact the Author: <br/> Mohammad Abdul Kaiyum <br/> Cell: 01815526607 <br/> email: ma.kaiyum1992@gmail.com'.'</p>'."</div>";
}
else 
{ 
	include("main_body.php");
}
?>


<!-- Footer section-->
<?php 
include("footer.php");
?>
  		
