<?php
		include("application/conn.php");
                      
					  print_R($_POST);
					  exit;
                      
                        $name=$_POST['cont_name1'];
						$mobile=$_POST['cont_mobile1'];
                        $email=$_POST['cont_email1'];
						$course = $_POST['course_name1'];
						$upddatetime=mktime();
						$ip=$_SERVER['REMOTE_ADDR'];
						$subject='Register for '.$course;
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\n";
				$headers .= 'From: RV-VLSI <info@rv-vlsi.com>';
				
  mysql_query("insert into tbl_courseenquiries(coursename,name,mobile,email,upddatetime,ip) values('".addslashes($course)."',
'".addslashes($name)."','".addslashes($mobile)."','".addslashes($email)."','".$upddatetime."','".$ip."')") or die(mysql_error());      


$body ="<table width='100%'><tr><td>Dear $name</td>
<tr><td colspan='2'>
Congratulation for registering to '$course' !<br>
 
An RV-VLSI counselor will call you shortly to complete the admission process and
enroll you into your chosen batch</td></tr>
<tr><td colspan='2'><br>Due to unusually high call volume and emails to RV-VLSI, our reply to your email might be delayed.<br> Kindly bear with us<br>
In the mean time you may also contact us at 080-40788574 or email us to info@rv-vlsi.com.</td></tr>
</table>";		
mail($email,$subject,$body,$headers); 
mail('info@rv-vlsi.com',$subject,$body,$headers);
              
echo "<script>alert('Thanks for Registering for the course');</script>";
echo "<script>parent.location='courses.php'</script>";
exit; 													;
																			

                      ?>
