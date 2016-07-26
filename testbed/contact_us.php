<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RV-VLSI, VLSI and Embedded training institute in Bangalore</title>


    <!-- Bootstrap core CSS -->
    <link href="vlsi_css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="vlsi_css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="vlsi_js/jquery-1.10.2.js"></script>
  <script src="vlsi_js/jquery-ui.js"></script>
<script src="vlsi_js/jquery.validate.min.js"></script>

<script type='text/JavaScript'>
$(document).ready(function() {
 $("#contactUsForm").validate({
                // Specify the validation rules
                rules: {
                    Name: "required",  
                    EmailAddress: "required", 
                    MobileNumber: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10

                    },    
                    
                },
                // Specify the validation error messages
                messages: {
                    Name: "<span>Please enter a First Name</span>",
                    EmailAddress: "<span>Please enter a Email </span>",
                    MobileNumber:{
                        required: "Please provide valid Phone no",
                        minlength: "Please provide 10 digit Mobile Number",
                        maxlength: "Only 10 digit Mobile Number is allowed",
                        number: "Please enter only numbers"
                    },
               
                },
                 submitHandler: function() {
                     sendEmail();
                 }
            });
      

function sendEmail()
{
    
    var Name = $('#Name').val();
    var Email = $('#EmailAddress').val();
    var MobileNumber = $('#MobileNumber').val();
    var Message = $('#Message').val();
    var formData = 'name='+Name+'&email='+Email+'&mobile='+MobileNumber+'&msg='+Message;
  $('#contactThankyouId').show();
                 
                  $('#ContactId').hide();
var url = "https://goo.gl/maps/kUqFe";
                    $('#contactThankyouId').html('<p>    Dear '+Name+'<br/>Thank you for contacting RV-VLSI .<br/>An email has been sent to your registered email Id. A counselor will get back to you shortly. You may also write to us at <a href="mailto:info@rv-vlsi.com">info@rv-vlsi.com</a> or call us at 080-40788574 / +91-7899-617-936 / +91-7899-617-941.<br/><a href="' + url + '" target="_blank">Click here for Direction</a><br/>Team RV-VLSI.</p>');
               
      $.ajax({
                url : "contactformmailer.php?"+formData,
                type: "POST",
                data : formData, 
                success: function(result)
                {
                }
            });
  
}      
 });
  </script>    
</head>

<body>
<?php include('vlsi_include/header.php');?>
    
    <section class="container">
           <h3 class="font36 txtc">Contact Us</h3> 
           <hr/> 
    <div class="row pad-t20">
        <div class="col-sm-6 col-md-7 font18 l-height26 pad-b20">
            <p class="pad-l40 locator">36th cross, 26th main<br/>
Jayanagar 4th T Block<br/>
Bangalore - 560041.<br/>
<a href="https://goo.gl/maps/kUqFe" target='_blank'>Click Here for Direction</a></p>
            <p class="pad-t20 phone pad-l40">Working Hours: <br/>
             Monday - Friday : 10:00 AM - 5:30 PM <br/>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saturday : 10:00 AM - 3:30 PM</p>    


            <p class="pad-t20 phone pad-l40">+91-80-4078 8574<br/>+91-7899-617-936 <br/> +91-7899-617-941</p>    

 
            <p class="message pad-l40 pad-t10"><a href="mailto:info@rv-vlsi.com" >info@rv-vlsi.com</a></p>
        </div>
        <div class="col-sm-6 col-md-5 pad-b20" id="ContactId">
            <form action="" id="contactUsForm">
                <div class="form-group">
                    <input type="text" placeholder="Name" id="Name" name="Name" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email Address" id="EmailAddress" name="EmailAddress" class="form-control" />
                </div>   
                <div class="form-group">
                    <input type="text" placeholder="Mobile Number" class="form-control" id="MobileNumber" name="MobileNumber"/>
                </div>    
                <div class="form-group">
                    <textarea name=""  rows="5" placeholder="Message" class="form-control" id="Message" name="Message"></textarea>
                </div> 
                <button type="submit" class="btn btn-primary btn-block btn-lg mar-t30">SUBMIT</button>                                              
            </form>
        </div>
        <div id="contactThankyouId" style="display:none">
          
        </div>
    </div>
    <div class="mar-t20">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.7646534670525!2d77.5906729499797!3d12.922842219399078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15a771b08f65%3A0x36131b509aa218c7!2sRV-VLSI+Design+Center!5e0!3m2!1sen!2sin!4v1447080270373" height="450" frameborder="0" width="100%" style="border:0" allowfullscreen></iframe>
    </div>                     
    </section>
    <?php include('vlsi_include/footer.php');?>
    
</body>

</html>
