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
<h4 class="bg-success" style="text-align:center;padding:10px;">Voter List</h4>

    <thead class="bg-primary">
<tr>
<td>Picture</td>
<td>Full Name</td>
<td>Voter ID Number</td>
<td>Gender</td>
</thead>


    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from voter_reg where public_approve='Activate'";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr>
         <td><img style="width:120px; height:auto;" src="<?php echo 'public_images/'.$data[4]; ?>"></td>
        <td><?php echo $data[2]?></td>
        <td><?php echo $data[3]?></td>
		<td><?php echo $data[7]?></td>
	
        
       
        
        
    </tr>
    
    
    
    <?php }?>
    
    
</table>



