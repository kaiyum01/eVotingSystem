<div class="echo_display"> 

<?php

      if(isset($_POST['submitt']))
       {
           
            include ('database_connect/connect.php');
            
            
            
			$email_verification_code=rand();							
			
           
            

           // $public_voter_id=mysql_real_escape_string(trim($_POST['public_voter_id']));
            $public_email=mysql_real_escape_string(trim($_POST['public_email']));
            //$public_email=$_POST['public_email'];
            
    $fetch=mysql_query("select public_email from voter_reg where public_email='$public_email'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {	
    
  $sql="Update voter_reg set email_verification_code='$email_verification_code' where public_email='$public_email' ";
$query=  mysql_query($sql);
		if($query)
		{
		
			$to="$public_email";
			$subject="Confirmation Code";
			$message= "
				<div style='border:1px solid gray; width:600px; margin:0px auto;'>
				  <table align='center' style='width:600px'>
				<tr style='background-color:#AA4C5A; color:#FFF;width:600px; '>
				  <td align='center' colspan=''><h2>eVoting System</h2></td>
				</tr>
				<tr>
				  <td colspan='10'>This is your email verification code.Please Use this code to continue registration process.</td>
				</tr>
				<hr/>
				<tr>			
				  <td><b>$email_verification_code</b></td>				                         
				</tr>
				<hr/>  
				<tr>
				  <td colspan='3'>
				  <h3>Thank You<br>
				  eVoting System</h3></td>
				</tr>
				<tr>
				  <td style='background-color:#DF828D; color:#FFF;width:600px;'  align='center' >Mohammad Abdul Kaiyum	
				  </td>
				</tr>
				  </table>
				</div>
				
				";
			$from = "eVoting system<ma.kaiyum1992@gmail.com>";
		        //$subject = "Password recovered";
		        $headers1 = "From: $from\n";
		        $headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
		        $headers1 .= "X-Priority: 1\r\n";
		        $headers1 .= "X-MSMail-Priority: High\r\n";
		        $headers1 .= "X-Mailer: Just My Server\r\n";

            		$mail=mail($to,$subject,$message,$headers1);

			if($mail==1)
			{
				echo '<div style="margin-top:15px;margin-bottom:-10px;font-size:15px;" class="alert alert-success">'.'<img style="margin-top:-10px;" src="img/circle-ok.png">'."Email verification code has been sent on your email ! Check your email and collect it for next process of voter registration.".'
<a style="background-color:#000;color:#FFF;padding:5px;" href="voter_registration_form.php">'."Click to continue registration processing"."</a>"."</div>";
			}
			else
			{
				echo '<div style="margin-top:12px;margin-bottom:-10px;" class="alert alert-warning">'.'<img style="margin-top:-10px;" src="img/circle-no.png">'."<strong>"."Email has not been sent.... Please try again!"."</strong>"."</div>";
			}			
		}
		
}
else
{
echo '<div style="margin-top:12px;margin-bottom:-10px;" class="alert alert-danger">'.'<img style="margin-top:-10px;" src="img/no.png">'."<strong>"."Sorry! your 'Email' doesn't matched !"."</strong>"."</div>";    

}
}

   
?>
</div>  