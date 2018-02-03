<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("CRM/head_section.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="css/shCore.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css">
	<style type="text/css" class="init">

	</style>
	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="js/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="js/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init">


$(document).ready(function() {
	$('#example').DataTable();
} );


	</script>

</head>

<body>


<table id="example" class="display" cellspacing="0" width="100%">
    <thead class="bg-primary">
<tr>
<td>Picture</td>
<td>Full Name</td>
<td>National ID Card</td>
<td>Date of Birth</td>
<td>Email</td>
<td>Cell</td>
<td>Gender</td>
<td>Profile</td>
<!--<td>Approve</td>
<td>Confirm</td>-->
</thead>
    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from voter_reg where public_terms='Yes' and public_approve='Deactivate'";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    { 
	//print_r ($data);   
    ?>
    <tr>
		<td><img style="width:120px; height:auto;" src="<?php echo 'public_images/'.$data[4]; ?>"></td>
        <td><?php echo $data[2]?></td>
        <td><?php echo $data[3]?></td>
        <td><?php echo date('d-m-Y', strtotime($data[8])); ?></td>
        <td><?php echo $data[5]?></td>
        <td><?php echo $data[6]?></td>
        <td><?php echo $data[7]?></td>
        <td><?php echo '<a class="btn btn-info" href="new_voter_profile_approve_by_admin.php?sid='.$data[3].'"  target="_blank">Click to Activate</a>';?></td>
<!--<form action="" method="post">
        <td><input type="checkbox" class="checkbox"  name="public_approve" id="public_approve" value="Activate" required style="text-align:center;" /></td>
		<input type="hidden" name="voter_id" value= "<?php //echo $data[3] ?>" />
        <input type="hidden" name="eid" value="<?php //echo $data[2] ?>">
      	<td><button type="submit" name="save" class="btn btn-success">OK</button></td>
</form>
-->

    </tr>
    <?php 	}?>
</table>


<?php

?>


 <!-- 
  <td><?php //echo '<a class="btn btn-info" href="new_voter_profile_by_admin.php?sid='.$data[3].'">profile</a>';?></td>
              <td><input type="checkbox" class="checkbox"  name="public_approve" id="checkbox" value="Activate" required style="text-align:center;" /></td>
                 <td><?php //echo '<a class="btn btn-success" href="final_voting.php?sid='.$data[2].'">OK</a>';?></td>
    <input type="hidden" name="voter_id" value= "<?php// echo $login_session ?>" />
        <input type="hidden" name="eid" value="<?php //echo $data[2]?>">
        
 -->   