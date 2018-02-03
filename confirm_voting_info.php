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
									<div class="panel-heading"> <h3>&nbsp PROFILE / id: <?php echo $login_session; ?></h3></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body">
<div class="sumbotron" style="float:left;">
  		<form action="" method="post" class="form-horizontal">
 
  
  <div class="form-group">
    <div class="col-md-offset-11 col-md-1">
	<table><tr><td>Confirm public_is_vote_status<input type="checkbox" name="public_is_vote_status" required /></td>
       <td> <input type="hidden" name="eid" value="<?php echo $data[2]?>"></td></tr></table>

      <button type="submit" name="save" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>
</div>

  									</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;font-size:15px;"> &nbsp public_is_vote_status Panel</p> </div>
								</div>
											</div>

											






											<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading"> <h3>&nbsp PROFILE / id: <?php echo $login_session; ?></h3></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
  									 <?php 
include("profile_personal_info_voter.php");
?> 									

  		
  									</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;font-size:15px;"> &nbsp Only for Election Commision</p> </div>
								</div>
											</div>

											


												</div>




</div>
			
