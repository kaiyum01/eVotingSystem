<!DOCTYPE html>
<html>
<head><title>Profile Voter</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"  href="css/bootstrap.min.css">
<link rel="stylesheet"  href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.effect.js"></script>



<style>
body{
background-image: url(img/transp_bg.png);

}
.colorgraph {
    height: 3px;
    border-top: 0;
    background: #c4e17f;
    border-radius: 5px;
    margin-bottom: 15px;
    background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
.center-cropped {
  width: 140px;
  height: 140px;
  background-position: center center;
  background-repeat: no-repeat;
}
img{
	border:#fff 6px solid;
}
.round{
	height: 140px;
	width: 140px;
	border-radius: 100%;
	background-color: #fff;
	border:#fff 6px solid;
	font-size: 50px;
	padding: 25px;
	color: #fff;
  text-align: center;
}
.heading_block_voter{
  margin-bottom:-15px;color:#222222;font-family:verdana;
}
.block_voter{
  color:gray;padding-left:15px;font-size:14px;background-color:#fff;font-family:verdana;
  padding: 15px;font-weight: bold; border-left: 10px solid #C5C4C4;margin-bottom: 10px;
}


</style>


</head>
 
<body>
			    <?php 
include("admin_top_bar_menu_Vot.php");
?>	
         <div  class="container">
                           
            	<div class="row">
                	<div style="background-color:#215989;padding-top:60px;padding-bottom:20px;" class="col-md-8 col-md-offset-2">
                			       <div class="row">
                    <div class="col-md-12"> 
                      <div class="col-md-6">
					  
					  
					     <?php 
    include 'database_connect/connect.php';
    $sql="Select * from voter_reg where public_voter_id='$login_session'";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?> 
                      <h3 style="color:#fff;font-family:verdana;">Voter Profile</h3>
					  <!-- <h3 style="color:#fff;font-family:verdana;"><input type="file" name="" id="" value="Change Your Picture"></h3>-->
                      </div>
                     <div class="col-md-6">
                      <a href="new_voter_profile_update.php?data=<?php echo $data['vid']; ?>" class="btn btn-success" style="float:right;margin-top:12px;margin-bottom:5px;margin-right:48px;" role="button">Update</a>
<!--                      <input style="float:right;margin-top:12px;margin-bottom:5px;margin-right:5px;" type="button" class="btn btn-danger" value="Deactive">
-->                      </div>
                      </div>
                      </div>
  
                    	<div class="colorgraph"></div>
<!--						<div style="text-align:center;margin-bottom:10px;" class="col-md-12">
						<span class="btn btn-primary btn-file">
						<form action="" method="post">
    Change your picture <input style="text-align:center;padding:10px;width:500px;" type="file" name="" id="">
	<input type="submit" name="" value="Submit" class="btn-primary btn-lg">
	</form>
</span>
						</div>-->
                        	<div style="text-align:center;" class="col-md-4">
                            	<center><img class="img-circle img-responsive center-cropped" src="<?php echo 'public_images/'.$data[4]; ?>"></center>
                                <h4 style="text-align:center;color:#fff;font-family:verdana;font-family:verdana;">Your Picture</h4>
								
                          </div>
                          <div style="text-align:center;" class="col-md-4">
                              <center><div style="font-family:verdana;background-color:#92AE4F;" class="round"><?php echo $data[11]; ?></div></center>
                                <h4 style="text-align:center;color:#fff;font-family:verdana;">Vote Status</h4>
                          </div>
						  
						  
					     <?php 
    include 'database_connect/connect.php';
    $sql_vote="Select voter_id,candidate_id from vote where voter_id='$login_session'";
    $result_vote=  mysql_query($sql_vote);
    while ($data_vote=  mysql_fetch_array($result_vote))
    {    
    ?> 
                         <!-- <div style="text-align:center;" class="col-md-4">
                              <center><div style="font-family:verdana;background-color:#DA6459; padding:0px;" class="round"><h5 style="margin-top:55px;"><? //php echo $data_vote[1]; ?></h5></div></center>
                               <h4 style="text-align:center;color:#fff;font-family:verdana;">Given Vote</h4>

                          </div> -->
<?php } ?>


                          <div style="background-color:#376C9A;padding:20px;" class="col-md-8 col-md-offset-2">
                   <!--    <label><div class="heading_block_voter">User Name:</div></label>
                                 <div class="block_voter"><?php //echo $data[1]; ?></div>-->
                       <label><div class="heading_block_voter">Full Name:</div></label>
                                 <div class="block_voter"><?php echo $data[2]; ?></div>
                       <label><div class="heading_block_voter">Voter ID Card Number:</div></label>
                                  <div class="block_voter"><?php echo $data[3]; ?></div>
                       <label><div class="heading_block_voter">Email:</label>
                                 <div class="block_voter"><?php echo $data[5]; ?></div>
                       <label><div class="heading_block_voter">Contact:</div></label>
                                  <div class="block_voter"><?php echo $data[6]; ?></div>
                       <label><div class="heading_block_voter">Gender:</div></label>
                                  <div class="block_voter"><?php echo $data[7]; ?></div>
                       <label><div class="heading_block_voter">Date of Birth:</div></label>
                                  <div class="block_voter"><?php echo date('d-m-Y', strtotime($data[8])); ?></div>
                       
                        <label><h4 style="margin-bottom:-15px;color:#fff;font-family:verdana;">Authority Law:</h4></label>
                                  <p style= "padding:15px;font-size:15px;background-color:#215989;font-family:verdana;color:#222222;border-left: 10px solid #0E416C;margin-bottom:10px;">I promised that to give all students our notice and news by mobile phone and facebook</p>
                          </div>
						  
   <?php }?>                       
                        </div>
                		</div>
            	</div>
            
         </div>
<!-- Footer section-->

  <?php 
include("footer.php");
?>
      

</body>
</html>
