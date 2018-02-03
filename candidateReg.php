
<div class="echo_display"> 
<?php

      if(isset($_POST['submit']))
       {
           // mysql_connect('localhost','root','') or die(mysql_error());
           // mysql_select_db('e_voting') or die(mysql_error());
              include ('database_connect/connect.php');

           	$can_voter_id=mysql_real_escape_string(trim($_POST['can_voter_id']));
            $can_email=$_POST['can_email'];
            $can_terms=$_POST['can_terms'];
		 	$fetch=mysql_query("select public_voter_id,public_email,public_terms from voter_reg where public_voter_id='$can_voter_id' and public_email='$can_email' and public_terms='Yes'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
            $can_fullname=$_POST['can_fullname'];
           // $can_voter_id=mysql_real_escape_string(trim($_POST['can_voter_id']));
            $can_refer_id_one=$_POST['can_refer_id_one'];
            $can_refer_id_two=$_POST['can_refer_id_two'];
            
            //$can_email=$_POST['can_email'];
           	$can_password=$_POST['can_password'];
			$can_dob=$_POST['can_dob'];
            $can_cell=$_POST['can_cell'];
			$can_symbol_name=$_POST['can_symbol_name'];
            $can_gender=$_POST['can_gender'];
           // $can_terms=$_POST['can_terms'];
			
//start profile pic setting		
			$file_name 		= $_FILES['can_pic']['name'];
	$file_size 		=$_FILES['can_pic']['size'];
	$file_tmp 		=$_FILES['can_pic']['tmp_name'];
	$file_type 		=$_FILES['can_pic']['type'];
	$file_ext 		=strtolower(end(explode('.',$_FILES['can_pic']['name'])));
	$custom_image_name=$can_voter_id.'.'.$file_ext;
	$expensions 	= array("jpeg","jpg","png");
		
		if(in_array($file_ext,$expensions)=== false){
		   //$errors="Extension Not Allowed, Please Choose A JPEG or PNG file.";
		}
		
		if($file_size > 2097152){
		   $errors[]='File size must be excately 2 MB';
		}
		
		if(empty($errors)==true){
		   move_uploaded_file($file_tmp,"candidate_images/".$custom_image_name);
		}else{
		   echo $errors;
		}
// start symbol setting
			$s_file_name 		= $_FILES['can_symbol']['name'];
	$s_file_size 		=$_FILES['can_symbol']['size'];
	$s_file_tmp 		=$_FILES['can_symbol']['tmp_name'];
	$s_file_type 		=$_FILES['can_symbol']['type'];
	$s_file_ext 		=strtolower(end(explode('.',$_FILES['can_symbol']['name'])));
	$custom_symbol_name=$can_voter_id.'.'.$s_file_ext;
	$s_expensions 	= array("jpeg","jpg","png");
		
		if(in_array($s_file_ext,$s_expensions)=== false){
		   //$errors="Extension Not Allowed, Please Choose A JPEG or PNG file.";
		}
		
		if($s_file_size > 2097152){
		   $s_errors[]='File size must be excately 2 MB';
		}
		
		if(empty($s_errors)==true){
		   move_uploaded_file($s_file_tmp,"candidate_symbol/".$custom_symbol_name);
		}else{
		   echo $s_errors;
		}

/*		  $sql=mysql_query("insert into   up(user_name,public_pic_link)values('$public_voter_id','$custom_image_name')");

		if( $sql ){
	
				echo '<span style="color:green !important; margin-left:500px !important;">upload Successfully.</span>';
				header("Refresh: 3; url=index.php");
		}
			else {  
				echo '<span style="color:red !important; margin-left:600px !important;">Failed To Registration.</span>';
				die;
			}*/

            if($can_fullname!='' && $can_voter_id!='' && $custom_image_name!='' && $custom_symbol_name!='' && $can_refer_id_one!='' && $can_refer_id_two!=''  && $can_email!='' && $can_password!='' && $can_dob!='' && $can_cell!='' && $can_symbol_name!='' && $can_gender!='' &&$can_terms!='') 
            {
                $query=mysql_query("INSERT INTO candidate_reg (can_fullname,can_voter_id,can_pic_link,can_symbol_link,can_refer_id_one,can_refer_id_two,can_email,can_password,can_dob,can_cell,can_symbol_name,can_gender,can_terms) VALUES('{$can_fullname}','{$can_voter_id}','{$custom_image_name}','{$custom_symbol_name}','{$can_refer_id_one}','{$can_refer_id_two}','{$can_email}','{$can_password}','{$can_dob}','{$can_cell}','{$can_symbol_name}','{$can_gender
              }','{$can_terms}') ") ;
                if($query) 
                { 
                  

echo '<div class="alert alert-info">'.'<img style="margin-top:-10px; src="img/circle-ok.png">'."<strong>"."Dear " . $can_fullname ." you have been successfully registered!".'Please Click'." <b style=color:#fff;background-color:#EC971F;padding:6px;>"."Login "."</b>"."</strong>"."</div>";
                     //echo '<img src="img/circle-ok.png">Successfully Registrated !'."<p>"."Dear ". ." !". " Please Click"." <b style=color:#EC971F;>"."Login "."</b>"."</p>";

}
               else 
               {
                    echo '<div class="alert alert-danger">'.'<img style="margin-top:-10px;" src="img/no.png">'."<strong>"."Sorry! You have been already registered !"."</strong>"."</div>";  
               }
            } 
			}
           else 
           { 
               echo '<div style="margin-top:12px;margin-bottom:-10px;" class="alert alert-danger">'.'<img style="margin-top:-10px;" src="img/no.png">'."<strong>"."Sorry! Please you have to be a registered voter and then you will be as a candidate !"."</strong>"."</div>";  
           }
         }
      
?>
</div>	
<!--<div class="modal fade" id="#" role="dialog">
    <div class="modal-dialog   modal-md">
   
      <div class="modal-content">

       <div class="modal-header" style="background-color:#C12E2A;border-radius:5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#FFF;">Candidate Registration Form</h4>
        </div>
        <div class="modal-body ">

          
            
          
        </div>
        <div class="modal-footer">
        <input type="reset" class ="btn btn-warning">
      <input type="submit" name="submit" id="submit" value="Submit">
        </div>
     
      </div>
    </div>
</div>-->