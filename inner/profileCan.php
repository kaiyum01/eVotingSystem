<?php
include("sessionCan.php");
?>
<?php 
include("head.php");
?>
  	<?php 
include("admin_top_bar_menu_Can.php");
?>
	<?php 
include("head_description.php");
?>


		
                <div class="container">


<div class="row">
											<div class="col-md-3">
								<div class="panel panel-primary">
									<div class="panel-heading"> <h3>&nbsp PROFILE / ID: <?php echo $login_session; ?></h3></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
  									 <div class="image-responsive thumbnail"><img src="img/favicon.jpg" /></div>
  									</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;font-size:15px;"> &nbsp Candidate Picture</p> </div>
								</div>
											</div>

											




											<div class="col-md-4">
								<div class="panel panel-info">
									<div class="panel-heading"> <h3>&nbsp Personal information</h3></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
 
 <?php 
include("profilePersonalInfo.php");
?> 									

  									</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;">  <?php include("profileChangePassword.php");?> </p> </div>
								</div>
											</div>







											<div class="col-md-5">
								<div class="panel panel-success">
									<div class="panel-heading"> <h3>&nbsp General information</h3></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
  									 

<?php 
include("profileGeneralInfo.php");
?>




  									</div><!--</a>-->
  										
								</div>
								
								<div class="panel panel-danger">
									<div class="panel-heading"> <h3>&nbsp Election information</h3></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
  									 

<?php 
include("profileElectionInfo.php");
?>




  									</div><!--</a>-->
  										
								</div>
											</div>
											</div>


												</div>








</div>
			















	<?php 
include("footer.php");
?>
  		