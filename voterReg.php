<div class="echo_display"> 
<?php
      if(isset($_POST['submitt']))
       {
            //mysql_connect('localhost','root','') or die(mysql_error());
			//mysql_select_db('e_voting') or die(mysql_error());
            include ('database_connect/connect.php');

            $public_voter_id=mysql_real_escape_string(trim($_POST['public_voter_id']));
            $email_verification_code=mysql_real_escape_string(trim($_POST['email_verification_code']));
            
    $fetch=mysql_query("select public_voter_id from voter_reg where public_voter_id='$public_voter_id' and email_verification_code='$email_verification_code'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
          $public_full_name=$_POST['public_full_name'];
          $public_cell=$_POST['public_cell'];
		  $public_dob=$_POST['public_dob'];
          $public_gender=$_POST['public_gender'];
          $public_password=$_POST['public_password'];
          $public_terms=$_POST['public_terms'];



	$file_name 		= $_FILES['public_pic']['name'];
	$file_size 		=$_FILES['public_pic']['size'];
	$file_tmp 		=$_FILES['public_pic']['tmp_name'];
	$file_type 		=$_FILES['public_pic']['type'];
	$file_ext 		=strtolower(end(explode('.',$_FILES['public_pic']['name'])));
	$custom_image_name=$public_voter_id.'.'.$file_ext;
	$expensions 	= array("jpeg","jpg","png");
		
		if(in_array($file_ext,$expensions)=== false){
		   //$errors="Extension Not Allowed, Please Choose A JPEG or PNG file.";
		}
		
		if($file_size > 2097152){
		   $errors[]='File size must be excately 2 MB';
		}
		
		if(empty($errors)==true){
		   move_uploaded_file($file_tmp,"public_images/".$custom_image_name);
		}else{
		   echo $errors;
		}



			$mysqlquery=mysql_query("select public_approve from voter_reg where public_voter_id='$public_voter_id' and email_verification_code='$email_verification_code'");
			while ($row = mysql_fetch_assoc($mysqlquery))
			{		
				if($row["public_approve"]=="Aeactivate")
				{
				echo '<div class="alert alert-danger">'.'<img style="margin-top:-10px;" src="img/no.png">'."<strong>"."Sorry! You have been already registered !"."</strong>"."</div>";
				}
				else
				{
				
					$sql="Update voter_reg set public_full_name='$public_full_name',public_pic_link='$custom_image_name',public_cell='$public_cell',public_gender='$public_gender',public_dob='$public_dob',public_password='$public_password',public_terms='$public_terms' where public_voter_id='$public_voter_id' ";
					$query=  mysql_query($sql);
    
					if($query)
					{
						echo '<div style="margin-top:12px;margin-bottom:-10px;" class="alert alert-success">'.'<img style="margin-top:-10px;"
						src="img/circle-ok.png">'."<strong>"."Dear " . $public_full_name ." you have been successfully registered!"."</b>"."</strong>"."</div>";
					
					}  
					else
					{
						echo '<div class="alert alert-danger">'.'<img style="margin-top:-10px;" src="img/no.png">'."<strong>"."Sorry! You have been already registered !"."</strong>"."</div>";    
					}
			
				}
				
			}

	}		
  
  else
  {
 echo '<div style="margin-top:12px;margin-bottom:-10px;" class="alert alert-danger">'.'<img style="margin-top:-10px;" src="img/no.png">'."<strong>"."Sorry! your 'id' and 'Email verification code' doesn't matched !"."</strong>"."</div>";    
		  // echo '<img src="img/cross.png">'." <b style=color:#C9302C;>"."E-mail and id doesn't matched !"."</b>" ."<p>". "Please try again !"." <b style=color:#EC971F;>"."Registration "."</b>"."</p>";
 }
         } 
         
      
?>
</div>  