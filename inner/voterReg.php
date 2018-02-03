
<div class="echo_display"> 
<?php
   
      if(isset($_POST['submitt']))
       {
            mysql_connect('localhost','root','') or die(mysql_error());
            mysql_select_db('e_voting') or die(mysql_error());
  
          
            $varsityIDD=$_POST['varsityIDD'];
            $varsityEmaill=$_POST['varsityEmaill'];
            
  
    $fetch=mysql_query("select varsityIDD from voter_reg where varsityIDD='$varsityIDD' and varsityEmaill='$varsityEmaill'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
          $fullnamee=$_POST['fullnamee'];
          $celll=$_POST['celll'];
            $genderr=$_POST['genderr'];
            $passwordd=$_POST['passwordd'];
            $termss=$_POST['termss'];

    $sql="Update voter_reg set fullnamee='$fullnamee',celll='$celll',genderr='$genderr',passwordd='$passwordd',termss='$termss' where varsityIDD='$varsityIDD' ";
$query=  mysql_query($sql);
if($query){
     echo '<div style="margin-top:12px;margin-bottom:-10px;" class="alert alert-success">'.'<img style="margin-top:-10px; src="img/circle-ok.png">'."<strong>"."Dear " . $fullnamee ." you have been successfully registered!".'Please Click'." <b style=color:#fff;background-color:#449D44;padding:6px;>"."Login "."</b>"."</strong>"."</div>";
}  else {
echo '<div class="alert alert-danger">'.'<img style="margin-top:-10px;" src="img/no.png">'."<strong>"."Sorry! You have been already registered !"."</strong>"."</div>";    
}
    }
  
  else{
 echo '<div style="margin-top:12px;margin-bottom:-10px;" class="alert alert-danger">'.'<img style="margin-top:-10px;" src="img/no.png">'."<strong>"."Sorry! your 'ID' and 'Email' doesn't matched !"."</strong>"."</div>";    
		  // echo '<img src="img/cross.png">'." <b style=color:#C9302C;>"."E-mail and ID doesn't matched !"."</b>" ."<p>". "Please try again !"." <b style=color:#EC971F;>"."Registration "."</b>"."</p>";
         }
         } 
         
      
?>
</div>  