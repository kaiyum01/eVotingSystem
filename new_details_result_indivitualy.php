
<table  id="example" class="display" cellspacing="0" width="100%">
<h4  style="text-align:center;padding:10px; color:#009999;">Candidate Result List</h4>
    <thead class="bg-primary">
<tr>
<td>Picture</td>
<td>Symbol</td>
<td>Symbol Name</td>
<td>Full Name</td>
<td>Total Vote</td>
</tr>
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