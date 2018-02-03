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
	<style>	
	.infor{
	height:auto;
	margin-bottom:5px;
	float:left;
	width:100%;
	margin-left:20%;
	}
	.tbl{float:left;
	height:100%;}
	.info_casting{
	padding:10px;
	width:20%;
	height:auto;
	background:#006699;
	color: #fff;
	text-align:center;
	float:left;
	}
		.info_voter{
	padding:10px;
	width:20%;
	height:auto;
	background:#339966;
	color: #fff;
	text-align:center;
	float:left;
	}
		.info_candidate{
	padding:10px;
	width:20%;
	height:auto;
	background:#339966;
	color: #fff;
	text-align:center;
	float:left;
	}

	</style>

</head>

<body>

<?php
 include 'database_connect/connect.php';
    $sql_setting="Select * from system_setting where id=1";
    $result_setting=  mysql_query($sql_setting);
    while ($data_setting=  mysql_fetch_array($result_setting))
    {  
		if($data_setting[11]==1)
		{
		include ('new_short_summery_result_status.php');
		}
		if($data_setting[12]==1)
		{
		include ('new_details_result_indivitualy.php');
		}
		if($data_setting[4]==1)
		{
			echo '<div style="text-align:center;" class="alert alert-info">'."<strong>"."Information ! Voter registration last date on ".'<p class="btn-success" style="margin-left:10px;padding:10px;">'.date('d-M-Y',strtotime($data_setting[3]))."</p>"."</strong>"."</div>";
		}
	if($data_setting[6]==1)
		{
			echo '<div style="text-align:center;" class="alert alert-info">'."<strong>"."Information ! Candidate registration last date on ".'<p class="btn-success" style="margin-left:10px;padding:10px;">'.date('d-M-Y',strtotime($data_setting[5]))."</p>"."</strong>"."</div>";
		}
		if($data_setting[2]==1)
		{
			echo '<div style="text-align:center;" class="alert alert-info">'."<strong>"."Information ! Details result will be published on ".'<p class="btn-success" style="margin-left:10px;padding:10px;">'.date('d-M-Y',strtotime($data_setting[1]))."</p>"."</strong>"."</div>";

		}
		?>
		
		
<div class="row">
<div class="col-md-6">
	<?php
	if($data_setting[8]==1)
	{
		echo '<div style="text-align:center;" class="alert alert-info">'."<strong>"."Information ! Voting start date on ".'<p class="btn-success" style="margin-left:10px;padding:10px;">'.date('d-M-Y',strtotime($data_setting[7]))."</p>"."</strong>"."</div>";
	}
	?>
</div>
<div class="col-md-6">
	<?php
	if($data_setting[10]==1)
	{
		echo '<div style="text-align:center;" class="alert alert-info">'."<strong>"."Information ! Voting end date on ".'<p class="btn-success" style="margin-left:10px;padding:10px;">'.date('d-M-Y',strtotime($data_setting[9]))."</p>"."</strong>"."</div>";
	}
	?>
</div>
</div>
	<?php } ?> 