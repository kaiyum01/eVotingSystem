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

<td>FULL NAME</td>

<td>UNIVERSITY id</td>
<td>REFERENCE-1</td>
<td>REFERENCE-2</td>
<td>UNIVERSITY EMAIL</td>
<td>can_cell</td>
<td>can_gender</td>
<td>UPDATE</td>
<td>DELETE</td>

</thead>


    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from candidate_reg";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr>
        
        <td><?php echo $data[1]?></td>
        <td><?php echo $data[2]?></td>
        <td><?php echo $data[3]?></td>
		<td><?php echo $data[4]?></td>
		<td><?php echo $data[5]?></td>
		<td><?php echo $data[7]?></td>
		<td><?php echo $data[8]?></td>
		
	
        <td><?php echo '<a class="btn btn-warning" href="customer_info_update.php?sid='.$data[0].'">Update</a>';?></td>
        <td><?php echo  '<a class="btn btn-danger" href="admin_candidate_info_delete.php?sid='.$data[0].'">Delete</a>';?></td>
		 
    </tr>
    
    
    
    <?php }?>
    
    
</table>



