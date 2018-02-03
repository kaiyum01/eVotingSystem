<?php
if(isset($_POST['save'])){
include("database_connect/connect.php");
$id=$_GET['sid'];
$getvoter=$_POST['voter_id'];
$sql="Insert into vote(get_vote_varsityID,voter_id)values('$id','$getvoter')";
$query=  mysql_query($sql);
if($query){
    echo '<div class="alert alert-success">'."<strong>"."Success ! Your Vote given sccessfully !".'<a class="btn-warning" style="margin-left:100px;padding:10px;" href="result.php">'."Please Click to see Result"."</a>"."</strong>"."</div>";
}  else {
echo '<div class="alert alert-danger">'."<strong>"."Sorry! You have been already given vote !"."</strong>"."</div>";    
}
}
?>



<?php
if(isset($_POST['save'])){
include("database_connect/connect.php");
$vote=$_POST['vote'];

$sql="Update  voter_reg set vote='$vote' where varsityIDD='$login_session'";
$query=  mysql_query($sql);
if($query){
  //echo '<p class="bg-success">'."<b>"."Your record have been Updated"."</b>"."</p>";
}  else {
//echo '<p class="bg-danger">'."<b>"."Sorry! Your data is not Updated"."</b>"."</p>"; 
}
}
?>

<?php 
include("database_connect/connect.php");
$id=$_GET['sid'];
$sqla="Select * from candidate_reg where varsityID='$id'";
$result=mysql_query($sqla);
while ($data=mysql_fetch_array($result)){
?>


<div class="container">


<div class="row">


	<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading"> <h3>&nbsp Candidate information</h3></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
 
 <?php 
include("profile_personal_info_candidate.php");
?> 									

  									</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;"> &nbsp Cadidate Information Panel</p> </div>
								</div>
											</div>

											
<div class="col-md-4">
								<div class="panel panel-danger">
									<div class="panel-heading"> <h3>&nbsp Give Vote !</h3></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body">
<div class="sumbotron" style="float:left;">
<?php echo $data[2]?>
<form action="" method="post" class="form-horizontal">
 
  
	<table><tr><td style="font-size:20px;color:#333333;">Confirm vote <input id="checkbox" type="checkbox" name="vote" value="Yes" required /></td>
	<input type="hidden" name="voter_id" value= "<?php echo $login_session ?>" />
        <input type="hidden" name="eid" value="<?php echo $data[2]?>">

      <td style="padding-left:40px;"><button type="submit" name="save" class="btn btn-primary btn-lg">Vote</button></td></tr></table>
 
</form>
</div>

  									</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;font-size:15px;"> &nbsp Vote Panel</p> </div>
								</div>
											</div>
										
										


											<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading"> <h3>&nbsp Your personal information</h3></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
  									 <?php 
include("profile_personal_info_voter.php");
?> 									

  		
  									</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;font-size:15px;"> &nbsp Only for Voter Information</p> </div>
								</div>
											</div>

											


												</div>




</div>
			



	

											

<?php }?> 
<style>
input[type="checkbox"]{
  width: 20px; /*Desired width*/
  height: 20px; /*Desired height*/
}
</style>
  