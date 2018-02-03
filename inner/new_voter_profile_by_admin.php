<?php
//session_start();
?>

<?php 
include("head.php");
?>
    <?php 
include("admin_ec_top_bar_menu.php");
?>
	
	<p style="margin-top:500px;"></p>
<?php 

//echo $_GET['sid'];
include("database_connect/connect.php");
$id=$_GET['sid'];
$sql=("Select * from voter_reg where varsityIDD='$id'");
$result= mysql_query($sql);
while ($data= mysql_fetch_array($result)){



   echo $data[1]; 
   echo $data[2]; 
    echo $data[3]; 
	 echo $data[4]; 
	  echo $data[5]; 

}
?>

<?php 

include("admin_menu.php");
?>

</div>
   

<!-- Footer section-->

    <?php 
include("footer.php");
?>
        
