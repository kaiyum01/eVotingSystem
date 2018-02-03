<?php
//session_start();
?>

<?php 
include("head.php");
?>
    <?php 
include("admin_ec_top_bar_menu.php");
?>
    


<div style="margin-top:70px;" class="container">


 <!-- /.row -->

                <div class="row">
                    <div class="col-lg-2 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                 
                                    <div class="col-xs-12 ">
                                        <div style="text-align:center;font-size:50px;">26</div>
                                        <div style="text-align:center;" > Vote Casting</div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                        <div class="col-lg-2 col-md-6">
                        <div style="background-color:#5CB85C;color:#fff;" class="panel">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12 ">
                                        <div style="text-align:center;font-size:50px;">26</div>
                                        <div style="text-align:center;">Total Candidate</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div style="background-color:#F0AD4E;color:#fff;" class="panel ">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12 ">
                                        <div style="text-align:center;font-size:50px;">26</div>
                                        <div style="text-align:center;">Total Voter</div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div style="background-color:#D9534F;color:#fff;" class="panel ">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12 ">
                                       <div style="text-align:center;font-size:50px;">26</div>
                                        <div style="text-align:center;">Panding Vote</div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                
                      <div class="col-lg-2 col-md-6">
                        <div style="background-color:#7CB47C;color:#fff;" class="panel ">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12">
                                        <div style="text-align:center;font-size:50px;">26</div>
                                        <div style="text-align:center;">1st Winer Vote</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                      <div class="col-lg-2 col-md-6">
                        <div style="background-color:#8FC58F;color:#fff;" class="panel ">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12">
                                        <div style="text-align:center;font-size:50px;">26</div>
                                        <div style="text-align:center;">2nd Winer Vote</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                  			<div class="row">

                  <div class="col-lg-6 col-md-6">
                        <div class="panel ">
                           
                            <input  style="width:100%;" type="button" class="btn btn-primary" value="Publish Result">		
						</div>			
                   </div>
                   <div class="col-lg-6 col-md-6">
                        <div class="panel ">
                           
                            <input style="width:100%;" type="button" class="btn btn-success" value="Hide Result">
						</div>			
   
                   </div>
    									</div>
    <h4 style="text-align:center;padding-top:5px;padding-bottom:5px;background-color:#F1F1F1;color:#D9534F">Pending Voter List</h4>               		 
	<?php
	include("new_data_table_voter_list.php");
	?>	
</div>

                <!-- /.row -->


                

                  <?php 

include("admin_menu.php");
?>

</div>
   

<!-- Footer section-->

    <?php 
include("footer.php");
?>
        
