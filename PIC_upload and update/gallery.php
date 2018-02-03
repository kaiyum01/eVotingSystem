<?
include ('db.php');
echo "Gallery Page";
?>

<?

$query = mysql_query("select * from up") or die ('Query is invalid: ' . mysql_error());

//write the results

while ($row = mysql_fetch_array($query)) {
	?>
		<table border="1">
			<tr>
            <td> SL </td>
            <td> User Name </td>
            <td> picLInk</td>
            </tr>
            <tr>
				<td> <? echo $row['id']; ?> </td>
				<td><? echo $row['user_name']; ?> </td>
			<td><img height="100" width="140" src="<?php echo 'images/'.$row['pic_link']; ?>"/></td>
            <td><a href="update.php?data=<? echo $row['id']; ?>">Update </a></td>
          <input type='text' name='did' value= <? echo $row['id']; ?> />
			</tr>
		</table>
	<?
}

?>
