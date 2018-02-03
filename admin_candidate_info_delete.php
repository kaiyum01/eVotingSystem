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
                                <i class="fa fa-dashboard"></i> Candidate info
                            </li>
                        </ol>
                    </div>
                </div>
    </div>
</div>
<div class="container">
<a style="margin-bottom:20px;" class="btn btn-primary" href="admin_candidate_info_reg_form.php" role="button">+ Add new Candidate</a>







<?php
include("database_connect/connect.php");
$id=$_GET['sid'];
$sql="Delete from candidate_reg where cid=$id";
$query=  mysql_query($sql);
if($query){
echo '<div class="alert alert-success">'."<strong>"."Success ! Your record have been deleted!"."</strong>"."</div>";    
}  else {
echo '<div class="alert alert-danger">'."<strong>"."Sorry ! Your record don't have been deleted !"."</strong>"."</div>";    
 
}
?>







 <?php 
include("admin_candidate_data_table.php");
?>
                            


 
 </div>
           
			



			
    <!-- /#wrapper -->

<?php
include("footer.php");
?>
    


</body>


</html>
