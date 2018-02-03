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

                  <div class="col-lg-4 col-md-4">
                        <div class="panel ">
                           
                            <input  style="width:100%;" type="button" class="btn btn-primary" value="Publish Result">		
						</div>			
                   </div>
                   <div class="col-lg-4 col-md-4">
                        <div class="panel ">
                           
                            <input style="width:100%;" type="button" class="btn btn-success" value="Hide Result">
						</div>			
   
                   </div>
                   <div class="col-lg-4 col-md-4">
                        <div class="panel ">
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#VoterReg"><span class="glyphicon glyphicon-cog"></span> Setting Configuration</button>
                           
                        </div>          
   
                   </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="panel ">
                           <a href="new_primary_data_insert.php" target="_blank" class="btn btn-info" role="button">Primary Data Insert</a>
                            
                        </div>          
   
                   </div>
    									</div>
    <h4 style="padding-left:50%;padding-top:5px;padding-bottom:5px;background-color:#F1F1F1;color:#D9534F">Pending Candidate List</h4>               		 
	<?php
	//include("new_data_table_candidate_list.php");
	?>	
</div>

                <!-- /.row -->

<!--THIS IS VOTER REGISTRATION MODAL-->

<div class="modal fade" id="VoterReg" role="dialog">
    <div class="modal-dialog   modal-md">
   
      <div class="modal-content">

       <div class="modal-header" style="background-color:#31B0D5;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Setting Form</h4>
        </div>
        <div class="modal-body ">

          <form name="" method="post" action="index.php" autocomplete="off">
<div class="colorgraph"></div>


<div class="container" style="width:100%;">

  <table class="table responsive">
    <thead>
      <tr>
        <th>Setting</th>
        <th></th>
        <th>Show/Hide</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> Result Publish Date and Time</td>
        <td><input id="entry-day-time" name="entry-day-time" type="date" class="form-control" required style="width:140px;" >
        <input id="entry-day-time" name="entry-day-time" type="time" class="form-control" required  style="width:140px;" ></td>
        <td><input type="checkbox" style="width:40px;" class="form-control" name="genderr" required value="Male"> </td>
      </tr>
      <tr>
        <td> Limit MAX Candidate</td>
        <td><input id="entry-day-time" name="entry-day-time" type="number" class="form-control" required style="width:140px;" ></td>
        <td><input type="checkbox" style="width:40px;" class="form-control" name="genderr" required value="Male"> </td>
      </tr>
      <tr>
        <td>Voter Last Date Registration</td>
        <td><input id="entry-day-time" name="entry-day-time" type="date" class="form-control" required style="width:140px;" ></td>
        <td><input type="checkbox" style="width:40px;" class="form-control" name="genderr" required value="Male"> </td>
      </tr>
      <tr>
        <td>Candidate Last Date Registration</td>
        <td><input id="entry-day-time" name="entry-day-time" type="date" class="form-control" required style="width:140px;" ></td>
        <td><input type="checkbox" style="width:40px;" class="form-control" name="genderr" required value="Male"> </td>
      </tr>
      <tr>
        <td> Start Vote Date and Time</td>
        <td><input id="entry-day-time" name="entry-day-time" type="date" class="form-control" required style="width:140px;" >
        <input id="entry-day-time" name="entry-day-time" type="time" class="form-control" required  style="width:140px;" ></td>
        <td><input type="checkbox" style="width:40px;" class="form-control" name="genderr" required value="Male"> </td>
      </tr>
      <tr>
        <td>End Vote Date and Time</td>
        <td><input id="entry-day-time" name="entry-day-time" type="date" class="form-control" required style="width:140px;" >
        <input id="entry-day-time" name="entry-day-time" type="time" class="form-control" required  style="width:140px;" ></td>
        <td><input type="checkbox" style="width:40px;" class="form-control" name="genderr" required value="Male"> </td>
      </tr>
     <!-- <tr>
        <td> sample</td>
        <td><input id="entry-day-time" name="entry-day-time" type="date" class="form-control" required style="width:140px;" >
        <input id="entry-day-time" name="entry-day-time" type="time" class="form-control" required  style="width:140px;" ></td>
        <td><input type="checkbox" style="width:40px;" class="form-control" name="genderr" required value="Male"> </td>
      </tr>
      <tr>
        <td> sample</td>
        <td><input id="entry-day-time" name="entry-day-time" type="date" class="form-control" required style="width:140px;" >
        <input id="entry-day-time" name="entry-day-time" type="time" class="form-control" required  style="width:140px;" ></td>
        <td><input type="checkbox" style="width:40px;" class="form-control" name="genderr" required value="Male"> </td>
      </tr> -->

    </tbody>
  </table>
</div>
        </div>


        <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
      <input type="submit" name="submitt" id="submitt" value="Submit" class="btn btn-primary">
        </div>
 </form>
</div>
</div>
</div>

   
                
 
                  <?php 

include("admin_menu.php");
?>


