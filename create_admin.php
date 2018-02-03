<?php
include("sessionAdminpanel.php");
?>

<?php 
include("head.php");
?>
  	<?php 
include("admin_ec_top_bar_menu.php");
?>
	

	<?php 
//include("admin_head_description.php");
?>

 <script type="text/javascript">
window.setTimeout(function() {
  $(".flash").fadeTo(300, 0).slideUp(300, function(){
      $(this).remove();
  });
}, 5000);
 </script>	  											
<div class="container" style="margin-top:10%;margin-bottom:5%;">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
<div class="page-header">
 <?php
if(isset($_POST['save'])){
include("database_connect/connect.php");
$admin_id=$_POST['admin_id'];
$admin_password=$_POST['admin_password'];
$sql="Insert into  admin_login(admin_voter_id,admin_password)values('$admin_id','$admin_password')";
$query=  mysql_query($sql);
if($query){
echo '<div class="alert alert-success flash">'."<strong>"."Success! Admin create successfully !"."</strong>"."</div>";
}  else {
echo '<div class="alert alert-danger flash">'."<strong>"."Sorry! Admin create is not successfully!"."</strong>"."</div>";    
}
}
?>
  <h3 style="background-color:#F5F2F2;padding:5px;color:#999999;">Create new admin</h3>
</div>
<form method="post">
          <fieldset>
			<div class="inner-addon left-addon">
			<i class="glyphicon glyphicon-user"></i>
				<div class="form-group">
				<input type="text" name="admin_id" class="form-control input-lg" placeholder="User ID/Name"  required>
				</div>
			</div>
			<div class="inner-addon left-addon" >
			<i class="glyphicon glyphicon-lock"></i>
				<div class="form-group">
				<input type="password" name="admin_password" class="form-control input-lg" placeholder="Password"  required>
				</div>
			</div>
          </fieldset>
          <hr>
           <!-- Nav tabs -->
      <div class="text-center">
        <div class="btn-group">

		<a href="#"><button type="reset" class="btn btn-warning btn-md">Reset</button></a>
		<a href="#"><button type="submit" name="save" class="btn btn-primary btn-md">Save</button></a>
        </div>
      </div>
      </form>

      </div>
  </div>
</div>




<!-- Footer section-->
<?php 
include("footer.php");
?>
  		