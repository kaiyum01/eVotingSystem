<div class="container-fluid">
<a style="margin-bottom:20px;" class="btn btn-primary" href="admin_update_vote_candidate.php" role="button">+ Update public_is_vote_status to show public</a>
</div>
<?php
$con = mysql_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("e_voting", $con);
		$result = mysql_query("select count(get_vote_varsityID) FROM public_is_vote_status");
$row = mysql_fetch_array($result);

$total = $row[0];

echo '<div style="width:180px;float:left;text-align:center;" class="alert alert-danger">'."<strong>"."Total public_is_vote_status casting= ".$total."</strong>"."</div>";    


			$result = mysql_query("select count(get_vote_varsityID) FROM public_is_vote_status where get_vote_varsityID='132-15-2713'");
$row = mysql_fetch_array($result);

$total = $row[0];
echo '<div style="width:180px; float:left;text-align:center;" class="alert alert-success">'."<strong>"."132-15-2713= ".$total."</strong>"."</div>";    


		$result = mysql_query("select count(get_vote_varsityID) FROM public_is_vote_status where get_vote_varsityID='132-15-2728'");
$row = mysql_fetch_array($result);

$total = $row[0];
echo '<div style="width:180px; float:left;text-align:center;" class="alert alert-warning">'."<strong>"."132-15-2728= ".$total."</strong>"."</div>";    


		$result = mysql_query("select count(get_vote_varsityID) FROM public_is_vote_status where get_vote_varsityID='132-15-2714'");
$row = mysql_fetch_array($result);

$total = $row[0];
echo '<div style="width:180px; float:left;text-align:center;" class="alert alert-info">'."<strong>"."132-15-2714= ".$total."</strong>"."</div>";    

		
		$result = mysql_query("select count(get_vote_varsityID) FROM public_is_vote_status where get_vote_varsityID='132-15-2760'");
$row = mysql_fetch_array($result);

$total = $row[0];
echo '<div style="width:180px; float:left;text-align:center;" class="alert alert-danger">'."<strong>"."132-15-2760= ".$total."</strong>"."</div>";    


		$result = mysql_query("select count(get_vote_varsityID) FROM public_is_vote_status where get_vote_varsityID='132-15-2813'");
$row = mysql_fetch_array($result);

$total = $row[0];
echo '<div style="width:180px; float:left;text-align:center;" class="alert alert-warning">'."<strong>"."132-15-2813= ".$total."</strong>"."</div>";    



mysql_close($con);
?>