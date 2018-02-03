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
 $fullname=$_POST['fullname'];
            $varsityID=$_POST['varsityID'];
            $referID=$_POST['referID'];
            $referenceID=$_POST['referenceID'];
            
            $varsityEmail=$_POST['varsityEmail'];
           	$password=$_POST['password'];
            $cell=$_POST['cell'];
            $gender=$_POST['gender'];
            $terms=$_POST['terms'];


$sql="Insert into candidate_reg(fullname,varsityID,referID,referenceID,varsityEmail,password,cell,gender,terms)values('$fullname','$varsityID','$referID','$referenceID','$varsityEmail','$password','$cell','$gender','$terms')";
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
      <input type="text" name="fullname" class="form-control"  placeholder="Type candidate's full name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">University ID:</label>
    <div class="col-sm-6">
      <input type="text" name="varsityID" class="form-control"  placeholder="University ID" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">Reference ID-1:</label>
    <div class="col-sm-6">
      <input type="text" name="referID" class="form-control"  placeholder="Reference ID-1" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">Reference ID-2:</label>
    <div class="col-sm-6">
      <input type="text" name="referenceID" class="form-control"  placeholder="Reference ID-2" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-offset-2 col-sm-2 control-label">University Email:</label>
    <div class="col-sm-6">
      <input type="text" name="varsityEmail" class="form-control"  placeholder="University Email" required>
    </div>
  </div>
   <div class="form-group">
     <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">Password:</label>
    <div class="col-sm-6">
      <input type="text" name="password" class="form-control"  placeholder="Password" required>
    </div>
  </div>
   <div class="form-group">
     <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">Cell:</label>
    <div class="col-sm-6">
      <input type="text" name="cell" class="form-control" placeholder="Cell" required>
    </div>
  </div>
  
  <div class="form-group">
     <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">Gender:</label>
    <div class="col-sm-6">
      Male <input type="radio" name="gender" required value="Male">
                Female <input type="radio" name="gender" required value="Female">
    </div>
  </div>
  
  <div class="form-group">
     <label for="inputPassword3" class="col-md-offset-2 col-sm-2 control-label">Terms:</label>
    <div class="col-sm-6">
       <input type="checkbox" name="terms" required value="Yes"><p>I agree all terms and conditions <a href="#">Terms and conditions</a></p>
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
    
