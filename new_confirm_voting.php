
<?php 
include("database_connect/connect.php");
$id=$_GET['sid'];
$sql_candidate="Select * from candidate_reg where can_voter_id='$id'";
$result=mysql_query($sql_candidate);
while ($data=mysql_fetch_array($result))
{

?>


<div class="container">


<div class="row">


	<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading"> <h3 style="text-align:center;"><?php echo $data[2]; ?></h3></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
 

<img class="img-thumbnail  img-responsive" style="width:120px; height:auto;" src="<?php echo 'candidate_images/'.$data[4]; ?>">;
								

  									</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;"> &nbsp Cadidate Picture</p> </div>
								</div>
											</div>

											
<div class="col-md-4">
								<div class="panel panel-success">
									<div class="panel-heading"> <h3>&nbsp Give Vote !</h3></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body">
<div class="sumbotron" style="float:left;">
<?php //echo $data[2]; ?>
<form action="" method="post" class="form-horizontal">
 
  
	<table><tr><td style="font-size:20px;color:#333333; margin-top:-5px;">Confirm vote &nbsp <input id="checkbox" type="checkbox" name="public_is_vote_status" value="Yes" required /></td>
	<input type="hidden" name="voter_id" value= "<?php echo $login_session; ?>" />
        <input type="hidden" name="eid" value="<?php echo $data[3]; ?>">

      <td style="padding-left:40px;"><button type="submit" name="save" class="btn btn-primary btn-lg">Vote</button></td></tr></table>
 
</form>
</div>

  									</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;font-size:15px;"> &nbsp Vote Confirm</p> </div>
								</div>
											</div>
										
										


											<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading"> <h3 style="text-align:center;"><?php echo $data[13]; ?></h3></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
  									<img class="img-thumbnail  img-responsive" style="width:120px; height:auto;" src="<?php echo 'candidate_symbol/'.$data[12]; ?>">;


  		
  									</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;font-size:15px;"> &nbsp Candidate Symbol</p> </div>
								</div>
											</div>

											


												</div>




</div>
			



	

											

<?php }?> 