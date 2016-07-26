<?php
include("application/conn.php");	
//print_r($_POST);
	  
	$name=$_POST['name'];
	$mobileNumber=$_POST['mobileNumber'];
    $email=$_POST['email'];
    $Comment = $_POST['Comment'];
    $industry_insights=$_POST['industry_insights']; 
$CityComment = $_POST['CityComment'];

mysql_query("insert into tbl_blog
(industry_insights,name,mobile,comments,
email,city) values(
'".addslashes($industry_insights)."','".addslashes($name)."','".addslashes($mobileNumber)."','".addslashes($Comment)."','".addslashes($email)."','".addslashes($CityComment)."')");
		
require '../email/PHPMailer-master/PHPMailerAutoload.php';
$message = "<table><tr><td>New post has been added</td></tr>
          <tr><td>$Comment</td></tr></table>";
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'mail.nanochipsolutions.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "test@nanochipsolutions.com";

//Password to use for SMTP authentication
$mail->Password = "kiran@123";

//Set who the message is to be sent from
$mail->setFrom('info@nanochipsolutions.com', 'Nanochip Solutions');

//Set an alternative reply-to address
//$mail->addReplyTo('askavi6@gmail.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('vprasad@rv-vlsi.com','');
$mail->AddCC('askiran123@gmail.com');
//Set the subject line
$mail->Subject = "New Comment has been added for Blog";

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message);

//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>
