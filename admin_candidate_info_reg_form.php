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
if(isset($_POST['save'])){
include("database_connect/connect.php");
 $can_fullname=$_POST['can_fullname'];
            $can_voter_id=$_POST['can_voter_id'];
            $can_refer_id_one=$_POST['can_refer_id_one'];
            $can_refer_id_two=$_POST['can_refer_id_two'];
            
            $can_email=$_POST['can_email'];
           	$can_password=$_POST['can_password'];
            $can_cell=$_POST['can_cell'];
            $can_gender=$_POST['can_gender'];
            $can_terms=$_POST['can_terms'];


$sql="Insert into candidate_reg(can_fullname,can_voter_id,can_refer_id_one,can_refer_id_two,can_email,can_password,can_cell,can_gender,can_terms)values('$can_fullname','$can_voter_id','$can_refer_id_one','$can_refer_id_two','$can_email','$can_password','$can_cell','$can_gender','$can_terms')";
$query=  mysql_query($sql);
if($query){

echo '<div class="alert alert-success">'."<strong>"."Success ! Your record have been saved ! You can see your record to click Candidate List !"."</strong>"."</div>";    
}  

else {

echo '<div class="alert alert-danger">'."<strong>"."Sorry ! Your data don't save!"."</strong>"."</div>";    
}
}
?>
  <form name="" method="post" action="admin_candidate_info_reg_form.php" autocomplete="off" class="form-horizontal">

  <div class="form-group">
    <label for="inputEmail3" class="col-md-offset-2 col-sm-2 control-label">Full Name:</label>
    <div class="col-sm-6">
      <input type="text" name="can_fullname" class="form-control"  placeholder="Type candidate's full name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">University id:</label>
    <div class="col-sm-6">
      <input type="text" name="can_voter_id" class="form-control"  placeholder="University id" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">Reference id-1:</label>
    <div class="col-sm-6">
      <input type="text" name="can_refer_id_one" class="form-control"  placeholder="Reference id-1" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">Reference id-2:</label>
    <div class="col-sm-6">
      <input type="text" name="can_refer_id_two" class="form-control"  placeholder="Reference id-2" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-offset-2 col-sm-2 control-label">University Email:</label>
    <div class="col-sm-6">
      <input type="text" name="can_email" class="form-control"  placeholder="University Email" required>
    </div>
  </div>
   <div class="form-group">
     <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">can_password:</label>
    <div class="col-sm-6">
      <input type="text" name="can_password" class="form-control"  placeholder="can_password" required>
    </div>
  </div>
   <div class="form-group">
     <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">can_cell:</label>
    <div class="col-sm-6">
      <input type="text" name="can_cell" class="form-control" placeholder="can_cell" required>
    </div>
  </div>
  
  <div class="form-group">
     <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">can_gender:</label>
    <div class="col-sm-6">
      Male <input type="radio" name="can_gender" required value="Male">
                Female <input type="radio" name="can_gender" required value="Female">
    </div>
  </div>
  
  <div class="form-group">
     <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">can_terms:</label>
    <div class="col-sm-6">
       <input type="checkbox" name="can_terms" required value="Yes"><p>I agree all can_terms and conditions <a href="#">can_terms and conditions</a></p>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-md-offset-4 col-md-1">
      <button type="submit" name="save" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>





    
    <!-- /#wrapper -->


 
 </div>
           
			



			
    <!-- /#wrapper -->

<?php
include("footer.php");
?>
    
