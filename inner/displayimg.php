<?php
mysql_connect("localhost", "root", " ");
mysql_select_db("e_voting");
$res=mysql_query(select * from candidate_reg);
echo "<table>";
while ($row=mysql_fetch_array($res)) {
	echo "<tr>";
	echo "<td>"; ?> <img src=" <?php echo $row ["picture"]; ?>" height="100" width="100" ><?php echo "</td>";
	echo "<td>"; echo $row["fullname"]; echo "</td>";
	echo "</tr>";


}
echo "</table>";
?>