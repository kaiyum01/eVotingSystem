<!DOCTYPE html>
<html>
<head><title>Profile_Voter_Update</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"  href="css/bootstrap.min.css">
<link rel="stylesheet"  href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.effect.js"></script>
<style>

.colorgraph {
    height: 3px;
    border-top: 0;
    background: #c4e17f;
    border-radius: 5px;
    margin-bottom: 15px;
    background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
.center-cropped {
  width: 140px;
  height: 140px;
  background-position: center center;
  background-repeat: no-repeat;
}
img{
	border:#fff 6px solid;
}
.round{
	height: 140px;
	width: 140px;
	border-radius: 100%;
	background-color: #fff;
	border:#fff 6px solid;
	font-size: 50px;
	padding: 25px;
	color: #fff;
}
.heading_block_voter{
  margin-bottom:-15px;color:#222222;font-family:verdana;
}
.block_voter{
  color:gray;padding-left:15px;font-size:14px;background-color:#fff;font-family:verdana;padding: 15px;font-weight: bold; border-left: 10px solid #C5C4C4;margin-bottom: 10px;
}
}
</style>

</head>
 
<body>
										
<nav class="navbar  navbar-inverse navbar-fixed-top" role="navigation"style="margin:0;">
		<div class="container">
				<div class="navbar-header " >
			<a class="navbar-brand" href="index.html">Profile</a>
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-icca-navbar-collapse-1">
		<span class="sr-only">toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
				</div>
              
                
        
                
			<div class="collapse navbar-collapse" id="bs-icca-navbar-collapse-1">
							<div>
				<ul class=" nav navbar-nav navbar-right">
                    <li><a href="notic.html">Home</a></li>
                    <li><a href="notic.html">Audio</a></li>
                    <li><a href="notic.html">Video</a></li>
                    <li><a href="notic.html">Picture</a></li>
                    <li><a href="notic.html">Documents</a></li>

                 
                    
				
						</ul>
						
							</div>
			</div>
		</div>
		
</nav>

         <div  class="container">
                             
            	<div class="row">
                	<div style="background-color:#215989;padding-top:60px;padding-bottom:20px;" class="col-md-8 col-md-offset-2">
                			       <div class="row">
                    <div class="col-md-12"> 
                      <div class="col-md-6">
                      <h3 style="color:#fff;font-family:verdana;">Voter Profile</h3>
                      </div>
                      <div class="col-md-6">
                      <input style="float:right;margin-top:12px;margin-bottom:5px;margin-right:48px;" type="button" class="btn btn-success" value="Update">
                      <input style="float:right;margin-top:12px;margin-bottom:5px;margin-right:5px;" type="button" class="btn btn-danger" value="Deactive">
                      </div>
                      </div>
                      </div>
                    	
                    	<div class="colorgraph"></div>
                        	<div style="text-align:center;" class="col-md-4">
                            	<center><img class="img-circle img-responsive center-cropped" src="img/e.jpg"></center>
                                <h4 style="text-align:center;color:#fff;font-family:verdana;font-family:verdana;">Your Picture</h4>
                          </div>
                          <div style="text-align:center;" class="col-md-4">
                              <center><div style="font-family:verdana;background-color:#92AE4F;" class="round">OK</div></center>
                                <h4 style="text-align:center;color:#fff;font-family:verdana;">Vote Status</h4>
                              
                          </div>
                          <div style="text-align:center;" class="col-md-4">
                              <center><div style="font-family:verdana;background-color:#DA6459;" class="round">ID</div></center>
                               <h4 style="text-align:center;color:#fff;font-family:verdana;">Given Vote</h4>

                          </div>



                          <div style="background-color:#376C9A;padding:50px;" class="col-md-8 col-md-offset-2">
        <form method="post" action="" name="" id=""> 
                       <div class="form-group">
  <label for="fname">Full Name:</label>
  <input type="text" class="form-control" id="vfname">
</div>
                       <div class="form-group">
  <label for="fusr">User Name:</label>
  <input type="text" class="form-control" id="vuname">
</div>
<div class="form-group">
  <label for="vid">University ID:</label>
  <input type="number" class="form-control" id="vuid">
</div>
                    <div class="form-group">
  <label for="uemail">University Email:</label>
  <input type="email" class="form-control" id="vuemail">
</div>
<div class="form-group">
  <label for="contact">Contact:</label>
  <input type="text" class="form-control" id="vcontact">
</div>

<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="vgender">
    <option>Select Gender</option>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
  </select>
</div>

<div class="form-group">
  <label for="dob">Date of Birth:</label>
  <input type="date" class="form-control" id="vdob">
</div>

<div style="color:#fff;" class="form-group">
  <label for="pwd">Change Password:</label>
  <input style="background-color:#DA6459;font-size:21px;color:#fff;" type="password" class="form-control" id="vpwd">
</div>
<div class="form-group">

   <input style="float:right;margin-left:15px;" type="submit" class="btn btn-info" value="Submit">
   <input style="float:right;" type="reset" class="btn btn-warning" value="Reset">
</div>
        </form>
                </div>
                 
                        </div>
                		</div>
            	</div>
            
         </div>

</body>
</html>
