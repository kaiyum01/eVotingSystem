<?php
//session_start();
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
$uni_id=$_POST['uni_id'];
$uni_emial=$_POST['uni_emial'];
$sql="Insert into  voter_reg(varsityIDD,varsityEmaill)values('$uni_id','$uni_emial')";
$query=  mysql_query($sql);
if($query){
echo '<div class="alert alert-success flash">'."<strong>"."Success ! Save sccessfully !"."</strong>"."</div>";
}  else {
echo '<div class="alert alert-danger flash">'."<strong>"."Sorry! Duplicate Data is not save !"."</strong>"."</div>";    
}
}
?>
  <h3 style="background-color:#F5F2F2;padding:5px;color:#999999;">Primary Data Insert</h3>
</div>
<form method="post">
          <fieldset>
			<div class="inner-addon left-addon">
			<i class="glyphicon glyphicon-user"></i>
				<div class="form-group">
				<input name="uni_id" class="form-control input-lg" placeholder="Unique ID (000-00-0000)" type="text" required>
				</div>
			</div>
			<div class="inner-addon left-addon" >
			<i class="glyphicon glyphicon-envelope"></i>
				<div class="form-group">
				<input name="uni_emial" class="form-control input-lg" placeholder="Email Address" type="email" required>
				</div>
			</div>
          </fieldset>
          <hr>
           <!-- Nav tabs -->
      <div class="text-center">
        <div class="btn-group">

		<a href="#"><button class="btn btn-warning btn-md">Update</button></a>
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
  		
