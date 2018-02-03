<div class="infor" style="margin-bottom:15px; margin-top:-5px;">
<?php
include 'database_connect/connect.php';
$result_vote_casting = mysql_query("select count(candidate_id) FROM vote");
$row_vote_casting = mysql_fetch_array($result_vote_casting);
$total_vote_casting = $row_vote_casting[0];
$result_voter = mysql_query("select count(public_voter_id) FROM voter_reg where public_approve='Activate' ");
$row_voter= mysql_fetch_array($result_voter);
$total_voter = $row_voter[0];
$result_candidate = mysql_query("select count(can_voter_id) FROM candidate_reg where can_approve='Activate'");
$row_candidate = mysql_fetch_array($result_candidate);
$total_candidate = $row_candidate[0];
echo '<div class="info_voter">'."Total voter "."<br/>".'<p style="font-size:40px;">'.$total_voter."</p>"."</div>";
echo '<div class="info_casting">'."Total vote casting "."<br/>".'<p style="font-size:40px;">'.$total_vote_casting."</p>"."</div>";
echo '<div class="info_candidate">'."Total candidate "."<br/>".'<p style="font-size:40px;">'.$total_candidate."</p>"."</div>";
//echo '<div class="alert alert-success">'."<strong>"."Vote: ! Total vote casting "."</strong>".'<a class="btn-info" style="margin-left:10px;padding:10px;font-weight:normal;font-size:50px;" href="#">'.$total_vote_casting."<br/>". 'Total vote casting' ."</a>"."<strong>"."Vote: ! Total vote casting "."</strong>".'<a class="btn-info" style="margin-left:10px;padding:10px;font-weight:normal;font-size:50px;" href="#">'.$total_candidate."</a>"."<strong>"."Vote: ! Total vote casting "."</strong>".'<a class="btn-info" style="margin-left:10px;padding:10px;font-weight:normal;font-size:50px;" href="#">'.$total_voter."</a>"."</div>";

	//echo '<div class="alert alert-success">'."<strong>"."Vote: ! Total Candidate "."</strong>".'<a class="btn-info" style="margin-left:10px;padding:10px;font-weight:normal;font-size:50px;" href="#">'.$total_candidate."</a>"."</div>";
	
	//echo '<div class="alert alert-success">'."<strong>"."Vote: ! Total voter "."</strong>".'<a class="btn-info" style="margin-left:10px;padding:10px;font-weight:normal;font-size:50px;" href="#">'.$total_voter."</a>"."</div>";
?>
</div>