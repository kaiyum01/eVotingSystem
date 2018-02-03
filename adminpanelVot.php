<?php
include("sessionVot.php");
?>


<?php 
include("head.php");
?>

  	<?php 
include("admin_top_bar_menu_Vot.php");
?>
	

	<?php 
include("head_description.php");
?>
 <div class="container"> 	  											
<div class="jumbotron">
	<?php
	
	include("database_connect/connect.php");
$sql_voter="Select 	public_is_vote_status,public_approve from voter_reg where public_voter_id='$login_session'";
$result=mysql_query($sql_voter);
while ($data=mysql_fetch_array($result))
{

if($data[0]=='Yes')
{
echo '<p style="text-align:center; color:#F73A50;">'.' Sorry You have already given vote !'.'</p>';
}
	elseif(  $data[1]=='Deactivate' )
	{
	echo '<p style="text-align:center; color:#6EBD3F;">'.' Your profile is Deactivate now! When your profile will be Active by Election Commission then you can see Candidate List and get permission to give vote!'.'<br/>'.'Please wait for Activation Process !'.'</p>';
	}
else 
{
echo '<h4 style="text-align:center;padding-top:5px;padding-bottom:5px;background-color:#0D9B49;color:#ffffff;">'.'Congratulation ! You are Activated '.'</h4>';
	//include("new_can_datatable_give_vote.php");
	include("database_connect/connect.php");
$sql_system="Select persmission_to_vote from system_setting where id=1";
$result_system=mysql_query($sql_system);
while ($data_system=mysql_fetch_array($result_system))
{

if($data_system[0]==1)
{
echo '<h4 style="text-align:center;padding-top:5px;padding-bottom:5px;background-color:#0D9B49;color:#ffffff;">'.'You have to select your candidate to give vote '.'</h4>';
	include("new_can_datatable_give_vote.php");
}
else 
{
echo '<p style="text-align:center; color:#F73A50;">'.' Please wait for getting candidate list to give vote after permission by election commission !'.'</p>';

}        		 

 }
}        		 
 }
 	?>	
</div>

</div>
</div>
<div class="container"> 	  											
	<?php
	//
//	include("database_connect/connect.php");
//$sql_system="Select persmission_to_vote from system_setting where id=1";
//$result_system=mysql_query($sql_system);
//while ($data_system=mysql_fetch_array($result_system))
//{
//
//if($data_system[0]==1)
//{
//echo '<h4 style="text-align:center;padding-top:5px;padding-bottom:5px;background-color:#0D9B49;color:#ffffff;">'.'You have to select your candidate to give vote '.'</h4>';
//	include("new_can_datatable_give_vote.php");
//}
//else 
//{
//echo '<p style="text-align:center; color:#F73A50;">'.' Please wait for getting candidate list to give vote after permission by election commission !'.'</p>';
//
//}        		 
//
// }
 	?>	
</div>

 <script type="text/javascript">
/*window.setTimeout(function() {
  $(".flash").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove();
  });
}, 5000);*/
 </script>	
 			
</div>
			
			
				
	<?php 
include("footer.php");
?>
