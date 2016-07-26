<?php
include('application/conn.php');

    $name=$_POST['Name'];
	$mobile=$_POST['MobileNumber'];
    $email=$_POST['Email'];
    $msg=''; 
	    $subject='Contact Information for :'.$name;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\n";
	$headers .= 'From: RV-VLSI <info@rv-vlsi.com>';
	$time=mktime();
	$ip=$_SERVER['REMOTE_ADDR'];
	$strOccupation='';
	$strOrg='';
	$strAddress='';
	$strComments=$msg;
	mysql_query("insert into rv_contact_enq(ce_name,ce_phone,ce_email,ce_occupation,
	ce_institution,ce_address,ce_comments,ce_date,ce_ip) values(
	'".addslashes($name)."','".addslashes($mobile)."','".addslashes($email)."','".addslashes($strOccupation)."','".addslashes($strOrg)."','".addslashes($strAddress)."','".addslashes($strComments)."','".$time."','".$ip."')") or die(mysql_error());

	$body ="<table width='100%'><tr><td>Name:</td><td>$name</td>
	<tr><td>Mobile:</td><td>$mobile</td></tr>
	<tr><td>Email:</td><td>$email</td></tr>
	<tr><td>Message:</td><td>$msg</td></tr>
	<tr><td colspan='2'>Thank you for your interest in RV-VLSI.<br>Due to unusually high call volume and emails to RV-VLSI, our reply to your email might be delayed.<br> Kindly bear with us<br>
	In the mean time you may also contact us at 080-40788574 or email us to info@rv-vlsi.com.</td></tr></table>";	
	mail($email,$subject,$body,$headers); 
	mail('info@rv-vlsi.com',$subject,$body,$headers);	
		include("application/application/conn.php");	
mysql_query("insert into tbl_rvstudent(name,phone,email,pgdip_coursename) values(
'".addslashes($name)."','".addslashes($mobile)."','".addslashes($email)."','999')") or die(mysql_error());




?>
