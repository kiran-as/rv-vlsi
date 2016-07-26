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
//$course = $_POST['course_name'];
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
<tr><td colspan='2'><br>Due to unusually high call volume and emails to RV-VLSI, our reply to your email might