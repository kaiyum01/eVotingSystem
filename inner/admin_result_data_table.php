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
<?php
include 'static_admin_candidate_result.php';
?>

	
<div class="container">
<table id="example" class="display" cellspacing="0" width="100%">
    <thead class="bg-primary">
<tr>

<td>Voter ID / Who have give vote</td>
<td>Candidate ID / Who have got vote</td>



</thead>


    <?php 
    include 'database_connect/connect.php';
    $sql="Select * from vote";
    $result=  mysql_query($sql);
    while ($data=  mysql_fetch_array($result))
    {    
    ?>
    <tr>
        
        <td><?php echo $data[1]?></td>
        <td><?php echo $data[2]?></td>
       
	
     
    </tr>

    
    
    <?php }?>
	
	
	</table>
	
</div>



	

	
	
	
	
	
    
    



		
