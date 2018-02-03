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
<?php
if(isset($_POST['save']))
{
	include("database_connect/connect.php");
	$id=$_GET['sid'];
	$getvoter=$_POST['voter_id'];
	$sql="Insert into vote(candidate_id,voter_id)values('$id','$getvoter')";
	$query=  mysql_query($sql);
	if($query)
	{
		echo '<div class="alert alert-success">'."<strong>"."Success ! Your Vote given sccessfully !"."</strong>"."</div>";
		//echo '<div class="alert alert-success">'."<strong>"."Success ! Your Vote given sccessfully !".'<a class="btn-warning"style="margin-left:100px;padding:10px;"href="result.php">'."Please Click to see Result"."</a>"."</strong>"."</div>";
	} 
	 else 
	{
		echo '<div class="alert alert-danger">'."<strong>"."Sorry! You have been already given vote !"."</strong>"."</div>";    
	}
}
?>
</div>


<?php
if(isset($_POST['save']))
{
	include("database_connect/connect.php");
	$vote=$_POST['public_is_vote_status'];
	$sql_vote_status="Update  voter_reg set public_is_vote_status='$vote' where public_voter_id='$login_session'";
	$query=  mysql_query($sql_vote_status);
	if($query)
	{
	  //echo '<p class="bg-success">'."<b>"."Your record have been Updated"."</b>"."</p>";
	}  
	else 
	{
	//echo '<p class="bg-danger">'."<b>"."Sorry! Your data is not Updated"."</b>"."</p>"; 
	}
}
?>
 <div class="container"> 	  											
<div class="jumbotron">
	<?php
	
	include("database_connect/connect.php");
$sql_voter="Select * from voter_reg where public_voter_id='$login_session'";
$result=mysql_query($sql_voter);
while ($data=mysql_fetch_array($result))
{

if($data[11]=='Yes')
{
echo '<p style="text-align:center; color:#F73A50;">'.' You have given vote Successfull  !'.'</p>';
}
else 
{
echo '<h4 style="text-align:center;padding-top:5px;padding-bottom:5px;background-color:#0D9B49;color:#ffffff;">'.'Congratulation !You are valid voter '.'</h4>';
	include("new_confirm_voting.php");
}        		 

 //echo $data[3]; 
 //echo $data[2]; 
 }
 	?>	
</div>

</div>
<style>
input[type="checkbox"]{
  width: 20px; /*Desired width*/
  height: 20px; /*Desired height*/
}
</style>
  	<?php 
include("footer.php");
?>
