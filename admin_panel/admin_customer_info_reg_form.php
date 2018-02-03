

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

<a style="margin-bottom:20px;" class="btn btn-primary" href="customer_info_reg_form.php" role="button">+ Add new customer info</a>



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

$sql="Insert into customerinfo(customer_id,customer_name,customer_address,customer_cell,customer_email,customer_national_id,customer_picture)values('$customer_id','$customer_name','$customer_address','$customer_cell','$customer_email','$customer_national_id','$customer_picture')";
$query=  mysql_query($sql);
if($query){
    echo '<p class="bg-success">'."<b>"."Your record have been saved"."</b>"."</p>";
}  else {
echo '<p class="bg-danger">'."<b>"."Sorry! Your data is not saved"."</b>"."</p>";    
}
}
?>

<form action="" method="post" class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-md-offset-2 col-sm-2 control-label">customer id:</label>
    <div class="col-sm-6">
      <input type="text" name="customer_id" class="form-control"  placeholder="customer id" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">customer name:</label>
    <div class="col-sm-6">
      <input type="text" name="customer_name" class="form-control"  placeholder="customer name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">customer address:</label>
    <div class="col-sm-6">
      <input type="text" name="customer_address" class="form-control"  placeholder="customer address" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">customer can_cell:</label>
    <div class="col-sm-6">
      <input type="text" name="customer_cell" class="form-control"  placeholder="customer can_cell" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-offset-2 col-sm-2 control-label">customer email:</label>
    <div class="col-sm-6">
      <input type="text" name="customer_email" class="form-control"  placeholder="customer email" required>
    </div>
  </div>
   <div class="form-group">
     <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">customer national id:</label>
    <div class="col-sm-6">
      <input type="text" name="customer_national_id" class="form-control"  placeholder="customer national_id" required>
    </div>
  </div>
   <div class="form-group">
     <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">customer picture:</label>
    <div class="col-sm-6">
      <input type="file" name="customer_picture" class="form-control"  required>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-md-offset-4 col-md-1">
      <button type="submit" name="save" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>





        </div>
            </div>
    <!-- /#wrapper -->

<?php
include("footer.php");
?>
    


</body>


</html>
