



<?php 
include("database_connect/connect.php");
$id=$_GET['sid'];
$sqla="Select * from candidate_reg where admin_voter_id='$id'";
$result=  mysql_query($sqla);
while ($data=  mysql_fetch_array($result)){
?>



      <b>Candidate Name:</b> <input style="text-align:center;font-size:24px;padding:30px;color:#337AB7;" type="text" name="cid" class="form-control" readonly   value="<?php echo $data[1]?>">
    
      <b>Candidate Varsity id:</b> <input style="text-align:center;font-size:24px;padding:30px;color:#337AB7;" type="text" name="can_fullname" class="form-control" readonly  value="<?php echo $data[2]?>">
   
     <b>Candidate Varsity Email:</b> <input style="text-align:center;font-size:24px;padding:30px;color:#337AB7;" type="text" name="admin_voter_id" class="form-control" readonly value="<?php echo $data[5]?>">
    
      <b>Candidate can_gender:</b> <input style="text-align:center;font-size:24px;padding:30px;color:#337AB7;" type="text" name="can_count_vote" class="form-control"  readonly value="<?php echo $data[8]?>">
   
        
    


<?php }?> 




















