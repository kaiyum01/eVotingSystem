

<!DOCTYPE html>
<html lang="en">

<head>
<title>CRM Project | Home</title>
  <?php
  include("head_section.php");
  ?>

</head>

<body>

    <div id="wrapper">

        <div id="page-wrapper">

            <div class="container-fluid">

<?php 
 include("header.php");
?>

        <!-- /#page-wrapper -->


<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                             Customer info <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Customer info
                            </li>
                        </ol>
                    </div>
                </div>
    </div>

<a style="margin-bottom:20px;" class="btn btn-primary" href="customer_info_reg_form.php" role="button">Add new course</a>




<?php
if(isset($_POST['save'])){
include("database_connect/connect.php");
$customer_id=$_POST['customer_id'];
$customer_name=$_POST['customer_name'];
$customer_address=$_POST['customer_address'];
$customer_cell=$_POST['customer_cell'];
$customer_email=$_POST['customer_email'];
$customer_national_id=$_POST['customer_national_id'];
$customer_picture=$_POST['customer_picture'];

$sql="Update  customerinfo set customer_id='$customer_id',customer_name='$customer_name',customer_address='$customer_address',customer_cell='$customer_cell',customer_email='$customer_email',customer_national_id='$customer_national_id',customer_picture='$customer_picture' where customer_name='$customer_name'";
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
$sqla="Select * from customerinfo where customer_id=$id";
$result=  mysql_query($sqla);
while ($data=  mysql_fetch_array($result)){
?>


<form action="" method="post" class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-md-offset-2 col-sm-2 control-label">customer id:</label>
    <div class="col-sm-6">
      <input type="text" name="customer_id" class="form-control"  placeholder="customer id" required value="<?php echo $data[0]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">customer name:</label>
    <div class="col-sm-6">
      <input type="text" name="customer_name" class="form-control"  placeholder="customer name" required value="<?php echo $data[1]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">customer address:</label>
    <div class="col-sm-6">
      <input type="text" name="customer_address" class="form-control"  placeholder="customer address" required value="<?php echo $data[2]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">customer cell:</label>
    <div class="col-sm-6">
      <input type="text" name="customer_cell" class="form-control"  placeholder="customer cell" required value="<?php echo $data[3]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-offset-2 col-sm-2 control-label">customer email:</label>
    <div class="col-sm-6">
      <input type="text" name="customer_email" class="form-control"  placeholder="customer email" required value="<?php echo $data[4]?>">
    </div>
  </div>
   <div class="form-group">
     <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">customer national id:</label>
    <div class="col-sm-6">
      <input type="text" name="customer_national_id" class="form-control"  placeholder="customer national id" required value="<?php echo $data[5]?>">
    </div>
  </div>
   <div class="form-group">
     <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">customer picture:</label>
    <div class="col-sm-6">
      <input type="file" name="customer_picture" class="form-control"  required value="<?php echo $data[6]?>">
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
            </div>
    <!-- /#wrapper -->

<?php
include("footer.php");
?>
    


</body>


</html>
