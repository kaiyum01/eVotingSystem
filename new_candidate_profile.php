<!DOCTYPE html>
<html>
<head><title>Profile Candidate</title>
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
	border:#C5C4C4 6px solid;
}
.round{
	height: 140px;
	width: 140px;
	border-radius: 100%;
	background-color: #fff;
	border:#C5C4C4 6px solid;
	font-size: 50px;
	padding: 25px;
	color: #669AE1;
}
.heading_block{
	margin-bottom:-12px;color:#FCECEC;font-family:verdana;
}
.block{

	color:gray;padding:13px;font-size:15px;background-color:#fff;font-family:verdana;border-left: 10px solid #C5C4C4;margin-bottom: 10px;
}

</style>

</head>
 
<body>
										
			    <?php 
include("admin_top_bar_menu_Can.php");
?>	

         <div class="container">

            	<div class="row">
                	<div style="background-color:#562D72;padding-top:60px;padding-bottom:20px;" class="col-md-8 col-md-offset-2">
                	<div class="row">
                		<div class="col-md-12">	
                			<div class="col-md-6">
							
								<?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg where can_voter_id='$login_session'";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
           
                    	<h3 style="color:#fff;font-family:verdana;">Candidate Profile</h3>
                    	</div>
                    	<div class="col-md-6">
                    	 <a href="new_candidate_profile_update.php?data=<?php echo $data['cid']; ?>" class="btn btn-success" style="float:right;margin-top:12px;margin-bottom:5px;margin-right:48px;" role="button">Update</a>
<!--                    	<input style="float:right;margin-top:12px;margin-bottom:5px;margin-right:5px;" type="button" class="btn btn-danger" value="Deactive">
-->                    	</div>
                    	</div>
                    	</div>
                    	<div class="colorgraph"></div>
						
         	
                        	<div style="text-align:center;" class="col-md-4">
                            	<center><img class="img-circle img-responsive center-cropped" src="<?php echo 'candidate_images/'.$data[4]; ?>"></center>
                                <h4 style="text-align:center;color:#fff;font-family:verdana;font-family:verdana;">Your Picture</h4>

                            	<center><img class="img-circle img-responsive center-cropped" src="<?php echo 'candidate_symbol/'.$data[12]; ?>"></center>
                                <h4 style="text-align:center;color:#fff;font-family:verdana;">Voting Symbol</h4>

                               <!-- <center><div style="font-family:verdana;" class="round">52</div></center>
                                <h4 style="text-align:center;color:#fff;font-family:verdana;">My Total Vote</h4>-->
                            </div>
                     
                            
                            	
                            <div style="background-color:#703A94;padding:20px;" class="col-md-6 col-md-offset-1">
                <!--      <label><div class="heading_block">User Name:</div></label>
                                  <div class="block"><?php //echo $data[1];?></div>-->
                                  <label><div class="heading_block">Full Name:</div></label>
                                  <div class="block"><?php echo $data[2];?></div>
                       <label><div class="heading_block">University ID:</div></label>
                                  <div class="block"><?php echo $data[3];?></div>
                       <label><div class="heading_block">University Email:</div></label>
                                 <div class="block"><?php echo $data[7];?></div>
                       <label><div class="heading_block">Contact:</div></label>
                                  <div class="block"><?php echo $data[9];?></div>
                       <label><div class="heading_block">Gender:</div></label>
                                  <div class="block"><?php echo $data[10];?></div>
                       <label><div class="heading_block">Date of Birth:</div></label>
                                  <div class="block"><?php echo  date('d-m-Y', strtotime($data[11]));?></div>
                       <label><div class="heading_block">Reference 1:</div></label>
                                  <div class="block"><?php echo $data[5];?></div>
                        <label><div class="heading_block">Reference 2:</div></label>
                                  <div class="block"><?php echo $data[6];?></div>
                        <label><h4 style="margin-bottom:-15px;color:#222222;font-family:verdana;">Commitment:</h4></label>
                                  <p style= "padding:15px;font-size:15px;background-color:#DA6459;font-family:verdana;border-left:15px #AE483F solid;">I promised that to give all students our notice and news by mobile phone and facebook</p>
<?php }?>
                         
                        
                        
                        
                    					</div>
                
                	
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
