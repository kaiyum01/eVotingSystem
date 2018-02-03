<!DOCTYPE html>
<html>
<head><title>Profile_Candidate_Update</title>
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
	border:#C5C4C4 6px solid;
}
.round{
	height: 140px;
	width: 140px;
	border-radius: 100%;
	background-color: #fff;
	border:#C5C4C4 6px solid;
	font-size: 50px;
	padding: 25px;
	color: #669AE1;
}
.heading_block{
	margin-bottom:-12px;color:#FCECEC;font-family:verdana;
}
.block{

	color:gray;padding:13px;font-size:15px;background-color:#fff;font-family:verdana;border-left: 10px solid #C5C4C4;margin-bottom: 10px;
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

         <div class="container">

            	<div class="row">
                	<div style="background-color:#562D72;padding-top:60px;padding-bottom:20px;" class="col-md-8 col-md-offset-2">
                	<div class="row">
                		<div class="col-md-12">	
                			<div class="col-md-6">
                    	<h3 style="color:#fff;font-family:verdana;">Candidate Profile</h3>
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

                            	<center><img class="img-circle img-responsive center-cropped" src="img/c.jpg"></center>
                                <h4 style="text-align:center;color:#fff;font-family:verdana;">Voting Symbol</h4>

                                <center><div style="font-family:verdana;" class="round">52</div></center>
                                <h4 style="text-align:center;color:#fff;font-family:verdana;">Total Vote</h4>
                            </div>
                     
                            
                            	
                            <div style="background-color:#703A94;padding:20px 20px 40px 20px;" class="col-md-6 col-md-offset-1">
             <form method="post" action="" name="" id="">        
                       <div class="form-group">
  <label for="cfname">Full Name:</label>
  <input type="text" class="form-control" id="cfname">
</div>

                       <div class="form-group">
  <label for="cuname">User Name:</label>
  <input type="text" class="form-control" id="cuname">
</div>

                       <div class="form-group">
  <label for="cuid">University ID:</label>
  <input type="number" class="form-control" id="cuid">
</div>

                       <div class="form-group">
  <label for="cuemail">University Email:</label>
  <input type="email" class="form-control" id="cuemail">
</div>

                       <div class="form-group">
  <label for="fusr">Contact:</label>
  <input type="text" class="form-control" id="ccontact">
</div>


<div class="form-group">
  <label for="cgender">Select list:</label>
  <select class="form-control" id="cgender">
    <option>Select Gender</option>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
  </select>
</div>
                       <div class="form-group">
  <label for="cdob">Date of Birth:</label>
  <input type="date" class="form-control" id="cdob">
</div>
                      <div class="form-group">
  <label for="crefemail1">Reference-1:</label>
  <input type="email" class="form-control" id="crefemail1">
</div>

                      <div class="form-group">
  <label for="crefemail2">Reference-2:</label>
  <input type="email" class="form-control" id="crefemail2">
</div>
<div style="color:#fff;" class="form-group">
  <label for="cpwd">Change Password:</label>
  <input style="background-color:#DA6459;font-size:21px;color:#fff;" type="password" class="form-control" id="cpwd">
</div>

                      <div style="color:#fff;" class="form-group">
  <label for="cdcomitob">Commitment:</label>
   <textarea style="background-color:#DA6459;color:#fff;" class="form-control" rows="5" id="comit"></textarea>
</div>

<div class="form-group">

    <input style="float:right;margin-left:15px;" type="submit" class="btn btn-info" value="Submit">
   <input style="float:right;" type="reset" class="btn btn-warning" value="Reset">
</div>
          </form>
               <!-- <div class="control">
                     <div class="label">Password</div>
                    <input type="password" class="form-control" value="123456"/>
                </div>-- >
                         
                        
                        
                        
                    					</div>
                
                	
            	</div>
            	</div>
            </div>
         </div>

</body>
</html>
