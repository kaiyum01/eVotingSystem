<?php
session_start();
?>

<?php 
include("head.php");
?>
<?php
include("home_top_bar_menu.php");
?>

 <div style="margin-top:60px;" class="container">
 <h4 style="text-align:center;">Voter Registration Form</h4>
 	<div class="row">
 	
<?php 
include("voterReg.php");
?>
 		<div class="col-md-2">
 		</div>
 		
 		<div class="col-md-8">
 			
 			

<!--THIS IS VOTER REGISTRATION MODAL-->



          <form class="form-horizontal" name="" method="post"  enctype="multipart/form-data" action="voter_registration_form.php" autocomplete="off">
<div class="colorgraph"></div>


  <div class="form-group">
    <label for="can_fullname" class="col-sm-3 control-label" style="color:red;">Email Verification Code</label>
    <div class="col-sm-8">
      <input style="border-color:red;" type="text" class="form-control" name="email_verification_code" required placeholder="Email Verification Code">
  </div>
  </div>


  <div class="form-group">
    <label for="can_fullname" class="col-sm-3 control-label">Full Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="public_full_name" required placeholder="Your Name">
  </div>
  </div>
  
  
  
  <div class="form-group">
    <label for="idnumber" class="col-sm-3 control-label"> Voter ID Card Number (NID)</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="public_voter_id" required placeholder="000-00-0000">
    </div>
  </div>
  
  
   <div class="form-group">
    <label for="picture" class="col-sm-3 control-label">Photo / Picture</label>
    <div class="col-sm-8">
      <input  type="file" class="form-control" name="public_pic" required placeholder="Photo">
    </div>
  </div>

       <div class="form-group">
    <label for="public_password" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="public_password" required placeholder="Password">
    </div>
  </div>
  
  
      <div class="form-group">
    <label for="public_dob" class="col-sm-3 control-label">Date of Birth</label>
    <div class="col-sm-8">
      <input type="date" class="form-control" name="public_dob" required placeholder="DOB">
    </div>
  </div>
  
  
       <div class="form-group">
    <label for="can_cell" class="col-sm-3 control-label">Cell Number</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"name="public_cell" required placeholder="01815526607">
    </div>
  </div>
  
  
<div class="form-group">
    <label for="can_gender" class="col-sm-3 col-md-3 control-label">Gender</label>
    <div class="col-sm-2 col-md-2">
    <label style="margin-bottom:20px;" class="radio">
 Male<input style="margin-top:-28px;margin-left:50px;margin-bottom:100px;width:50px;" type="radio" class="form-control" name="public_gender" required value="Male">
</label>
</div>
<div class="col-md-2 col-sm-2">
  <label class="radio">
   Female <input style="margin-top:-28px;margin-left:50px;width:50px;" type="radio" class="form-control" name="public_gender" required value="Female">
</label>
    </div>
    </div>
 



<div class="form-group">
  <label  for="can_terms" class=" col-sm-3 col-md-3 col-lg-3 control-label">Terms and Conditions  </label>
    <div class="col-sm-5 col-md-5 col-lg-5">
     <a href="#">I agree all terms and conditions <a href="#">Terms and conditions</a>
     </div>
     <div class="col-sm-1 col-md-1 col-lg-1">
    <div  class="checkbox">
  <input style="margin-top:-8px;" type="checkbox" class="form-control"  name="public_terms" required value="Yes">
 </div>
</div>
</div>


 <div class="form-group">
    <label for="can_cell" class="col-sm-3 control-label"></label>
    <div  class="col-sm-8">
     <input style="float:right; margin-left:5px;" type="submit" name="submitt" id="submitt" value="Submit" class="btn btn-primary">
       <input style="float:right;" type="reset" class ="btn btn-warning">
     
    </div>
  </div>
  
       
        </form>
 			
 			
 			
 			
 		</div>
 		
 		<div class="col-md-2">
 		</div>
 	</div>
 </div> 
   
<!-- Footer section-->
<?php 
include("footer.php");
?>
  