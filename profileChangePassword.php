<table style="border:#CCCCCC solid 1px; text-align:center;" id="example" class="display"  width="100%" border="1px" >
    <thead style="font-size:18px; font-weight:400; color:#FFFFFF; background:#333333;">
<tr>


</tr>
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg where admin_voter_id=$login_session";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr class="bg-info">

        <td style="padding:20px;"><?php echo '<a class="btn btn-primary" href="update.php?sid='.$data[0].'">Change your admin_password</a>';?></td>
        
        
    </tr>
    
    
   
    <?php }?>
    
    
</table>