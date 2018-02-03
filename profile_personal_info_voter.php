<table style="border:#CCCCCC solid 1px; text-align:center;" class="display"  width="100%" border="1px" >
    <thead style="font-size:18px; color:#FFFFFF; background:#337AB7;">

</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from voter_reg where public_voter_id='$login_session'";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    
        
       <b>Your Name:</b> <input style="text-align:center;font-size:24px;padding:30px;color:#337AB7;" type="text" name="cid" class="form-control" readonly   value="<?php echo $data[1]?>">
   
    
   
    <?php }?>
    
  
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from voter_reg where public_voter_id='$login_session'";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    
<b>University id:</b> <input style="text-align:center;font-size:24px;padding:30px;color:#337AB7;" type="text" name="cid" class="form-control" readonly   value="<?php echo $data[2]?>">
		 


    
    
   
    <?php }?>
  
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from voter_reg where public_voter_id='$login_session'";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
   <b>Your Varsity Email:</b> <input style="text-align:center;font-size:24px;padding:30px;color:#337AB7;" type="text" name="cid" class="form-control" readonly   value="<?php echo $data[3]?>">
    
    
   
    <?php }?>
   
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from voter_reg where public_voter_id='$login_session'";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
   <b>Contact number:</b> <input style="text-align:center;font-size:24px;padding:30px;color:#337AB7;" type="text" name="cid" class="form-control" readonly   value="<?php echo $data[4]?>">
    
   
    <?php }?>
    		  

	
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from voter_reg where public_voter_id='$login_session'";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
  <b>can_gender:</b> <input style="text-align:center;font-size:24px;padding:30px;color:#337AB7;" type="text" name="cid" class="form-control" readonly   value="<?php echo $data[5]?>">
    
    
   
    <?php }?>
  
    
		 
</table>