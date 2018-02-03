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
<h4 class="bg-danger" style="text-align:center;padding:10px; margin-top:-20px;">Candidate Result List</h4>
    <thead class="bg-primary">
<tr>
<td>Picture</td>
<td>Symbol</td>
<td>Symbol Name</td>
<td>Full Name</td>
<td>Total Vote</td>
</thead>

	
	    <?php 
	    include 'database_connect/connect.php';
		/*$voteCountArr=array();
			$result = mysql_query("select candidate_id, count(candidate_id) as cvote FROM vote group by candidate_id order by cvote DESC");
			while($row = mysql_fetch_array($result))
		{
			$voteCountArr[$row['candidate_id']] = $row['cvote'];
		}*/
		
	    //$sql="Select id,name,national_id from info";
		$sql="Select a.cid,a.can_fullname,a.can_pic_link,a.can_symbol_link,a.can_symbol_name, count(candidate_id) as cvote from candidate_reg a  left join vote b on a.can_voter_id=b.candidate_id where a.can_approve='Activate' group by a.can_voter_id order by cvote desc";
	    $result=  mysql_query($sql);
	    while ($data=  mysql_fetch_array($result))
	    {    
    ?>
    <tr>
        <td><img class="img-responsive img-thumbnail" style="width:120px; height:auto;" src="<?php echo 'candidate_images/'.$data[2]; ?>"></td>
		<td><img class="img-responsive img-thumbnail" style="width:120px; height:auto;" src="<?php echo 'candidate_symbol/'.$data[3]; ?>"></td>
        <td><?php echo $data[4];?></td>
		<td><?php echo $data[1];?></td>
      <!--  <td><?php //echo $voteCountArr[$data['national_id']];?></td>-->
        <td style="font-size:40px; text-align:center;"><?php echo $data['cvote'];?></td>
    </tr>
    <?php }?>
</table>

