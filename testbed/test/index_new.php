<?php
include("application/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="keywords" content="vlsi,embedded,vlsi training,embedded training, vlsi training in bangalore, embedded training in bangalore" />
    <meta name="keywords" content="vlsi placement institute,embedded placement institute">

    <title>RV-VLSI, VLSI and Embedded training institute in Bangalore</title>

    <!-- Bootstrap core CSS -->
    <link href="vlsi_css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="vlsi_css/main.css" rel="stylesheet">
    <link href="vlsi_css/slick.css" rel="stylesheet">

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
jQuery.validator.addClassRules("form-group has-error", {
  required: true
});

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
                    emailAddress :"Please enter Email Address",
                    mobileNumber: {
                        required: "Please provide valid Phone no",
                        minlength: "Please provide 10 digit Mobile Number",
                        maxlength: "Only 10 digit Mobile Number is allowed",
                        number: "Please enter only numbers"
                    }
                },
                 submitHandler: function() {
                     sendEmailForRegisterDetails();
                 }
            });
      

function sendEmailForRegisterDetails()
{
    $('#homeenquiryIdRegisterDetailsForm').hide();
    $('#homeenquiryIdRegisterDetails').show();
    var name = $('#name').val();
    var emailAddress = $('#emailAddress').val();
    var city = $('#city').val();
    var mobileNumber = $('#mobileNumber').val();
    var be = $('#be:checked').val();//$('#be').val();
    var me = $('#me:checked').val();
    var indExp = $('#indExp:checked').val();
    var msg = $('#msg').val();
    var other = $('#other:checked').val();    
    var country = $('#country').val();
    var state = $('#state').val();     
    var formData = 'name='+name+'&emailAddress='+emailAddress+'&city='+city+'&me='+me+'&msg='+msg+'&be='+be+'&other='+other+'&country='+country+'&state='+state+'&mobileNumber='+mobileNumber;
 	var url = "https://goo.gl/maps/kUqFe";
    $('#homeenquiryIdRegisterDetails').html(' <p>    Dear '+name+' <br/>Thank you for enquiring at RV-VLSI<br/>An email has been sent to your registered email Id. A counselor will get back to you shortly. You may also write to us at <a href="mailto:info@rv-vlsi.com">info@rv-vlsi.com</a> or call us at 080-40788574 / +91-7899-617-936 / +91-7899-617-941.<br/><a href="' + url + '" target="_blank">Click here for Direction</a><br/>Team RV-VLSI.</p>');

      $.ajax({
                url : "formmailer.php?"+formData,
                type: "POST",
                data : formData, 
                success: function(result)
                {

                }
            });
}
 $("#homepagetopform").validate({
                // Specify the validation rules
                rules: {
                    Name: "required",  
                    Email: "required", 
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
                    Email: "<span>Please enter a Email Name</span>",
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
    $('#homepagetopform').hide();
    $('#homeenquiryId').show();
    var Name = $('#Name').val();
    var Email = $('#Email').val();
    var MobileNumber = $('#MobileNumber').val();
    var formData = 'Name='+Name+'&Email='+Email+'&MobileNumber='+MobileNumber;
	var url = "https://goo.gl/maps/kUqFe";
    $('#homeenquiryId').html(' <p>    Dear '+Name+'<br/>Thank you for enquiring at RV-VLSI<br/>An email has been sent to your registered email Id. A counselor will get back to you shortly. You may also write to us at <a href="mailto:info@rv-vlsi.com">info@rv-vlsi.com</a> or call us at 080-40788574 / +91-7899-617-936 / +91-7899-617-941.<br/><a href="' + url + '" target="_blank">Click here for Direction</a><br/>Team RV-VLSI.</p>');
                    
      $.ajax({
                url : "indexTopFormMailer.php?"+formData,
                type: "POST",
                data : formData, 
                success: function(result)
                {
                	$('#Name').val(' ');
                    $('#Email').val(' ');
                    $('#MobileNumber').val(' ');
                }
            });
  
} 

  
 });

function disablemTech(id)
{
    if(id==2)
    {
        $('#mtechDiv').show();
        $('#indDiv').show();
    }
    if(id==1)
    {
        $('#mtechDiv').hide();   
        $('#indDiv').hide();
    }
}  

  </script>
  </head>
<body>
<header>
        <div class="navbar navbar-default top--header" role="navigation">
            <div class="container">
                <div class="row">                    
                        <a href="trust.php" class="col-sm-2 logo"><span></span><img src="vlsi_img/rv_institutes.png" class="img-responsive" /></a> 
                        <a href="index.php" class="col-sm-2 logo"><span></span><img src="vlsi_img/rv_vlsi.png" class="img-responsive" /></a> 
                        <a href="nanochipsolution.php" class="col-sm-2 logo"><span style="display: inline-block;
vertical-align: middle;
height: 22%;
color:#c72055;font-size: 15px;">Training Partner</span><img src="vlsi_img/nanochip.png" class="img-responsive" /></a>  
                        <div class="col-sm-7 col-sm-offset-5 col-md-6 col-md-offset-6 mar-t25 mar-b30">
                        <div class="navbar-right pad-t10">
                           <div class="clearfix">
                                <ul class="pull-left h-small-nav pad-t5">
                                    <li><a href="contact_us.php">Contact Us</a></li>
                                </ul>
                                <ul class="pull-left h-social">
                                    <li><a href="https://www.facebook.com/rv.vlsi" target="_blank">Facebook</a></li>
                                    <li><a href="https://twitter.com/RV_VLSI" target="_blank">Twitter</a></li>
                                    <li><a href="https://www.linkedin.com/company/rv-vlsi-design-center" target="_blank">Linked In</a></li>
                                    <li><a href="https://www.youtube.com/user/rvvlsivideos" target="_blank">Youtube</a></li>
                                </ul>  
                            </div>                                               
                        </div>
                    </div>                 
                </div>
            </div>
            <nav class="main-nav">
                <div class="container p-relative">
                   <div class="clearfix">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
</div>                                           
                         <div id="navbar" class="navbar-collapse collapse clearfix">
                            <ul class="nav navbar-nav header-nav">
                                <li><a href="courses.php" class="pad-sm-t13 pad-sm-b12">Courses</a>
                                </li>
                                <li><a href="our_differentiators.php" class="pad-sm-t13 pad-sm-b12">About Us</a>
                                </li>
                               
                                <li><a href="placements.php" class="pad-sm-t13 pad-sm-b12">Placements</a>
                                </li>
                                <li><a href="testimonial.php" class="pad-sm-t13 pad-sm-b12 pad-r0">Testimonials</a>
                                </li>
                                <li><a href="faq.php" class="pad-sm-t13 pad-sm-b12 pad-r0">FAQ</a>
                                </li>
                                 <li><a href="learning-at-rv-vlsi.php" class="pad-sm-t13 pad-sm-b12 pad-r0">Learning @ RV-VLSI</a>
                                </li>
                                <li><a href="our_partners.php" class="pad-sm-t13 pad-sm-b12 pad-r0">Partners</a>
                                </li>
                                <li><a href="gallery.php" class="pad-sm-t13 pad-sm-b12 pad-r0">Gallery</a>
                                </li>
 <li><a href="work-at-rv-vlsi.php" class="pad-sm-t13 pad-sm-b12 pad-r0">Work@RV-VLSI</a>
                                </li>
                                
                                <li style='display:none'><a href="#" class="pad-sm-t13 pad-sm-b12 pad-r0">B.E Projects</a>
                                </li>                                
                            </ul>                           
                        </div>
                            <div id="sb-search" class="sb-search" style="display:none">
                                <form>
                                    <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search"></span>
                                </form>
                            </div>                                                                   
                </div>
            </nav>
        </div>
    </header>    
    <section class="banner">
       <div class="container">
        <div class="row hmar10">
           <div class="col-md-7 hpad10 banner-wrap">
            <div id="carousel-example-generic" class="carousel slide carousel-fade home-banner" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators" style="bottom:-2px;">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
 <div class="item active">
                        <img src="vlsi_img/home_banner16.jpg" class="img-resposive" />
                        <div class="pad-l40 pad-r20 pad-t20 white-title banner-copy">
                            <h1 class="font36">RV Group of technical education</h1> <br/><br/><br/>
                            <p>India electronic semi conductor association recognises the contribution of 
RV group to technical education in India</p>
                           <p>&#8226;.
Seen in the picture is Dr MK Panduranga shetty president RV group Receiving the life time achievement award from gurudev Sri Sri Ravishankar. Accompaning the president is Venky Prasad founder ceo RV-VLSI.</p>
                        </div>                         
                    </div>

 <div class="item">
                        <img src="vlsi_img/home_banner17.jpg" class="img-resposive" />
                        <div class="pad-l40 pad-r20 pad-t20 white-title banner-copy">
                            <h1 class="font36">Momento to Venkatesh Prasad</h1> <br/><br/><br/>
                           <p>Venky being presented with the momento by ? Head of TI india. ? STPI head.
</p>
                        </div>                         
                    </div>


                    
                    <div class="item">
                        <img src="vlsi_img/home_banner12.jpg" class="img-resposive" />
                        <div class="pad-l40 pad-r20 pad-t20 white-title banner-copy">
                            <h1 class="font36">Over 2,300 Engineers Trained</h1>
                           <p>&#8226; Our Alumni works with some of the best Semiconductor and Embedded 

Systems Companies in &nbsp;&nbsp;the world.</p>
                            <p>&#8226; Visit our <a href="placements.php">Placement Page</a> to see more details</p>                         
                        </div>                         
                    </div>
                    <div class="item">
                        <img src="vlsi_img/home_banner21.jpg" class="img-resposive" />
                        <div class="pad-l40 pad-r20 pad-t20 white-title banner-copy">
                            <h1 class="font36">India’s Leading Finishing School in VLSI & Embedded Systems.</h1>
                           <p>&#8226; Full-time and Part-time courses for Graduates and working professionals.</p>
                            <p>&#8226; Visit our <a href="courses.php">Courses page</a> for details</p>                         
                        </div>                         
                    </div>
           
                    <div class="item">
                        <img src="vlsi_img/home_banner13.jpg" class="img-resposive" />
                        <div class="pad-l40 pad-r20 pad-t20 white-title banner-copy">
                            <h1 class="font36">At RV-VLSI, acquire skills and gain experience</h1>
                            <p>&#8226; To know more <a href="learning-at-rv-vlsi.php">click Here</a></p>
                        </div>                         
                    </div>


                    <div class="item">
                        <img src="vlsi_img/home_banner11.jpg" class="img-resposive" />
                        <div class="pad-l40 pad-r20 pad-t20 white-title banner-copy">
                            <h1 class="font36">Endorsed by Industry</h1>    
                            <p>&#8226; See what the Industry has to say, about Us, Our Courses and our Engineers.
                             <p>&#8226; Visit Our <a href="testimonial.php#corporate">Industry Testimonial Page</a> .</p>
                        </div>                        
                    </div>

                    <div class="item">
                        <img src="vlsi_img/home_banner3.jpg" class="img-resposive" />
                        <div class="pad-l40 pad-r20 pad-t20 white-title banner-copy">
                           <h1 class="font36">Planning your higher studies Abroad?</h1>
                            <p>&#8226; Talk to us</p>
                           <p>&#8226;  <a href="#all-universities">Click here</a> to see the university our students are pursuing higher studies at .</p>

                        </div>                         
                    </div>
                  
                                                            
                </div>
            </div> 
            </div>  
            
            <div class="col-md-5 hpad10">
                <div class="row hmar5">
                    <div class="col-sm-6 hpad5 mar-b10">
                        <a href="vlsi-programs.php" class="flipcard white-title box2" style="height:205px;">
 <p class="face front"><span><strong style="font-size:25px";>VLSI PROGRAMS</strong></span></p>       
                             <p class="face back"><span>Gateway to rewarding careers in VLSI</span></p>
                        </a>
                     
                        <a href="embedded-program.php" class="flipcard white-title mar-t10 box4" style="height:215px;">
 <p class="face front"><span><strong style="font-size:25px";>EMBEDDED PROGRAMS</strong></span></p>       
                             <p class="face back"><span>Gateway to rewarding careers in Embedded Systems</span></p>
                        </a>
                                                                     
                    </div>
                    <div class="col-sm-6 hpad5">
                        <a href="testimonial.php" class="flipcard white-title box3" style="height:205px;">
 							<p class="face front"><span><strong style="font-size:25px";>STUDENT TESTIMONIALS</strong></span></p>       
                             <p class="face back">
                                 <span>
                                    <i id="carousel-example-company" class="carousel slide dblock overfl" data-ride="carousel" data-interval="3000">
                                        <i class="carousel-inner" role="listbox">
                                            <i class="item ifont active" style="text-align:left;">
                                                "Working in KPIT in Embedded domain was possible due to RV-VLSI" <br/> <i class="ifontby" style="text-align:right !important;"> - Tilak Saad Rathod</i><br/>
                                            </i>
                                            <i class="item ifont" style="text-align:left;">
                                                    
                                                "The level of knowledge and exposure imparted at RV-VLSI is really amazing."<br/>  <i class="ifontby"> - Anjana N S </i><br/>
                                            </i>
                                            <i class="item ifont" style="text-align:left;">
                                                "Headline: If you dream a career in VLSI the next stop is RV-VLSI." <br/>  <i class="ifontby"> - Prakash C S</i><br/>
                                            </i>
                                            <i class="item ifont" style="text-align:left;">
                                                    
                                                "Quality of training in RV-VLSI Design Center is Exceptional."<br/>  <i class="ifontby"> - Navaneeth C P</i> <br/>
                                            </i>
                                            <i class="item ifont" style="text-align:left;">
                                                "Impressed by teaching methodology and exposure to world class tools" <br/>  <i class="ifontby"> - V.Naveen Reddy</i><br/>
                                            </i>
                                            <i class="item ifont" style="text-align:left;">
                                                    
                                                "I got good teaching and exposure to EDA tools at RV-VLSI."<br/>  <i class="ifontby"> -Siva Kumar N</i> <br/>
                                            </i>
                                           
                                        </i> 
                                    </i>
                                </span>
                            </p>
                        </a>
                       
        <form action='' method='POST' id="homepagetopform" > 
 <h3 class="txtc font18">Enquiry Here</h3>
  <div class="form-group" style="margin-bottom: 12px;">    
    <input type="text" class="form-control" style="height:33px;" placeholder="Name" id='Name' name='Name'>
  </div>
  <div class="form-group" style="margin-bottom: 12px;">    
    <input type="text" class="form-control" style="height:33px;" placeholder="Email" id='Email' name='Email'>
  </div>  
  <div class="form-group" style="margin-bottom: 12px;">    
    <input type="text" class="form-control" style="height:33px;" placeholder="Mobile Number" id='MobileNumber' name='MobileNumber'>
  </div>  
  <button type="submit" class="btn btn-primary btn-block btn-lg" style="padding:6px;">Submit</button>
</form>     
<div id="homeenquiryId" style="display:none;">
</div>                                                                  
                    </div> 
                                       
                </div>
            </div>         
        </div> 
        </div>       
    </section>
    <!--/ Banner Ends Here -->    
    
    <section class="container"  id="all-universities">
       <div class="clearfix">
            
                <h2 class="font24 txtc">Students Placed Successfully</h2>
                <hr />
                <div class="clearfix">
                  <div class="c-slider txtc">
                    <div><span><img src="vlsi_img/broadcom.png" alt="" class="img-responsive"></span></div>
                    <div><span><img src="vlsi_img/cypress.png" alt="" class="img-responsive"></span></div>                       
                    <div><span><img src="vlsi_img/ibm.png" alt="" class="img-responsive"></span></div>                       
                    <div><span><img src="vlsi_img/infosys.png" alt="" class="img-responsive"></span></div>                       
                    <div><span><img src="vlsi_img/lsi.png" alt="" class="img-responsive"></span></div>
                    <div><span><img src="vlsi_img/magma.png" alt="" class="img-responsive"></span></div>                       
                    <div><span><img src="vlsi_img/mentor-graphics.png" alt="" class="img-responsive"></span></div>                                              
                  </div>                     
                </div>
                <div class="clearfix txtc mar-t20"><a href="#" data-toggle="modal" data-target="#all-companies">View All</a></div>                                   <h2 class="font24 txtc">Students Pursuing Higher Studies at</h2>
                <hr />                             
                <div class="clearfix">
                  <div class="c-slider txtc">

                    <div><span><img src="vlsi_img/ur.png" alt="" class="img-responsive"></span></div>
                    <div><span><img src="vlsi_img/cincinnati.png" alt="" class="img-responsive"></span></div>
                    <div><span><img src="vlsi_img/illinois.png" alt="" class="img-responsive"></span></div>                       
                    <div><span><img src="vlsi_img/client-14.png" alt="" class="img-responsive"></span></div>                       
                    <div><span><img src="vlsi_img/syracuse.png" alt="" class="img-responsive"></span></div>                       
                    <div><span><img src="vlsi_img/client-15.png" alt="" class="img-responsive"></span></div>        
                    <div><span><img src="vlsi_img/university-of-california.png" alt="" class="img-responsive"></span></div>
                    <div><span><img src="vlsi_img/university-of-colorado.png" alt="" class="img-responsive"></span></div>                                                                                       
                  </div>                     
                </div>                
                <div class="clearfix txtc mar-t20"><a href="#"  data-toggle="modal" data-target="#all-university"></a></div>                                                           
        </div>  
        <h1 class="font36 txtc pad-t20">Register Here For More Information</h1>
        <hr> 
        <div id="homeenquiryIdRegisterDetailsForm">
        <form action='' method='POST' id="homepage"> 
        <div class="row">
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
            <div class="col-sm-6">
                <div class="form-group">    
                    <input type="text" class="form-control" placeholder="State" id='state' name='state'>
                </div>
            </div> 
            <div class="col-sm-6">
               <div class="form-group">    
                    <input type="text" class="form-control" placeholder="City" id='city' name='city'>
                </div>
            </div> 
            <div class="col-sm-6">
               <div class="form-group">    
                    <input type="text" class="form-control" placeholder="Country" id='country' name='country'>
                </div>
            </div> 
            <div class="col-sm-6">
                <div class="form-group">
                <label for="inputEmail3" class="control-label">B.E/B.Tech: </label>    
                    <label class="radio-inline">
                      <input type="radio" name="be" id="be" value="Pursuing" onclick="disablemTech(1);"> Pursuing 
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="be" id="be" value="Completed" onclick="disablemTech(2);"> Completed 
                    </label>               
                </div>
            </div> 
            <div class="col-sm-6" id="mtechDiv">
                <div class="form-group">
                <label for="inputEmail3" class="control-label">M.E/M.Tech: </label>    
                    <label class="radio-inline">
                      <input type="radio" name="me" id="me" value="Pursuing"> Pursuing 
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="me" id="me" value="Completed"> Completed 
                    </label>               
                </div>
            </div>
          
            <div class="col-sm-6" id="indDiv">
                <div class="form-group">
                <label for="inputEmail3" class="control-label">Industry Experience: </label>    
                    <label class="radio-inline">
                      <input type="radio" name="indExp" id="indExp" value="0-2"> 0-2
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="indExp" id="indExp" value="2+"> 2+ 
                    </label>               
                </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
            <div class="col-sm-12">
                <div class="form-group">
                    <textarea name="msg" id="msg" rows="5" class="form-control" placeholder="Type your message here."></textarea>
                </div>
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
        </form>
        </div>
        <div id="homeenquiryIdRegisterDetails"></div>  
    </section>
  
   <?php include('vlsi_include/footer.php');?>
 
 <div class="modal fade mar-t70" id="all-companies" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Some of the companies where our Students are Placed</h4>
      </div>
      <div class="modal-body txtc">
            <div class="row hmar5">
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/1.png" class="img-responsive brd-all" Title="">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/2.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/3.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/4.png" class="img-responsive brd-all">
                </div>   
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/5.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/6.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/7.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/8.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/9.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/10.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/11.png" class="img-responsive brd-all">
                </div>   
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/12.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/13.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/14.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/15.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/16.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/17.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/18.png" class="img-responsive brd-all">
                </div>   
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/19.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/20.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/21.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/22.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/23.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/24.png" class="img-responsive brd-all">
                </div>   
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/25.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/26.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/27.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/28.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/29.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/30.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/31.png" class="img-responsive brd-all">
                </div>   
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/32.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/33.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/customerlogos/single/34.png" class="img-responsive brd-all">
                </div>
                                        
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/9.png" class="img-responsive brd-all">
                </div>                                                              
            </div>
      </div>
    </div>
  </div>
</div>       

 <div class="modal fade mar-t70" id="all-university" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Higher Studies</h4>
      </div>
      <div class="modal-body txtc">
            <div class="row hmar5">
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/cincinnati.png" class="img-responsive" style="width:225px;">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/illinois.png" class="img-responsive" style="width:225px;">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/client-14.png" class="img-responsive" style="width:225px;">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/syracuse.png" class="img-responsive" style="width:225px;">
                </div>   
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/university-of-california.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/client-15.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/university-of-colorado.png" class="img-responsive brd-all">
                </div>                                                            
            </div>
      </div>
    </div>
  </div>
</div>

</body>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="vlsi_js/bootstrap.min.js"></script>


    <script src="vlsi_js/uisearch.js"></script>
    <script src="vlsi_js/slick.min.js"></script>
    <script src="vlsi_js/uisearch.js"></script>
    <script src="vlsi_js/slick.min.js"></script>

<script>
new UISearch( document.getElementById( 'sb-search' ) );
$(document).ready(function(){
$('.c-slider').slick({
dots: false,
infinite: true,
speed: 700,
slidesToShow: 5,
slidesToScroll: 1, 
autoplay: true,
autoplaySpeed: 800, 
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 4,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 2
}
}
]
});
}); 
</script>
</html>
