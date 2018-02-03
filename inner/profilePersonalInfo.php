<table style="border:#CCCCCC solid 1px; text-align:center;" id="example" class="display"  width="100%" border="1px" >
    <thead style="font-size:18px; color:#FFFFFF; background:#3362B7;">
<tr>

<td>Your Name</td>





</tr>
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg where varsityID='$login_session'";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr >
        
        <td style="font-family:Verdana; padding:10px; font-size:20px; color:#fff; background:#407AB7;"><?php echo $data[1]?></td>
   


    </tr>
    
    
   
    <?php }?>
    
    		  <td style="padding:10px;"><?php echo '<a class="btn btn-success" href="update.php?sid='.$data[0].'">Update</a>';?></td>

	<tr>

<td style="background:#B84442; color:#fff; font-size:18px;">Gender</td>





</tr>
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg where varsityID='$login_session'";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr class="bg-success">
        
        <td style="font-family:Verdana; padding:10px; font-size:20px; color:#fff;; background:#B85042;"><?php echo $data[8]?></td>
   
		 


    </tr>
    
    
   
    <?php }?>
    
		  <td style="padding:10px;"><?php echo '<a class="btn btn-success" href="update.php?sid='.$data[0].'">Update</a>';?></td>
</table>