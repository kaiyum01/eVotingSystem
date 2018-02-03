<table style="border:#CCCCCC solid 1px; text-align:center;" id="example" class="display"  width="100%" border="1px" >
    <thead style="font-size:18px; font-weight:400; color:#FFFFFF; background:#669933;">
<tr>

<td>1 Reference ID</td>
<td>2 Reference ID</td>
<td>vote Symbol / Marka</td>



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
        
        <td style="font-weight:normal; font-family:Verdana; padding:20px;"><?php echo $data[3]?></td>
        <td><?php echo $data[4]?></td>
		 <td><?php echo $data[7]?></td>


    </tr>
    
    
   
    <?php }?>
    
    
</table>