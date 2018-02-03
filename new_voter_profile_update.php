<!DOCTYPE html>
<html>
<head><title>Profile Voter</title>
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
.flash{
text-align:center;
}

</style>

 <script type="text/javascript">
window.setTimeout(function() {
  $(".flash").fadeTo(300, 0).slideUp(300, function(){
      $(this).remove();
  });
}, 5000);
 </script>

</head>
 
<body>
			    <?php 
include("admin_top_bar_menu_Vot.php");
?>	
         <div  class="container">
                           
            	<div class="row">
                	<div style="background-color:#215989;padding-top:60px;padding-bottom:20px;" class="col-md-8 col-md-offset-2">
                			       <div class="row">
                    <div class="col-md-12"> 
                      <div class="col-md-6">
                      <h3 style="color:#fff;font-family:verdana;">Voter Profile</h3>
					  <!-- <h3 style="color:#fff;font-family:verdana;"><input type="file" name="" id="" value="Change Your Picture"></h3>-->
					  
                      </div>
                      <div class="col-md-6">
                      <a href="new_voter_profile.php" class="btn btn-success" style="float:right;margin-top:12px;margin-bottom:5px;margin-right:48px;" role="button">Profile</a>
<!--                      <input style="float:right;margin-top:12px;margin-bottom:5px;margin-right:5px;" type="button" class="btn btn-danger" value="Deactive">
-->                      </div>
                      </div>
                      </div>
					  
					  <?php
 include 'database_connect/connect.php';
extract($_REQUEST);
$sql = mysql_query("select * from voter_reg where vid='$data'") or die ('Query is invalid: ' . mysql_error());
$datas = mysql_fetch_array($sql);

?>
					  
                    	<div class="colorgraph"></div>
						<div style="text-align:center;margin-bottom:10px;" class="col-md-12">
						<span class="btn btn-primary btn-file">
						          <form class="form-horizontal" name="" method="post"  enctype="multipart/form-data" action="#" autocomplete="off">
  <div class="form-group">
    <label for="can_fullname" class="col-sm-3 control-label">Full Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="public_full_name" value="<?php echo $datas['public_full_name']; ?>"  required placeholder="Your Name">
  </div>
  </div>
  <div class="form-group">
    <label for="idnumber" class="col-sm-3 control-label">Your Voter ID <br/> Card Number</label>
    <div class="col-sm-8">
      <input  type="text" style="background-color:#FFFF99;" class="form-control" name="public_voter_id" value="<?php echo $datas['public_voter_id']; ?>"  readonly placeholder="000-00-0000">
    </div>
  </div>
   <div class="form-group">
    <label for="Email" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-8">	
      <input  type="email" style="background-color:#FFFF99;" class="form-control" name="public_email"  value="<?php echo $datas['public_email']; ?>" readonly placeholder="kaiyum2713@diu.edu.bd">
    </div>
  </div>
   <div class="form-group">
    <label for="Email" class="col-sm-3 control-label">Photo / Picture</label>
    <div class="col-sm-8">
      <input  type="file" class="form-control" name="public_pic" placeholder="Photo">
	   <input type="hidden" class="form-control" name='hdn_original_pic' id='hdn_original_pic'  value="<?php echo $datas['public_pic_link']; ?>" placeholder=""/>
	 
    </div>
  </div>
    
       <div class="form-group">
    <label for="admin_password" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="public_password" value="<?php echo $datas['public_password']; ?>" required placeholder="Type password">
    </div>
  </div>
       <div class="form-group">
    <label for="can_cell" class="col-sm-3 control-label">Cell Number</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="public_cell" value="<?php echo $datas['public_cell']; ?>" required placeholder="01815526607">
    </div>
  </div>



 <div class="form-group">
 <div style="float:right;" class="col-sm-8">
        <input type="reset" class ="btn btn-warning">
	 <input class="form-control" type='hidden' name='did' value= "<?php echo $data; ?>" />
      <input type="submit" name="submitt" id="submitt" value="Submit" class="btn btn-success">

        </form>
		</div>
		</div>
		</span>
		</div>
              
                        </div>
                		</div>
            	</div>
            
         </div>
		 
		 
 <?php 	 
  if(isset($_POST['submitt']))
       {
           // mysql_connect('localhost','root','') or die(mysql_error());
           // mysql_select_db('e_voting') or die(mysql_error());
           include 'database_connect/connect.php';
  
            $id = $_POST['did'];
          $public_full_name=$_POST['public_full_name'];

          $public_cell=$_POST['public_cell'];

          $public_password=$_POST['public_password'];
 $public_voter_id=mysql_real_escape_string(trim($_POST['public_voter_id']));

	$file_name 		= $_FILES['public_pic']['name'];
	$file_size 		=$_FILES['public_pic']['size'];
	$file_tmp 		=$_FILES['public_pic']['tmp_name'];
	$file_type 		=$_FILES['public_pic']['type'];
	$file_ext 		=strtolower(end(explode('.',$_FILES['public_pic']['name'])));
	$custom_image_name=$public_voter_id.'.'.$file_ext;
	$expensions 	= array("jpeg","jpg","png");

		if($file_name)
		{ 
			if(in_array($file_ext,$expensions)=== false)
			{
			$errors="Extension Not Allowed, Please Choose A JPEG or PNG file.";
			}
			
			if($file_size > 2097152)
			{
			$errors[]='File size must be excately 2 MB';
			}
			
			if(empty($errors)==true)
			{
			 move_uploaded_file($file_tmp,"public_images/".$custom_image_name);
			}
			else
			{
			echo $errors;
			}
		} 
		else
		{
			$custom_image_name=$hdn_original_pic;
		}
		
//$query=mysql_query("update up set  user_name='$user_name', pic_link='$custom_image_name' where id='$id'");
$query=mysql_query("update voter_reg set  	public_full_name='$public_full_name',public_pic_link='$custom_image_name',	public_cell='$public_cell',public_password='$public_password' where vid='$id'");
if( $query )
{
/*		$body  =  "
<div style='border:1px solid gray; width:600px; margin:0px auto;'>
<table align='center' style='width:600px'>
<tr style='background-color:gray; color:#FFF;width:600px; '>
<td align='center' colspan=''><h2>Asrotex Group</h2></td>
</tr>

<tr>
<td>Dear <b>$user_fullname</b>,</td>

</tr>
<tr>
<td colspan='10'>Please, Use this code: $newcode to activate your account.</td>
</tr>
<tr>
<td>Example:</td>
</tr>
<tr>
<td>Username:&nbsp;$user_name </td>

</tr>
<tr>
<td>New Password:&nbsp;your registered password. </td>

</tr>
<tr>
<td>Activation Code:&nbsp;$newcode</td>

</tr>
<tr>
<td><a href='http://erp.asrotex.com/task'>Login here</a></td>

</tr>

<tr>
<td colspan='3'>
<h3>Thank You<br>
Asrotex Group</h3></td>
</tr>
<tr>
<td style='background-color:gray; color:#FFF;width:600px;'  align='center' > Task Planner Developed by Logic Software Ltd&trade;</td>
</tr>
</table>
</div>


";


$from = "Logic Software Ltd<support@logicsoftbd.com>";
$subject = "Password recovered";
$headers1 = "From: $from\n";
$headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
$headers1 .= "X-Priority: 1\r\n";
$headers1 .= "X-MSMail-Priority: High\r\n";
$headers1 .= "X-Mailer: Just My Server\r\n";


mail($usremail,"NEW USER CONFIRMATION ON TASK PLANNER",$body,$headers1);*/
echo '<div class="alert alert-success flash">'."<strong>"."Success ! Updated data sccessfully !"."</strong>"."</div>";
//header("Refresh: 3; url=index.php");
}
else 
{  
echo '<div class="alert alert-danger flash">'."<strong>"."Sorry! Your data is not updated !"."</strong>"."</div>";    
die;
}

}


?>

<!-- Footer section-->

  <?php 
include("footer.php");
?>
      

</body>
</html>