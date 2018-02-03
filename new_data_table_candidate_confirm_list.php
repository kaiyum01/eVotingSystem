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
<td>Symbol</td>
<td>Full Name</td>
<td>National ID Card</td>
<td>Email</td>
<td>Gender</td>
<td>Profile</td>


</thead>


    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg where can_approve='Activate'";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr>
        <td><img style="width:120px; height:auto;" src="<?php echo 'candidate_images/'.$data[4]; ?>"></td>
		 <td><img style="width:120px; height:auto;" src="<?php echo 'candidate_symbol/'.$data[12]; ?>"></td>
        <td><?php echo $data[2]?></td>
        <td><?php echo $data[3]?></td>
        <td><?php echo $data[7]?></td>
		<td><?php echo $data[10]?></td>
        <td><?php echo '<a class="btn btn-info" href="new_candidate_profile_unapprove_by_admin.php?sid='.$data[3].'"  target="_blank">Click to Deactivate</a>';?></td>
    </tr>
    
    
    
    <?php }?>
    
    
</table>



