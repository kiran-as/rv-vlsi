<?php
include("application/conn.php");
                    			

$idprogram = $_POST['selectedcourse'];
//echo "Select * from tbl_programs where idprograms=$idprogram";
$sqlresult = mysql_query("Select * from tbl_programs where idprograms=$idprogram");
while($row = mysql_fetch_assoc($sqlresult))
{
$course = $row['Title'];
}
$name=$_POST['name'];
$mobile=$_POST['MobileNumber'];
$email=$_POST['Email'];
$Message = $_POST['Message'];
//$course = $_POST['course_name'];
$upddatetime=mktime();
$ip=$_SERVER['REMOTE_ADDR'];
$subject='Register for '.$course;
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\n";
				$headers .= 'From: RV-VLSI <info@rv-vlsi.com>';
				
  mysql_query("insert into tbl_courseenquiries(coursename,name,mobile,email,upddatetime,ip,message) values('".addslashes($course)."',
'".addslashes($name)."','".addslashes($mobile)."','".addslashes($email)."','".$upddatetime."','".$ip."','".$message."')") or die(mysql_error());      


$body ="<table width='100%'><tr><td>Dear $name</td>
<tr><td colspan='2'>
Congratulation for registering to '$course' !<br>
 
An RV-VLSI counselor will call you shortly to complete the admission process and
enroll you into your chosen batch</td></tr>
<tr><td colspan='2'><br>Due to unusually high call volume and emails to RV-VLSI, our reply to your email might be delayed.<br> Kindly bear with us<br>
In the mean time you may also contact us at 080-40788574 or email us to info@rv-vlsi.com.</td></tr>
</table>";	



$emailsent = mail($email,$subject,$body,$headers); 

$body ="<table width='100%'><tr><td>Dear $name</td></tr>
<tr><td> Mobile :$mobile</td></tr>
<tr><td> Email : $email</td></tr>
<tr><td> Message : $Message</td></tr>
<tr><td colspan='2'>
Congratulation for registering to '$course' !<br>
 
An RV-VLSI counselor will call you shortly to complete the admission process and
enroll you into your chosen batch</td></tr>
<tr><td colspan='2'><br>Due to unusually high call volume and emails to RV-VLSI, our reply to your email might be delayed.<br> Kindly bear with us<br>
In the mean time you may also contact us at 080-40788574 or email us to info@rv-vlsi.com.</td></tr>
</table>";	


//mail($email,$subject,$body,$headers); 


mail('info@rv-vlsi.com',$subject,$body,$headers);

	include("application/application/conn.php");	
mysql_query("insert into tbl_rvstudent(name,phone,email,pgdip_coursename,resume_type) values(
'".addslashes($name)."','".addslashes($mobile)."','".addslashes($email)."','999','RV-VLSI Website')") or die(mysql_error());

?>