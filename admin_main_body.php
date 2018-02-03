<div style="margin-top:70px;" class="container">

<?php
    include 'database_connect/connect.php';
$result_vote_casting = mysql_query("select count(candidate_id) FROM vote");
$row_vote_casting = mysql_fetch_array($result_vote_casting);
$total_vote_casting = $row_vote_casting[0];
$result_voter = mysql_query("select count(public_voter_id) FROM voter_reg where public_approve='Activate' ");
$row_voter= mysql_fetch_array($result_voter);
$total_voter = $row_voter[0];
$result_candidate = mysql_query("select count(can_voter_id) FROM candidate_reg where can_approve='Activate'");
$row_candidate = mysql_fetch_array($result_candidate);
$total_candidate = $row_candidate[0];
$result_voter_pending = mysql_query("select count(public_voter_id) FROM voter_reg where public_approve='Deactivate' ");
$row_voter_pending = mysql_fetch_array($result_voter_pending);
$total_voter_pending = $row_voter_pending[0];

?>
 <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                 
                                    <div class="col-xs-12 ">
                                        <div style="text-align:center;font-size:50px;"><?php echo $total_voter; ?></div>
                                        <div style="text-align:center;" > Total Voter Active</div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                        <div class="col-lg-3 col-md-6">
                        <div style="background-color:#5CB85C;color:#fff;" class="panel">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12 ">
                                        <div style="text-align:center;font-size:50px;"><?php echo $total_vote_casting; ?></div>
                                        <div style="text-align:center;">Total Vote Casting</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div style="background-color:#F0AD4E;color:#fff;" class="panel ">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12 ">
                                        <div style="text-align:center;font-size:50px;"><?php echo $total_candidate; ?></div>
                                        <div style="text-align:center;">Total Candidate</div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div style="background-color:#D9534F;color:#fff;" class="panel ">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12 ">
                                       <div style="text-align:center;font-size:50px;"><?php echo $total_voter_pending; ?></div>
                                        <div style="text-align:center;">Total Voter Pending</div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                
                      
                      
                </div>

                  			<div class="row">
							
							<div class="col-lg-3 col-md-6">
                    		</div>
							
							 <div class="col-lg-3 col-md-6">
                        <div style="color:#fff;" class="panel ">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12 ">
                                         <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#VoterReg"><span class="glyphicon glyphicon-cog"></span> Setting Configuration</button>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
					<div class="col-lg-3 col-md-6">
                        <div style="color:#fff;" class="panel ">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12 ">
                                         <a href="new_primary_data_insert.php" target="_blank" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-save"></span> Primary Data Insert</a>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                   <!--<div class="col-lg-4 col-md-4">
                        <div class="panel ">
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#VoterReg"><span class="glyphicon glyphicon-cog"></span> Setting Configuration</button>
                           
                        </div>          
   
                   </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="panel ">
                           <a href="new_primary_data_insert.php" target="_blank" class="btn btn-info" role="button">Primary Data Insert</a>
                            
                        </div>          
   
                   </div>-->
    						</div>
	<?php
	include("setting_info.php");
	?>	
</div>

                <!-- /.row -->

<!-- info Setting modal-->

<div class="modal fade" id="VoterReg" role="dialog">
    <div class="modal-dialog   modal-md">
   
      <div class="modal-content">

       <div class="modal-header" style="background-color:#31B0D5;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Setting Form</h4>
        </div>
        <div class="modal-body ">

          <form name="" method="post" action="admin.php" autocomplete="off">
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
	<?php 
	$status=array(0=>"Hide",1=>"Show");
	    include 'database_connect/connect.php';
		$sql="Select voter_reg_last_date,voter_reg_last_date_status,candidate_reg_last_date,candidate_reg_last_date_status,start_vote_date,start_vote_date_status,end_vote_date,end_vote_date_status,result_pbulish_date,result_pbulish_date_status,short_summery_status,details_result_status,persmission_to_vote from system_setting where id=1";
	    $result=  mysql_query($sql);
	    while ($data=  mysql_fetch_array($result))
	    {    
?>

        <td>Voter Registration Last Date</td>
        <td><input  name="voter_reg_last_date" type="date" class="form-control"  style="width:170px;" value="<?php echo date($data[0]); ?>" ></td>
       <td>
<select name="voter_reg_last_date_status" class="form-control" style="width:90px;">
 <?php
foreach ($status as $keyvalue => $txtvalue) {
?><option value="<?php echo $keyvalue; ?>" <?php if( $keyvalue==$data['voter_reg_last_date_status'])  echo "selected"; ?> > <?php echo $txtvalue; ?>
</option>	
<?php
}
?>
</select> 


		</td>
      </tr>
	   <tr>
        <td>Candidate Registration Last Date</td>
        <td><input name="candidate_reg_last_date" type="date" class="form-control"  style="width:170px;" value="<?php echo date($data[2]); ?>"></td>
       <td>
<select name="candidate_reg_last_date_status" class="form-control" style="width:90px;">
 <?php
foreach ($status as $keyvalue => $txtvalue) {
?><option value="<?php echo $keyvalue; ?>" <?php if( $keyvalue==$data['candidate_reg_last_date_status'])  echo "selected"; ?> > <?php echo $txtvalue; ?>
</option>	
<?php
}
?>
</select> 
		</td>
    </tr>
	   <tr>
        <td> Voting Start Date</td>
        <td>
		<input name="start_vote_date" type="date" class="form-control"  style="width:170px;" value="<?php echo date($data[4]); ?>">
       <!-- <input  id="entry-day-time" name="entry-day-time" type="time" class="form-control" required  style="width:140px;" >-->
		</td>
     <td>
<select name="start_vote_date_status" class="form-control" style="width:90px;">
 <?php
foreach ($status as $keyvalue => $txtvalue) {
?><option value="<?php echo $keyvalue; ?>" <?php if( $keyvalue==$data['start_vote_date_status']) { echo "selected"; } ?> ><?php echo $txtvalue; ?>
</option>	
<?php
}
?>
</select> 
		</td>
      </tr>
	   <tr>
        <td> Voting End Date</td>
        <td><input  name="end_vote_date"  type="date" class="form-control"  style="width:170px;" value="<?php echo date($data[6]); ?>">
       <!-- <input id="entry-day-time" name="entry-day-time" type="time" class="form-control" required  style="width:140px;" > --> 
	   </td>
     <td>
<select name="end_vote_date_status" class="form-control" style="width:90px;">
 <?php
foreach ($status as $keyvalue => $txtvalue) {
?><option value="<?php echo $keyvalue; ?>" <?php if( $keyvalue==$data['end_vote_date_status'])  echo "selected"; ?> ><?php echo $txtvalue; ?>
</option>	
<?php
}
?>
</select> 
		</td>      </tr>
      <tr>
        <td> Result Publish Date</td>
        <td><input  name="result_pbulish_date" type="date" class="form-control"  style="width:170px;" value="<?php echo date($data[8]); ?>">
       <!-- <input id="entry-day-time" name="entry-day-time" type="time" class="form-control" required  style="width:140px;" >--></td>
     <td>
<select name="result_pbulish_date_status" class="form-control" style="width:90px;">
 <?php
foreach ($status as $keyvalue => $txtvalue) {
?><option value="<?php echo $keyvalue; ?>" <?php if( $keyvalue==$data['result_pbulish_date_status'])  echo "selected"; ?> ><?php echo $txtvalue; ?>
</option>	
<?php
}
?>
</select> 
		</td>		
<!--		<td><input type="checkbox" style="width:40px;" class="form-control" name="result_pbulish_date_status"  value="1"> </td>
-->      </tr>
<tr>
        <td> Short Summery of Process</td>
		<td  style="width:170px;"></td>
     <td>
<select name="short_summery_status" class="form-control" style="width:90px;">
 <?php
foreach ($status as $keyvalue => $txtvalue) {
?><option value="<?php echo $keyvalue; ?>" <?php if( $keyvalue==$data['short_summery_status'])  echo "selected"; ?> ><?php echo $txtvalue; ?>
</option>	
<?php
}
?>
</select> 
		</td>     
		 </tr>
		 <tr>
        <td>Details Result Individualy</td>
		<td  style="width:170px;"></td>
     <td>
<select name="details_result_status" class="form-control" style="width:90px;">
 <?php
foreach ($status as $keyvalue => $txtvalue) {
?><option value="<?php echo $keyvalue; ?>" <?php if( $keyvalue==$data['details_result_status'])  echo "selected"; ?> ><?php echo $txtvalue; ?>
</option>	
<?php
}
?>
</select> 
		</td>     
		 </tr>
		  <tr>
        <td>Permission to Vote</td>
		<td  style="width:170px;"></td>
     <td>
<select name="persmission_to_vote" class="form-control" style="width:90px;">
 <?php
foreach ($status as $keyvalue => $txtvalue) {
?><option value="<?php echo $keyvalue; ?>" <?php if( $keyvalue==$data['persmission_to_vote'])  echo "selected"; ?> ><?php echo $txtvalue; ?>
</option>	
<?php
}
?>
</select> 
		</td>     
		 </tr>
	  <?php } ?>
    </tbody>
  </table>
</div>
        </div>


        <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">
        </div>
 </form>
</div>
</div>
</div>

   
                
 <div class="container">
<?php
include("admin_result_data_table.php");
?>
</div>