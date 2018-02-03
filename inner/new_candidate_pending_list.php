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
    <h4 style="text-align:center;padding-top:5px;padding-bottom:5px;background-color:#F1F1F1;color:#D9534F">Pending Candidate List</h4>               		 
	<?php
	include("new_data_table_candidate_list.php");
	?>	
</div>

                <!-- /.row -->


                
 <div class="row">
                    <div class="col-lg-6">
                        <h2>Bordered Table</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Page</th>
                                        <th>Visits</th>
                                        <th>% New Visits</th>
                                        <th>Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>/index.html</td>
                                        <td>1265</td>
                                        <td>32.3%</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr>
                                        <td>/about.html</td>
                                        <td>261</td>
                                        <td>33.3%</td>
                                        <td>$234.12</td>
                                    </tr>
                                    <tr>
                                        <td>/sales.html</td>
                                        <td>665</td>
                                        <td>21.3%</td>
                                        <td>$16.34</td>
                                    </tr>
                                    <tr>
                                        <td>/blog.html</td>
                                        <td>9516</td>
                                        <td>89.3%</td>
                                        <td>$1644.43</td>
                                    </tr>
                                    <tr>
                                        <td>/404.html</td>
                                        <td>23</td>
                                        <td>34.3%</td>
                                        <td>$23.52</td>
                                    </tr>
                                    <tr>
                                        <td>/services.html</td>
                                        <td>421</td>
                                        <td>60.3%</td>
                                        <td>$724.32</td>
                                    </tr>
                                    <tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
                                        <td>$126.34</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Bordered with Striped Rows</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Page</th>
                                        <th>Visits</th>
                                        <th>% New Visits</th>
                                        <th>Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>/index.html</td>
                                        <td>1265</td>
                                        <td>32.3%</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr>
                                        <td>/about.html</td>
                                        <td>261</td>
                                        <td>33.3%</td>
                                        <td>$234.12</td>
                                    </tr>
                                    <tr>
                                        <td>/sales.html</td>
                                        <td>665</td>
                                        <td>21.3%</td>
                                        <td>$16.34</td>
                                    </tr>
                                    <tr>
                                        <td>/blog.html</td>
                                        <td>9516</td>
                                        <td>89.3%</td>
                                        <td>$1644.43</td>
                                    </tr>
                                    <tr>
                                        <td>/404.html</td>
                                        <td>23</td>
                                        <td>34.3%</td>
                                        <td>$23.52</td>
                                    </tr>
                                    <tr>
                                        <td>/services.html</td>
                                        <td>421</td>
                                        <td>60.3%</td>
                                        <td>$724.32</td>
                                    </tr>
                                    <tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
                                        <td>$126.34</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
        
