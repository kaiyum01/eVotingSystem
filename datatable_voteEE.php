 <form name="" method="post" action="" autocomplete="off">
<table style="border:#CCCCCC solid 1px; text-align:center; margin-top:-30px;" id="example" class="display"  width="100%" border="1px" >
    <thead style="font-size:18px; font-weight:400; color:#FFFFFF; background:#333333;">
<tr>
<td>Candidate Name</td>
<td>Varsity id</td>
<td>Varsity Email</td>
<td>can_gender</td
><td>public_is_vote_status</td>
<td>Confirm</td>


</tr>
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr class="bg-warning">
        
        <td style="font-weight:bold; font-family:Verdana;"><?php echo $data[1]?></td>
        <td><?php echo $data[2]?></td>
        <td><?php echo $data[5]?></td>
        <td><?php echo $data[8]?></td>
		<td style="font-weight:bold; color:#fff;" class="bg-primary">public_is_vote_status &nbsp;&nbsp;&nbsp;<input type="radio" name="public_is_vote_status" required value="<?php echo $data[3]?>"></td>
        
       
             <td style="padding:10px;"> <input type="submit" name="submitt" id="submitt" value="OK" class="btn btn-primary"></td>

        <!--<td style="padding:10px;"><?php echo '<a class="btn btn-success" href="update.php?sid='.$data[0].'">OK</a>';?></td>-->
        
        
    </tr>
    
    
    
    <?php }?>
    
    
</table>
</form>

<?php
   
      if(isset($_POST['submitt']))
       {
            mysql_connect('localhost','root','') or die(mysql_error());
            mysql_select_db('e_voting') or die(mysql_error());
  
          
 
            $public_password=$_POST['public_password'];
           
            
  
    $fetch=mysql_query("select public_password from voter_reg where public_password='$public_password'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {

  $public_is_vote_status=$_POST['public_is_vote_status'];

    $sql="Update voter_reg set public_is_vote_status='$public_is_vote_status' where public_password='$public_password' ";
$query=  mysql_query($sql);
if($query){
   echo "your public_is_vote_status given success";
}  else {
echo "!!!Sorry Your data is not uploaded";    
}
    }
  
  else{
           echo "sorry";
         }
         } 
         
      
?>