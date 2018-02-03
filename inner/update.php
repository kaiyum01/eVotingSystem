<?php
include("sessionVot.php");
?>
<?php 
include("head.php");
?>

  	<?php 
include("admin_top_bar_menu_Vot.php");
?>
	

	<?php 
include("head_description.php");
?>

<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                             Course schedule <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Course schedule
                            </li>
                        </ol>
                    </div>
                </div>
    </div>

<a style="margin-bottom:20px;" class="btn btn-primary" href="course_schedule_reg_form.php" role="button">Add new course</a>

<?php
if(isset($_POST['submit']))
       {
            mysql_connect('localhost','root','') or die(mysql_error());
            mysql_select_db('e_voting') or die(mysql_error());
  
            $fullname=$_POST['fullname'];
            $varsityID=$_POST['varsityID'];
            $referID=$_POST['referID'];
           
           
$sql="Update  candidate_reg set fullname='$fullname',varsityID='$varsityID',referID='$referID' where fullname='$fullname'";
$query=  mysql_query($sql);
if($query){
  echo '<p class="bg-success">'."<b>"."Your record have been Updated"."</b>"."</p>";
}  else {
echo '<p class="bg-danger">'."<b>"."Sorry! Your data is not Updated"."</b>"."</p>"; 
}
}
?>
<?php 
include("database_connect/connect.php");
$id=$_GET['sid'];
$sqla="Select * from candidate_reg where fullname=$id";
$result=mysql_query($sqla);
while ($data=mysql_fetch_array($result)){
?>

<?php echo $data[1]?>"
<?php echo $data[2]?>"
<?php echo $data[3]?>"
<form action="" method="post" class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">shedule_id:</label>
    <div class="col-sm-10">
      <input type="text" name="fullname" class="form-control"  placeholder="fullname" required value="<?php echo $data[1]?>"
>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">course_id:</label>
    <div class="col-sm-10">
      <input type="text" name="varsityID" class="form-control"  placeholder="varsityID" required value="<?php echo $data[2]?>"
>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">module_id:</label>
    <div class="col-sm-10">
      <input type="text" name="referID" class="form-control"  placeholder="referID" required value="<?php echo $data[3]?>"
>
    </div>
  </div>               
         
  <div class="form-group">
    <div class="col-md-offset-11 col-md-1">
        <input type="hidden" name="eid" value="<?php echo $data[0]?>">

      <button type="submit" name="save" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

   


<?php }?> 


	
						<?php 
include("footer.php");
?>
