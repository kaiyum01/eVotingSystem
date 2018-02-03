<html>
<head>
<style>
.msg{
height:200px;
width:auto;
background-color:#009966;
}
</style>
</head>
<body>

<?php
//include 'database_connect/connect.php';
//
//$tableName  = 'vote';
//$backupFile = 'db_backup/vote.sql';
//$query      = "SELECT * INTO OUTFILE '$backupFile' FROM $tableName"; 
//$result = mysql_query($query);
//
//if ($result) echo 'ok'; else echo 'faild';
//?> 
<?php
include("sessionAdminpanel.php");
?>
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
	
   $table_name = "vote";
   $backup_file  = "db_backup/vote.sql";
   $sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
   
   mysql_select_db('e_voting');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
    // echo '<div class="msg">'.die('Could not take data backup: ' . mysql_error())."</div>";
	 echo '<div class="msg">'.'Database backup is not successfully'.'</div>';

   }
   else
   {
   echo "Backeup  data successfully\n";
   }
   
   mysql_close($conn);
?>

<!--<style>
.banner {width:600px; text-align:center; margin:0 auto; position: relative; -webkit-border-radius: 5px 0 5px 5px; -moz-border-radius: 5px 0 5px 5px; border-radius: 5px 0 5px 5px; padding:50px 20px;}
.banner:before {content: ""; position: absolute; top: 0; right: 0;border-width: 0 24px 24px 0; border-style: solid; border-color:#F0F0F0 #fff; -webkit-border-radius: 0px 0 0px 5px; -moz-border-radius: 0px 0 0px 5px; border-radius: 0px 0 0px 5px;}
#screen {width:100%;color: #555;"Century Gothic",CenturyGothic,AppleGothic,sans-serif;line-height:45px;}
.txt-title {font-size:2em;}
.txt-subtitle {font-size:1.2em;}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	setInterval(function(){
		$("#screen").load('../jquery-div-auto-load-refresh/banners.php')
    }, 2000);
});
</script>
<div id="screen"></div>

<?php
//$bg_array = array("#CEED9D","#ECED9D","#EDCF9D","#EC9CA7","#ED9DD0","#EE9DE2","#D69DEC","#9E9CEC");
//$bg = array_rand($bg_array,1);
?>
<div class="banner" style="background-color:<?php //echo $bg_array[$bg];?>;" >
<div class="txt-title">jQuery DIV Auto Load Refresh</div>
<div class="txt-subtitle">This Banner auto loads and refreshes every 2 seconds.</div>
</div>-->
</body>
</html>