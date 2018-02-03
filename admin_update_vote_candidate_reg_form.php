<?php 
include("head.php");
?>
  	<?php 
include("admin_ec_top_bar_menu.php");
?>
	

	<?php 
include("admin_head_description.php");
?>
  	  											

	<?php 
include("admin_main_body.php");
?>
  	

<div class="container">

<div class="row">
                    <div class="col-lg-12">
                       
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Candidate public_is_vote_status update
                            </li>
                        </ol>
                    </div>
                </div>
    </div>
</div>

<div class="container">


<?php
include("static_admin_candidate_result.php");
?>



<?php
if(isset($_POST['save'])){
include("database_connect/connect.php");
$cid=$_POST['cid'];
$can_fullname=$_POST['can_fullname'];
$admin_voter_id=$_POST['admin_voter_id'];
$can_count_vote=$_POST['can_count_vote'];

$sql="Update  candidate_reg set cid='$cid',can_fullname='$can_fullname',admin_voter_id='$admin_voter_id',can_count_vote='$can_count_vote' where can_fullname='$can_fullname'";
$query=  mysql_query($sql);
if($query){

echo '<div style="margin-top:80px;" class="alert alert-success">'."<strong>"."Your record have been Updated !"."</strong>"."</div>";    
}  else {
echo '<div style="margin-top:80px;" class="alert alert-danger">'."<strong>"."Sorry ! your record don't have been Updated !"."</strong>"."</div>";    
}
}
?>
<?php 
include("database_connect/connect.php");
$id=$_GET['sid'];
$sqla="Select * from candidate_reg where cid=$id";
$result=  mysql_query($sqla);
while ($data=  mysql_fetch_array($result)){
?>


<form action="" method="post" class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-md-offset-2 col-sm-2 control-label">Serial id:</label>
    <div class="col-sm-6">
      <input type="text" name="cid" class="form-control" readonly   value="<?php echo $data[0]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">Candidate Name:</label>
    <div class="col-sm-6">
      <input type="text" name="can_fullname" class="form-control" readonly  value="<?php echo $data[1]?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">University id:</label>
    <div class="col-sm-6">
      <input type="text" name="admin_voter_id" class="form-control" readonly value="<?php echo $data[2]?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">Total public_is_vote_status:</label>
    <div class="col-sm-6">
      <input type="text" name="can_count_vote" class="form-control"  required value="<?php echo $data[10]?>">
    </div>
  </div>
 
  
  <div  class="form-group">
   <div class="col-md-offset-4 col-md-1">
        <input type="hidden" name="eid" value="<?php echo $data[0]?>">

     <button type="submit" name="save" class="btn btn-primary">Save</button></td>
    </div>
  </div>

</form>


<?php }?> 



           
     


</div>




			
					
<!-- Footer section-->

  <?php 
include("footer.php");
?>
      

          