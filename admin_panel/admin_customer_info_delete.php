

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
include("database_connect/connect.php");
$id=$_GET['sid'];
$sql="Delete from customerinfo where customer_id=$id";
$query=  mysql_query($sql);
if($query){
     echo '<p class="bg-success">'."<b>"."Your record have been Deleted"."</b>"."</p>";
}  else {
 echo '<p class="bg-danger">'."<b>"."Your record is not Deleted"."</b>"."</p>";   
}
?>
<?php
include("view_php_all_file/customer_info_view_data_table.php");
?>


        </div>
            </div>
    <!-- /#wrapper -->

<?php
include("footer.php");
?>
    


</body>


</html>
