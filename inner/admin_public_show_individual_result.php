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
    include 'database_connect/connect.php';

$result = mysql_query("select count(get_vote_varsityID) FROM vote");
$row = mysql_fetch_array($result);

$total = $row[0];

	echo '<div class="alert alert-success">'."<strong>"."Vote: ! Ttotal vote casting "."</strong>".'<a class="btn-info" style="margin-left:10px;padding:10px;font-weight:normal;font-size:50px;" href="#">'.$total."</a>"."</div>";
?>

<table id="example" class="display" cellspacing="0" width="100%">
    <thead class="bg-primary">
<tr>
<td>Candidate Name</td>
<td>Candidate Varsity ID</td>
<td>Candidate Email</td>
<td>Gender</td>
<td>Total Vote</td>



</tr>
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
        <td><?php echo $data[5]?></td>
        <td><?php echo $data[8]?></td>
		<td style="font-size:20px; font-weight:normal;"><?php echo $data[10]?></td>
	
        
       
        
        
    </tr>
    
    
    
    <?php }?>
    
    
</table>



