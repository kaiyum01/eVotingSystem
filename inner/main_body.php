<style>
  .center-cropped {
  width: 60px;
  height: 60px;
  background-position: center center;
  background-repeat: no-repeat;
}

</style>
   
    <div class="page-header no-margin no-padding fixed-prblm" style="margin-top:-50px;">
							<div class="container">
    
 <?php 
include("VoterReg.php");
?>
    <?php 
include("CandidateReg.php");
?>
										<div class="row">
											<div class="col-md-4">
								<div class="panel panel-success">
									<div class="panel-heading"> <b> &nbsp Voter</b></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
    										  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#VoterLogin"><span class="glyphicon glyphicon-log-in"></span> Login</button>
    										      										  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#VoterReg"><span class="glyphicon glyphicon-user"></span> Registration</button>

							</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;"> &nbsp Voter can login and registration here</p></div>
								</div>
											</div>
										

										<div class="col-md-4">
								<div class="panel panel-info">
									<div class="panel-heading">  <b>&nbsp Candidate</b></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
    										  <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#CandidateLogin"><span class="glyphicon glyphicon-log-in"></span> Login</button>
    										      										  <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#CandidateReg"><span class="glyphicon glyphicon-user"></span> Registration</button>


  									</div><!--</a>-->
  										<div class="panel-footer"> <p style="text-align:center;color:gray;"> &nbsp Candidate can login and registration here</p></div>
								</div>
											</div>
											
											
											
											
											<div class="col-md-4">
								<div class="panel panel-primary">
									<div class="panel-heading"> <b>&nbsp Election Commision</b></div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<div class="panel-body" style="text-align:center;">
  									 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ECLogin"><span class="glyphicon glyphicon-log-in"></span> Login</button>
    										<!--<b>ELECTION COMMISION</b>-->
  									</div><!--</a>-->
  										<div class="panel-footer"><p style="text-align:center;color:gray;font-size:15px;"> &nbsp Only for Election Commision</p> </div>
								</div>
											</div>

											

											
											
												</div>
											
											
											</div>
											</div>
											</div>
										
							

											<!--<div class="col-md-3">
								<div class="panel panel-danger">
									<div class="panel-heading">&nbsp Login</div>-->
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<!--<div class="panel-body" style="text-align:center;">
  									  <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">Candidate</button>

    										<!--<b>CANDIDATE</b>-->
  									<!--</div><!--</a>-->

  										<!--<div class="panel-footer"> &nbsp</div>
								</div>
											</div>
									
					

											<div class="col-md-3">	
								<div class="panel panel-info">
									<div class="panel-heading">&nbsp Registration</div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<!--<div class="panel-body" style="text-align:center;">
  									  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Voter</button>

    										<!--<b>VOTER</b>-->
  									<!--</div><!--</a>-->
  										<!--<div class="panel-footer">&nbsp</div>
								</div>
											</div>
						

											<div class="col-md-3">
								<!--<div class="panel panel-warning">
									<div class="panel-heading"> &nbsp Registration</div>
									<!--<a href="#" class="thumbnail" style="margin:0">-->
  									<!--<div class="panel-body" style="text-align:center;">
  									 <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">Candidate</button>
    										<!--<b>CANDIDATE</b>-->
  									<!--</div><!--</a>-->
  									<!--	<div class="panel-footer">&nbsp</div>
								</div>
											</div>-->

<!--ELECTION COMMISION LOGIN MODAL-->
<div class="modal fade" id="ECLogin" role="dialog">
    <div class="modal-dialog   modal-md">
   
      <div class="modal-content">
        <div class="modal-header" style="background-color:#265A88;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Election Commision Login</h4>
        </div>
        <div class="modal-body ">


        <div class="colorgraph"></div>
<form class="form-horizontal" method="post"  name="login" action="admin_login_ec.php">
  <div class="form-group">
    <label for="idnumber" class="col-sm-3 control-label">University ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="varsityid" placeholder="132-15-2713" required>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="password" placeholder="Type password" required>
    </div>
  </div>

      </div>  
      <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
          <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Login">
        </div>
        </form>
      
    </div>
</div>
</div>


<!--VOTER LOGIN MODAL-->
<div class="modal fade" id="VoterLogin" role="dialog">
    <div class="modal-dialog   modal-md">
   
      <div class="modal-content">
        <div class="modal-header" style="background-color:#479D47;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Voter Login</h4>
        </div>
        <div class="modal-body ">


<div class="colorgraph"></div>
<form class="form-horizontal" method="post" name="login" action="loginVot.php">
  <div class="form-group">
    <label for="idnumber" class="col-sm-3 control-label">University ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="varsityIDD" placeholder="132-15-2713" required>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="passwordd" placeholder="Type password" required>
    </div>
  </div>
           </div>   
        <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
          <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Login" />
        </div>
        </form>
  
    </div>
</div>
</div>

<!--THIS IS VOTER REGISTRATION MODAL-->

<div class="modal fade" id="VoterReg" role="dialog">
    <div class="modal-dialog   modal-lg">
   
      <div class="modal-content">

       <div class="modal-header" style="background-color:#31B0D5;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Voter Registration Form</h4>
        </div>
        <div class="modal-body ">

          <form class="form-horizontal" name="" method="post" action="index.php" autocomplete="off">
<div class="colorgraph"></div>
  <div class="form-group">
    <label for="FullName" class="col-sm-3 control-label">Full Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="fullnamee" required placeholder="Your Name">
  </div>
  </div>
  <div class="form-group">
    <label for="idnumber" class="col-sm-3 control-label">Your University ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="varsityIDD" required placeholder="000-00-0000">
    </div>
  </div>
     <div class="form-group">
    <label for="Email" class="col-sm-3 control-label">University Email</label>
    <div class="col-sm-8">
      <input  type="email" class="form-control" name="varsityEmaill" required placeholder="kaiyum2713@diu.edu.bd">
    </div>
  </div>
       <div class="form-group">
    <label for="password" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="passwordd" required placeholder="Type password">
    </div>
  </div>
       <div class="form-group">
    <label for="cell" class="col-sm-3 control-label">Cell Number</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"name="celll" required placeholder="01815526607">
    </div>
  </div>
<div class="form-group">
    <label for="gender" class="col-sm-3 col-md-3 control-label">Gender</label>


    <div class="col-sm-2 col-md-2">
    <label style="margin-bottom:20px;" class="radio">
 Male<input style="margin-top:-28px;margin-left:50px;margin-bottom:100px;width:50px;" type="radio" class="form-control" name="genderr" required value="Male">
</label>
</div>
<div class="col-md-2 col-sm-2">
  <label class="radio">
   Female <input style="margin-top:-28px;margin-left:50px;width:50px;" type="radio" class="form-control" name="genderr" required value="Female">
</label>
    </div>
  </div>


<div class="form-group">

  <label  for="terms" class=" col-sm-3 col-md-3 col-lg-3 control-label">Terms and Conditions  </label>
    <div class="col-sm-5 col-md-5 col-lg-5">
     I agree all terms and conditions <a href="#">Terms and conditions</a>
     </div>
     <div class="col-sm-1 col-md-1 col-lg-1">
    <div  class="checkbox">
  <input style="margin-top:-8px;" type="checkbox" class="form-control"  name="termss" required value="Yes">
 </div>

</div>
</div>
<!--
<label>Upload Image File:</label><br/>
<input name="userImage" type="file">-->


        </div>


        <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
      <input type="submit" name="submitt" id="submitt" value="Submit" class="btn btn-primary">
        </div>
        </form>
      </div>
    </div>
</div>
   

   

<!--CANDIDATE LOGIN MODAL-->
<div class="modal fade" id="CandidateLogin" role="dialog">
    <div class="modal-dialog   modal-md">
   
      <div class="modal-content">
        <div class="modal-header" style="background-color:#EB9316;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Candidate Login</h4>
        </div>
        <div class="modal-body ">

<div class="colorgraph"></div>
<form class="form-horizontal" method="post" name="login" action="loginCan.php">
  <div class="form-group">
    <label for="idnumber" class="col-sm-3 control-label">University ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="varsityID" placeholder="132-15-2713" required>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="password" placeholder="Type password" required>
    </div>
  </div>
        </div>

        <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
       <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Login" />
          
        </div>
        </form>

    </div>
</div>
</div>

<!-- THIS IS THE CANDIDATE REGISTRATION MODAL-->






<div class="modal fade" id="CandidateReg" role="dialog">
    <div class="modal-dialog   modal-lg">
   
      <div class="modal-content">

       <div class="modal-header" style="background-color:#C12E2A;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Candidate Registration Form</h4>
        </div>
        <div class="modal-body ">


<form class="form-horizontal" name="" method="post" action="index.php" autocomplete="off">
<div class="colorgraph"></div>
  <div class="form-group">
    <label for="FullName" class="col-sm-3 control-label">Full Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="fullname" required placeholder="Your Name">
    </div>
  </div>
  <div class="form-group">
    <label for="idnumber" class="col-sm-3 control-label">Your University ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="varsityID" required placeholder="000-00-0000">
    </div>
  </div>
   <div class="form-group">
    <label for="idrefe" class="col-sm-3 control-label">Reference-1 ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="referID" required placeholder="000-00-0000">
    </div>
  </div>
     <div class="form-group">
    <label for="idrefee" class="col-sm-3 control-label">Reference-2 ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="referenceID" required placeholder="000-00-0000">
    </div>
  </div>
     <div class="form-group">
    <label for="Email" class="col-sm-3 control-label">University Email</label>
    <div class="col-sm-8">
      <input  type="email" class="form-control" name="varsityEmail" required placeholder="kaiyum2713@diu.edu.bd">
    </div>
  </div>
       <div class="form-group">
    <label for="password" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="password" required placeholder="Type password">
    </div>
  </div>
       <div class="form-group">
    <label for="cell" class="col-sm-3 control-label">Cell Number</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="cell" required placeholder="01815526607">
    </div>
  </div>
<div class="form-group">
    <label for="gender" class="col-sm-3 col-md-3 control-label">Gender</label>


    <div class="col-sm-2 col-md-2">
    <label style="margin-bottom:20px;" class="radio">
 Male<input style="margin-top:-28px;margin-left:50px;margin-bottom:100px;width:50px;" type="radio" class="form-control" name="gender" required value="Male">
</label>
</div>
<div class="col-md-2 col-sm-2">
  <label class="radio">
   Female <input style="margin-top:-28px;margin-left:50px;width:50px;" type="radio" class="form-control" name="gender" required value="Female">
</label>
    </div>
  </div>

<div class="form-group">
    <label for="gender" class="col-sm-3 col-md-3 control-label">Select voting symbol</label>


    <div class="col-sm-2 col-md-2">
    <label style="margin-bottom:20px;" class="radio">
Mango<input style="margin-top:-28px;margin-left:50px;margin-bottom:100px;width:50px;" type="radio" class="form-control" name="gender" required value="mango"><img style=" border:#669AE1 2px solid;" class="img-circle img-responsive center-cropped" src="img/mango.png">
</label>
</div>
 <div class="col-sm-2 col-md-2">
    <label style="margin-bottom:20px;" class="radio">
Apple<input style="margin-top:-28px;margin-left:50px;margin-bottom:100px;width:50px;" type="radio" class="form-control" name="gender" required value="apple"><img style=" border:#669AE1 2px solid;" class="img-circle img-responsive center-cropped" src="img/aplr.png">
</label>
</div>
 <div class="col-sm-2 col-md-2">
    <label style="margin-bottom:20px;" class="radio">
Pineapple &nbsp <input style="margin-top:-28px;margin-left:65px;margin-bottom:100px;width:50px;" type="radio" class="form-control" name="gender" required value="pineapple"><img style=" border:#669AE1 2px solid;" class="img-circle img-responsive center-cropped" src="img/pinapl.png">
</label>
</div>
 <div class="col-sm-2 col-md-2">
    <label style="margin-bottom:20px;" class="radio">
Bird<input style="margin-top:-28px;margin-left:50px;margin-bottom:100px;width:50px;" type="radio" class="form-control" name="gender" required value="bird"><img style=" border:#669AE1 2px solid;" class="img-circle img-responsive center-cropped" src="img/bird.png">
</label>
</div>


  </div>


<div class="form-group">

  <label  for="terms" class=" col-sm-3 col-md-3 col-lg-3 control-label">Terms and Conditions  </label>
    <div class="col-sm-5 col-md-5 col-lg-5">
     I agree all terms and conditions <a href="#">Terms and conditions</a>
     </div>
     <div class="col-sm-1 col-md-1 col-lg-1">
    <div  class="checkbox">
  <input style="margin-top:-8px;" type="checkbox" class="form-control" name="terms" required value="Yes">
 </div>

</div>
</div>
<!--
<label>Upload Image File:</label><br/>
<input name="userImage" type="file">-->


        </div>
        <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
			<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">
        </div>
        </form>
      </div>
    </div>
</div>
   
