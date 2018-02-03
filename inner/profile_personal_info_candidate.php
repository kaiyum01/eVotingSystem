



<?php 
include("database_connect/connect.php");
$id=$_GET['sid'];
$sqla="Select * from candidate_reg where varsityID='$id'";
$result=  mysql_query($sqla);
while ($data=  mysql_fetch_array($result)){
?>



      <b>Candidate Name:</b> <input style="text-align:center;font-size:24px;padding:30px;color:#337AB7;" type="text" name="cid" class="form-control" readonly   value="<?php echo $data[1]?>">
    
      <b>Candidate Varsity ID:</b> <input style="text-align:center;font-size:24px;padding:30px;color:#337AB7;" type="text" name="fullname" class="form-control" readonly  value="<?php echo $data[2]?>">
   
     <b>Candidate Varsity Email:</b> <input style="text-align:center;font-size:24px;padding:30px;color:#337AB7;" type="text" name="varsityID" class="form-control" readonly value="<?php echo $data[5]?>">
    
      <b>Candidate Gender:</b> <input style="text-align:center;font-size:24px;padding:30px;color:#337AB7;" type="text" name="count_vote" class="form-control"  readonly value="<?php echo $data[8]?>">
   
        
    


<?php }?> 




















