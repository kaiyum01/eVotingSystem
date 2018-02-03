<table style="border:#CCCCCC solid 1px; text-align:center;" id="example" class="display"  width="100%" border="1px" >
    <thead style="font-size:18px; font-weight:400; color:#FFFFFF; background:#333333;">
<tr>

<td>Varsity id</td>
<td>Varsity Email</td>
<td>Mobile Number</td>
<td>Update</td>



</tr>
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg where admin_voter_id='$login_session'";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr class="bg-warning">
        
        <td style="font-weight:bold; font-family:Verdana;"><?php echo $data[2]?></td>
        <td><?php echo $data[5]?></td>
		 <td><?php echo $data[7]?></td>

        <td style="padding:10px;"><?php echo '<a class="btn btn-success" href="update.php?sid='.$data[0].'">Update</a>';?></td>
        
        
    </tr>
    
    
   
    <?php }?>
    
    
</table>