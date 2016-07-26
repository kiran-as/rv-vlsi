<?php
		include("application/conn.php");
include('detect.php');					  
                      
					  
                      
                        $name=$_POST['scont_name'];
						$mobile=$_POST['scont_mobile'];
                        $email=$_POST['scont_email'];
						$upddatetime=mktime();
						$ip=$_SERVER['REMOTE_ADDR'];
						$subject='Register for Free Seminar :'.$name;
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\n";
				$headers .= 'From: RV-VLSI <info@rv-vlsi.com>';
				
  mysql_query("insert into tbl_registerfreeworkshop(name,mobile,email,upddatetime,ip) values(
'".addslashes($name)."','".addslashes($mobile)."','".addslashes($email)."','".$upddatetime."','".$ip."')") or die(mysql_error());      


$body ="<table width='100%'><tr><td>Name:</td><td>$name</td>
<tr><td>Mobile:</td><td>$mobile</td></tr>
<tr><td>Email:</td><td>$email</td></tr>
<tr><td colspan='2'>Thank you for your interest in Seminar. A RV-VLSI counselor will call you shortly to complete the registration process</td></tr>
<tr><td colspan='2'><br>Due to unusually high call volume and emails to RV-VLSI, our reply to your email might be delayed.<br> Kindly bear with us<br>
In the mean time you may also contact us at 080-40788574 or email us to info@rv-vlsi.com.</td></tr>

</table>";	
mail($email,$subject,$body,$headers); 
mail('info@rv-vlsi.com',$subject,$body,$headers);
              
echo "<script>alert('Thanks for Registering the new seminar');</script>";
echo "<script>parent.location='workshop.php'</script>";
exit; 													;
																			

                      ?>
