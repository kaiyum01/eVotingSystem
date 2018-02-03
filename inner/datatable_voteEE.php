 <form name="" method="post" action="" autocomplete="off">
<table style="border:#CCCCCC solid 1px; text-align:center; margin-top:-30px;" id="example" class="display"  width="100%" border="1px" >
    <thead style="font-size:18px; font-weight:400; color:#FFFFFF; background:#333333;">
<tr>
<td>Candidate Name</td>
<td>Varsity ID</td>
<td>Varsity Email</td>
<td>Gender</td
><td>Vote</td>
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
		<td style="font-weight:bold; color:#fff;" class="bg-primary">Vote &nbsp;&nbsp;&nbsp;<input type="radio" name="vote" required value="<?php echo $data[3]?>"></td>
        
       
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
  
          
 
            $passwordd=$_POST['passwordd'];
           
            
  
    $fetch=mysql_query("select passwordd from voter_reg where passwordd='$passwordd'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {

  $vote=$_POST['vote'];

    $sql="Update voter_reg set vote='$vote' where passwordd='$passwordd' ";
$query=  mysql_query($sql);
if($query){
   echo "your vote given success";
}  else {
echo "!!!Sorry Your data is not uploaded";    
}
    }
  
  else{
           echo "sorry";
         }
         } 
         
      
?>