<?php
//session_start();
?>

<?php 
include("head.php");
?>
    <?php 
include("admin_ec_top_bar_menu.php");
?>
	
	<p style="margin-top:60px;"></p>
<div class="container">
<?php 

//echo $_GET['sid'];
include("database_connect/connect.php");
$id=$_GET['sid'];
$sql=("Select * from candidate_reg where can_voter_id='$id'");
$result= mysql_query($sql);
while ($data= mysql_fetch_array($result))
{
?>
<div class="col-md-12">
		<div class="row">
		</div>
		<div class="row">
			<div class="col-md-3">
				<img class="img-responsive" style="width:500px; height:auto;" src="<?php echo  'candidate_images/'.$data[4]; ?>" />
			</div>
			<div class="col-md-6">
				<div class="col-md-4">
					<h4 style="background:#CCCCCC; padding-left:10px;"> Full Name:</h4> 
					<h4 style="background:#CCFF99; padding-left:10px;"> NID Number:</h4>
					<h4 style="background:#CCCCCC; padding-left:10px;"> Date of Birth:</h4>
					<h4 style="background:#CCFF99; padding-left:10px;"> Email:</h4>
					<h4 style="background:#CCCCCC; padding-left:10px;"> Cell:</h4>
					<h4 style="background:#CCFF99; padding-left:10px;"> Reference 1:</h4>
					<h4 style="background:#CCCCCC; padding-left:10px;"> Reference 2:</h4>
					<h4 style="background:#CCFF99; padding-left:10px;"> Gender:</h4>
				</div>
				<div class="col-md-8">
					<h4 style="background:#CCCCCC; padding-left:10px;"><?php echo $data[2]; ?></h4> 
					<h4 style="background:#CCFF99; padding-left:10px;"><?php echo $data[3]; ?></h4> 
					<h4 style="background:#CCCCCC; padding-left:10px;"><?php echo date('d-m-Y', strtotime($data[8]));  ?></h4> 
					<h4 style="background:#CCFF99; padding-left:10px;"><?php echo $data[7]; ?></h4> 
					<h4 style="background:#CCCCCC; padding-left:10px;"><?php echo $data[9]; ?></h4> 
					<h4 style="background:#CCFF99; padding-left:10px;"><?php echo $data[5]; ?></h4> 
					<h4 style="background:#CCCCCC; padding-left:10px;"><?php echo $data[6]; ?></h4> 
					<h4 style="background:#CCFF99; padding-left:10px;"><?php echo $data[10]; ?></h4> 
					<div style="background:#CCCCCC; padding:20px;">					
						<form action="" method="post" >
						<h3 style="font-size:20px;color:#333333; text-align:center;">Confirm Candidate <input style="height:auto; width:30px;" id="checkbox" type="checkbox" name="can_approve" value="Deactivate" required /></h3>

						<p style="padding-left:40px; text-align:center;"><button type="submit" name="save" class="btn btn-primary btn-lg">Unapprove</button></p>
						</form>
					</div>			
				</div>
			</div>
			<div class="col-md-3">
				<img class="img-responsive" style="width:500px; height:auto;" src="<?php echo  'candidate_symbol/'.$data[12]; ?>" />
			</div>
		</div>

</div>
<?php }?>
</div>

<div class="container">
<?php
if(isset($_POST['save'])){
include("database_connect/connect.php");
$can_approve=$_POST['can_approve'];

$sql_update="Update  candidate_reg set can_approve='$can_approve' where  can_voter_id='$id'";
$query_sql=  mysql_query($sql_update);
if($query_sql){
  echo '<p class="bg-success">'."<b>"."Unapproved Successfully"."</b>"."</p>";
}  else {
echo '<p class="bg-danger">'."<b>"."Sorry! Unapproved Not Successfully"."</b>"."</p>"; 
}
}
?>
</div>
</div>
   

<!-- Footer section-->

    <?php 
include("footer.php");
?>
        
