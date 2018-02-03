<div class="echo_display"> 
<?php
   
      if(isset($_POST['submit']))
       {
            //mysql_connect('localhost','root','') or die(mysql_error());
            //mysql_select_db('e_voting') or die(mysql_error());
             include 'database_connect/connect.php';
			
			$voter_reg_last_date=$_POST['voter_reg_last_date'];
			$voter_reg_last_date_status=$_POST['voter_reg_last_date_status'];
			
			$candidate_reg_last_date=$_POST['candidate_reg_last_date'];
			$candidate_reg_last_date_status=$_POST['candidate_reg_last_date_status'];
			
			$start_vote_date=$_POST['start_vote_date'];
			$start_vote_date_status=$_POST['start_vote_date_status'];
			
			$end_vote_date=$_POST['end_vote_date'];
			$end_vote_date_status=$_POST['end_vote_date_status'];
			$result_pbulish_date=$_POST['result_pbulish_date'];
			$result_pbulish_date_status=$_POST['result_pbulish_date_status'];
			
			$short_summery_status=$_POST['short_summery_status'];
			$details_result_status=$_POST['details_result_status'];
			$persmission_to_vote=$_POST['persmission_to_vote'];


    $sql="Update system_setting set voter_reg_last_date='$voter_reg_last_date',voter_reg_last_date_status='$voter_reg_last_date_status',candidate_reg_last_date='$candidate_reg_last_date',candidate_reg_last_date_status='$candidate_reg_last_date_status',start_vote_date='$start_vote_date',start_vote_date_status='$start_vote_date_status',end_vote_date='$end_vote_date',end_vote_date_status='$end_vote_date_status',result_pbulish_date='$result_pbulish_date',result_pbulish_date_status='$result_pbulish_date_status',short_summery_status='$short_summery_status',details_result_status='$details_result_status',persmission_to_vote='$persmission_to_vote' where id=1";
$query=  mysql_query($sql);
if($query){
     echo '<div class="alert alert-success flash">'."<strong>"."Success ! Update sccessfully !"."</strong>"."</div>";
}  
else 
{
echo '<div class="alert alert-danger flash">'."<strong>"."Sorry! Update is not successfully !"."</strong>"."</div>";    
}

    } 
?>

 

 <script type="text/javascript">
window.setTimeout(function() {
  $(".flash").fadeTo(300, 0).slideUp(300, function(){
      $(this).remove();
  });
}, 5000);
 </script>	
</div>  