<?php 
include("application/conn.php");

if($_POST)
{
 
  $name = $_POST['name'].'-- Years of exp'.$_POST['be'];
  $emailAddress = $_POST['emailAddress'];
  $mobileNumber = $_POST['mobileNumber'];
  $domainExpertise='';
  for($i=0;$i<count($_POST['domainExpertise']);$i++)
  {
    $domainExpertise = $domainExpertise.','.$_POST['domainExpertise'][$i];
  }
 // $domainExpertise = $_POST['domainExpertise'];
  $msg = $_POST['msg'];

  mysql_query("insert into tbl_work_rvvlsi(name,
    emailAddress,
    mobileNumber,
    domainExpertise,
    msg) values(
'".addslashes($name)."','".addslashes($emailAddress)."','".addslashes($mobileNumber)."','$domainExpertise',
'$msg')") or die(mysql_error());
  echo "<script>alert('Thanks for contacting us, Will get back to you shortly');</script>";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="og:title" content="Explore Career Opportunities with RV-VLSI">
<meta name="og:type" content="website">
<meta name="og:url" content="http://rv-vlsi.com">
<meta name="og:image" content="http://rv-vlsi.com/vlsi_img/rv_vlsi_whatsapp_5.png">
    <title> Explore Career Opportunities with RV-VLSI</title>
 <meta name="keywords" content="Part time and full time jobs for Experienced Professionals in VLSI and Embedded Systems" />
    <meta name="keywords" content="Lead RTL Verification Engineer, Chip level physical design engineer, Full custom layout design engineer">
<meta name="keywords" content="RV-VLSI VLSI and Embedded Jobs for Experienced Engineers" />
    <!-- Bootstrap core CSS -->
    <link href="vlsi_css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="vlsi_css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="vlsi_js/jquery.min.js"></script>
  <script src="vlsi_js/jquery-1.10.2.js"></script>
  <script src="vlsi_js/jquery-ui.js"></script>
<script src="vlsi_js/jquery.validate.min.js"></script>

<script type='text/JavaScript'>
$(document).ready(function() {


            $("#homepage").validate({
                // Specify the validation rules
                rules: {
                    name: "required",
                    emailAddress: "required",
                  
                     mobileNumber: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10

                    }
                },
                // Specify the validation error messages
                messages: {
                  
                    name: "Please enter a First Name",
                    emailAddress :"Please enter Last Name",
                    mobileNumber: {
                        required: "Please provide valid Phone no",
                        minlength: "Please provide 10 digit Mobile Number",
                        maxlength: "Only 10 digit Mobile Number is allowed",
                        number: "Please enter only numbers"
                    }
                }
            });
      

function sendEmailForRegisterDetails()
{
  $('#labelformDiv').hide();
    $('#homeenquiryId').show();
    var name = $('#name').val();
    var emailAddress = $('#emailAddress').val();
    var mobileNumber = $('#mobileNumber').val();
    var be = $('#domainExpertise:checked').val();//$('#be').val();
 
    var me = $('#me:checked').val();
    var indExp = $('#indExp:checked').val();
    var msg = $('#msg').val();
    var other = $('#other:checked').val();    
    var country = $('#country').val();
    var state = $('#state').val();     
    var formData = 'name='+name+'&emailAddress='+emailAddress+'&city='+city+'&me='+me+'&msg='+msg+'&be='+be+'&other='+other+'&country='+country+'&state='+state+'&mobileNumber='+mobileNumber;
var url = "https://goo.gl/maps/kUqFe";
                     $('#homeenquiryId').html('<p>    Dear '+name+'<br/>Thank you for contacting RV-VLSI .<br/>An email has been sent to your registered email Id. A counselor will get back to you shortly. You may also write to us at <b>info@rv-vlsi.com</b> or call us at 080-40788574 / +91-7899-617-936 / +91-7899-617-941.<br/><a href="' + url + '" target="_blank">Click here for Direction</a><br/>Team RV-VLSI.</p>');
   
      $.ajax({
                url : "formmailer.php?"+formData,
                type: "POST",
                data : formData, 
                success: function(result)
                {
                   
                    //$('#homeenquiryId').html(" <p>    Dear "+Name+" <br/>Thank you for enquiring at RV-VLSI<br/>An email has been sent to your registered email Id. A counselor will get back to you shortly. You may also write to us at <b>info@rv-vlsi.com</b> or call us at 080-40788574 / +91-7899-617-936 / +91-7899-617-941.<br/>Team RV-VLSI.</p>");

                  //parent.location='index.php';
                }
            });
}   
 });
  </script>
  </head>

<body>
        <?php include('vlsi_include/header.php');?>
    
    
    
     
    <section class="container">
           <h3 class="font36 txtc">WORK @ RV-VLSI</h3> 
          <h3 class="font18 txtc">Are you thinking of taking a sabbatical ?</h3> 
          <h3 class="font18 txtc">Are you looking for a good work-life balance ?</h3>
           <h3 class="font18 txtc">Are you tired of working in the industry, Do you want a break ?</h3>
           <h3 class="font18 txtc">Are you eager to share your experience with passionate youngster ?</h3>


           <hr/> 
            <p class="font18">If you answer <span stle="font-size:20px;">YES</span> to <span stle="font-size:20px;"><u>ANY</u></span> of the above question, we want to talk to you. You can make a big difference in shaping the minds of young engineers. Your Industry experience can be put to good use in the nobel profession of teaching.</p>

            <h1 class="font36 txtc pad-t20">Register Here For More Information</h1>
        <hr> 
        <form action='' method='POST' id="homepage"> 
        <div class="row" id="labelformDiv">
            <div class="col-sm-6">
                <div class="form-group">    
                    <input type="text" class="form-control" placeholder="Name" id='name' name='name'>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">    
                    <input type="Email" class="form-control" placeholder="Email Address" id='emailAddress' name='emailAddress'>
                </div>
            </div>   
            <div class="col-sm-6">
                <div class="form-group">    
                    <input type="text" class="form-control" placeholder="Mobile Number" id='mobileNumber' name='mobileNumber'>
                </div>
            </div> 
           
           
             <div class="col-sm-12">
                <div class="form-group">
                <label for="inputEmail3" class="control-label">Relevant Experience</label>    
                    <label class="radio-inline">
                      <input type="radio" name="be" id="be" value="5-7"> 5 to 7 yrs 
                    </label>
                     <label class="radio-inline">
                      <input type="radio" name="be" id="be" value="8-10"> 8 to 10 yrs 
                    </label> 
                    <label class="radio-inline">
                      <input type="radio" name="be" id="be" value="10-15"> 10 to 15 yrs 
                    </label>  
                    <label class="radio-inline">
                      <input type="radio" name="be" id="be" value="15+"> >15 yrs 
                    </label>  
                </div>
            </div>
           <div class="col-sm-12">
                <div class="form-group">
                <label for="inputEmail3" class="control-label">Domain Expertise</label>    
                    <label class="radio-inline">
                      <input type="checkbox" name="domainExpertise[]" id="domainExpertise[]" value="PD"> Physical Design 
                    </label>
                    <label class="radio-inline">
                      <input type="checkbox" name="domainExpertise[]" id="domainExpertise[]" value="RTL"> RTL Verification 
                    </label>    
                     <label class="radio-inline">
                      <input type="checkbox" name="domainExpertise[]" id="domainExpertise[]" value="FC"> Full Custom 
                    </label> 
                     <label class="radio-inline">
                      <input type="checkbox" name="domainExpertise[]" id="domainExpertise[]" value="Embedded System"> Embedded System
                    </label>           
                </div>
            </div> 
            
            <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <textarea name="msg" id="msg" rows="5" class="form-control" placeholder="Message"></textarea>
                </div>
          
            </div> 
            </div> 
            <div class="col-sm-3">
            </div>                   
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary btn-block btn-lg mar-t20">SUBMIT</button>              
            </div> 
             <div class="col-sm-3">
            </div> 

        </div> 
         <div id="homeenquiryId">
            </div>  
</form>
    </section>
  <?php include('vlsi_include/footer.php');?>
        
<!-- Modal -->


</body>
  <script src="vlsi_js/bootstrap.min.js"></script>


    <script src="vlsi_js/uisearch.js"></script>
    <script src="vlsi_js/slick.min.js"></script>
    <script src="vlsi_js/uisearch.js"></script>
    <script src="vlsi_js/slick.min.js"></script>
</html>
