<?
include ('db.php');
echo "update page";
extract($_REQUEST);
$query = mysql_query("select * from up where id='$data'") or die ('Query is invalid: ' . mysql_error());
$row = mysql_fetch_array($query);

?>
	<form  action="#" method="post"  enctype="multipart/form-data">
		<table>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="user_name"  placeholder="User Name" id="user_name" value="<? echo $row['user_name']; ?>" ></td>
			</tr>
			<tr>
				<td>upload picture</td>
				<td><input type="file" name='pic' id='pic' value="" placeholder=""/></td>
				<td><input type="hidden" name='hdn_original_pic' id='hdn_original_pic' value="<? echo $row['pic_link']; ?>" placeholder=""/></td>
			</tr>
			<tr>
				<td> <input type='text' name='did' value= "<? echo $data; ?>" /></td>
				<td><input type="submit" name="commit" value="Update" ></td>
			</tr>
			<tr>
				<td><a href="gallery.php">Gallery</a></td>
			</tr>
		</table>
	</form>
<?

if (isset($_POST['commit'])) 
{
	$id = $_POST['did'];
	$user_name=mysql_real_escape_string(trim($_POST['user_name']));
	$hdn_original_pic 	=$_POST['hdn_original_pic'];
	$file_name 			= $_FILES['pic']['name'];
	$file_size 			=$_FILES['pic']['size'];
	$file_tmp 			=$_FILES['pic']['tmp_name'];
	$file_type 			=$_FILES['pic']['type'];
	$file_ext 			=strtolower(end(explode('.',$_FILES['pic']['name'])));
	$custom_image_name  =$user_name.'.'.$file_ext;
	$expensions 		= array("jpeg","jpg","png");

		if($file_name)
		{ 
			if(in_array($file_ext,$expensions)=== false)
			{
			$errors="Extension Not Allowed, Please Choose A JPEG or PNG file.";
			}
			
			if($file_size > 2097152)
			{
			$errors[]='File size must be excately 2 MB';
			}
			
			if(empty($errors)==true)
			{
			move_uploaded_file($file_tmp,"images/".$custom_image_name);
			}
			else
			{
			echo $errors;
			}
		} 
		else
		{
			$custom_image_name=$hdn_original_pic;
		}
		
$sql=mysql_query("update up set  user_name='$user_name', pic_link='$custom_image_name' where id='$id'");

if( $sql )
{
/*		$body  =  "
<div style='border:1px solid gray; width:600px; margin:0px auto;'>
<table align='center' style='width:600px'>
<tr style='background-color:gray; color:#FFF;width:600px; '>
<td align='center' colspan=''><h2>Asrotex Group</h2></td>
</tr>

<tr>
<td>Dear <b>$user_fullname</b>,</td>

</tr>
<tr>
<td colspan='10'>Please, Use this code: $newcode to activate your account.</td>
</tr>
<tr>
<td>Example:</td>
</tr>
<tr>
<td>Username:&nbsp;$user_name </td>

</tr>
<tr>
<td>New Password:&nbsp;your registered password. </td>

</tr>
<tr>
<td>Activation Code:&nbsp;$newcode</td>

</tr>
<tr>
<td><a href='http://erp.asrotex.com/task'>Login here</a></td>

</tr>

<tr>
<td colspan='3'>
<h3>Thank You<br>
Asrotex Group</h3></td>
</tr>
<tr>
<td style='background-color:gray; color:#FFF;width:600px;'  align='center' > Task Planner Developed by Logic Software Ltd&trade;</td>
</tr>
</table>
</div>


";


$from = "Logic Software Ltd<support@logicsoftbd.com>";
$subject = "Password recovered";
$headers1 = "From: $from\n";
$headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
$headers1 .= "X-Priority: 1\r\n";
$headers1 .= "X-MSMail-Priority: High\r\n";
$headers1 .= "X-Mailer: Just My Server\r\n";


mail($usremail,"NEW USER CONFIRMATION ON TASK PLANNER",$body,$headers1);*/
echo '<span style="color:green !important; margin-left:500px !important;">upload Successfully.</span>';
header("Refresh: 3; url=index.php");
}
else 
{  
echo '<span style="color:red !important; margin-left:600px !important;">Failed To Registration.</span>';
die;
}

}


?>
