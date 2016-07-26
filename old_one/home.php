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
                    city:"required",
                     mobileNumber: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10

                    },  
                     be:"required",
                     me:"required",
                     indExp:"required"
                },
                // Specify the validation error messages
                messages: {
                  
                    name: "Please enter a First Name",
                    emailAddress :"Please enter Last Name",
                    city: "Please enter a City",
                    mobileNumber: {
                        required: "Please provide valid Phone no",
                        minlength: "Please provide 10 digit Mobile Number",
                        maxlength: "Only 10 digit Mobile Number is allowed",
                        number: "Please enter only numbers"
                    },
                     be:"Please Select one of the option",
                     me:"Please Select one of the option",
                     indExp:"Please Select one of the option"
                },
                 submitHandler: function() {
                     sendEmailForRegisterDetails();
                 }
            });
      

function sendEmailForRegisterDetails()
{
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
      $.ajax({
                url : "formmailer.php?"+formData,
                type: "POST",
                data : formData, 
                success: function(result)
                {
                   
                  alert('Thank you for contacting us, we will get back to you soon, Within that time please check your email.')
                  parent.location='index.php';
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
    
    var Name = $('#Name').val();
    var Email = $('#Email').val();
    var MobileNumber = $('#MobileNumber').val();
    var formData = 'Name='+Name+'&Email='+Email+'&MobileNumber='+MobileNumber;

      $.ajax({
                url : "indexTopFormMailer.php?"+formData,
                type: "POST",
                data : formData, 
                success: function(result)
                {
                   
                  alert('Thank you for contacting us, we will get back to you soon, Within that time please check your email.')
                   $('#Name').val(' ');
                    $('#Email').val(' ');
                    $('#MobileNumber').val(' ');
                }
            });
  
}      
 });
  </script>
  </head>
<body>
<?php include('vlsi_include/header.php');?>
    
    <section class="banner">
       <div class="container">
        <div class="row hmar10">
           <div class="col-sm-7 hpad10 banner-wrap">
            <div id="carousel-example-generic" class="carousel slide carousel-fade home-banner" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators" style="bottom:-20px;">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    
                    <div class="item active">
                        <img src="vlsi_img/home_banner2.jpg" class="img-resposive" />
                        <div class="pad-l40 pad-r20 pad-t20 white-title banner-copy">
                            <h1 class="font36">Over 2,300 Engineers Trained</h1>
                           <p>&#8226; 90%Placements in VLSI Flagship Program</p>
                            <p>&#8226;85% Placements in Embedded Flagship Program</p>
                            <p>&#8226; Best Placement Assistance through Placement activity with over 75 companies.</p>                      
                              <p>&#8226;Our Alumni works with some of the best Semiconductor and Embedded 

Systems Companies in the world, in key roles.</p>
                            <p>&#8226;Visit our <a href="#">Placement Page</a> to see more details</p>                         
                        </div>                         
                    </div>
                    <div class="item">
                        <img src="vlsi_img/home_banner3.jpg" class="img-resposive" />
                        <div class="pad-l40 pad-r20 pad-t20 white-title banner-copy">
                           <h3 class="font18 pad-t20">India’s Leading Finishing School in VLSI & Microelectronics and Embedded Systems, with in house Industry Standard Research and Design Capabilities and access to Semiconductor Fab Processes.</h3>
                            <p>&#8226; Flagship Course leading to our comprehensive placement assistance program </p>
                            <p>&#8226; Certificate Courses </p>                      
                              <p>&#8226; Part Time Courses for Professionals</p>
                            <p>&#8226; Visit our <a href="courses.php">ourses page</a> for details</p>                         
                        </div>                         
                    </div>
                    <div class="item">
                        <img src="vlsi_img/home_banner1.jpg" class="img-resposive" />
                        <div class="pad-l40 pad-r20 pad-t20 white-title banner-copy">
                            <h1 class="font36">At RV-VLSI You Will Gain <br/><span class="font24"> Interest &#8226; Confidence &#8226; Knowledge &#8226; Experience</span></h1>     
                            <h3 class="font18 pad-t20">In VLSI Design or Embedded Systems.</h3>                                                   
                            <p class="pad-t20">Our Participative and Experiential Learning Model provides excellent exposure to design challenges and instills in our students an ability to be productive in the industry.</p>
                        </div>                        
                    </div>

<div class="item">
                        <img src="vlsi_img/home_banner1.jpg" class="img-resposive" />
                        <div class="pad-l40 pad-r20 pad-t20 white-title banner-copy">
                            <h1 class="font36">Industry Opinion<br/><span class="font24"> See what the Industry has to say, about Us, Our Courses and Talent Sourced
</span></h1>     
                            <h3 class="font18 pad-t20">These Industry Testimonials will tell you why we are trusted by the best VLSI and Embedded Systems Companies for acquiring talent from our course graduates</h3>                                                   
                            <p class="pad-t20">Visit Our <a href="testimonial.php#corporate">Industry Testimonial Page</a> .</p>
                        </div>                        
                    </div>
                    <div class="item">
                        <img src="vlsi_img/home_banner1.jpg" class="img-resposive" />
                        <div class="pad-l40 pad-r20 pad-t20 white-title banner-copy">
                          <h3 class="font18 pad-t20"> Higher Education and Corporate Training Partners for some of the best VLSI and Embedded Systems companies in the industry</h3>
                            <p>&#8226; Induction & On Boarding Training Programs
</p>
                            <p>&#8226; Domain Specific Training Programs
</p>                      
                              <p>&#8226; Re-Certification / Re-Skilling Programs</p>
                        </div>                         
                    </div>
                  
                                                            
                </div>
            </div> 
            </div>  
            
            <div class="col-sm-5 hpad10">
                <div class="row hmar5">
                    <div class="col-sm-6 hpad5 mar-b10">
                        <a href="vlsi-programs.php" class="flipcard white-title" style="height:225px;width:230px;">
 <p class="face front"><span><strong>VLSI PROGRAM</strong></span></p>       
                             <p class="face back"><span>By Learning to Solve Industry Level</span></p>
                        </a>
                     
                        <a href="embedded-program.php" class="flipcard white-title mar-t10 box4" style="height:225px;width:230px;">
 <p class="face front"><span><strong>EMBEDDED PROGRAM</strong></span></p>       
                             <p class="face back"><span>Embedded Programs details</span></p>
                        </a>
                                                                     
                    </div>
                    <div class="col-sm-6 hpad5">
                        <a href="vlsi-programs.php" class="flipcard white-title box3" style="height:225px;width:230px;">
 							<p class="face front"><span><strong>PLACEMENT</strong></span></p>       
                             <p class="face back"><span>Placement details</span></p>
                        </a>
                        <h3 class="txtc font18 pad-t10">Contact Us</h3>
        <form action='' method='POST' id="homepagetopform"> 

  <div class="form-group" style="margin-bottom: 12px;">    
    <input type="text" class="form-control" style="height:33px;" placeholder="Name" id='Name' name='Name'>
  </div>
  <div class="form-group" style="margin-bottom: 12px;">    
    <input type="text" class="form-control" style="height:33px;" placeholder="Email" id='Email' name='Email'>
  </div>  
  <div class="form-group" style="margin-bottom: 12px;">    
    <input type="text" class="form-control" style="height:33px;" placeholder="Mobile Number" id='MobileNumber' name='MobileNumber'>
  </div>  
  <button type="submit" class="btn btn-primary btn-block btn-lg" style="padding:6px;">Contact</button>
</form>                                                                       
                    </div> 
                                       
                </div>
            </div>         
        </div> 
        </div>       
    </section>
    <!--/ Banner Ends Here -->    
    
    <section class="container">
        <h1 class="font36 txtc">Program Offerings</h1>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <h2 class="font24">RV-VLSI course details</h2>
                <div class="list-group">
                  <a href="#" class="list-group-item">                    
                    <p class="list-group-item-text primary-color">&#10140; Advance Diploma in Embedded Systems(ADEMS)</p>
                  </a>
                  <a href="#" class="list-group-item">                    
                    <p class="list-group-item-text primary-color">&#10140; Advanced Diploma in ASIC Design(ADAD )</p>
                  </a>
                  <a href="#" class="list-group-item">                    
                    <p class="list-group-item-text primary-color">&#10140; Diploma in VLSI Design and Verification (VLSI Front End)</p>
                  </a>                                    
                </div>  
                <h2 class="font24 pad-t20">You are eligible to take our courses if you are:</h2>
                <div class="list-group">
                  <a href="#" class="list-group-item">                    
                    <p class="list-group-item-text primary-color">&#10140; An engineer with BE/ME in ECE. Or related branch looking to gain  job oriented skills</p>
                  </a>
                  <a href="#" class="list-group-item">                    
                    <p class="list-group-item-text primary-color">&#10140; An IT Professional looking for a career change to core industry</p>
                  </a>
                  <a href="#" class="list-group-item">                    
                    <p class="list-group-item-text primary-color">&#10140; Planning to go abroad for pursuing higher studies in US, Europe, Australia</p>
                  </a>                                       
                </div>                     
            </div>
            <div class="col-sm-6">
                <h2 class="font24">Students Placed Successfully</h2>
                <ul class="row hmar5 logo-block">
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/broadcom.png" class="img-responsive" /></span></li>
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/cypress.png" class="img-responsive" /></span></li>
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/ibm.png" class="img-responsive" /></span></li>
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/infosys.png" class="img-responsive" /></span></li>
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/intel.png" class="img-responsive" /></span></li>
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/lsi.png" class="img-responsive" /></span></li>
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/magma.png" class="img-responsive" /></span></li>
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/mentor-graphics.png" /></span></li>
                </ul>
                <div class="clearfix txtc"><a href="#" data-toggle="modal" data-target="#all-companies">View All</a></div>                                  
                <h2 class="font24">Students Pursuing Higher Studies at</h2>
                <ul class="row hmar5 logo-block colleges">
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/cincinnati.png" class="img-responsive" /></span></li>
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/illinois.png" class="img-responsive"/></span></li>
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/client-14.png" class="img-responsive" /></span></li>
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/syracuse.png" class="img-responsive" /></span></li>
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/client-15.png" class="img-responsive" /></span></li>
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/university-of-california.png" class="img-responsive"/></span></li>
                    <li class="col-xs-6 col-sm-3 hpad5"><span><img src="vlsi_img/university-of-colorado.png" class="img-responsive" /></span></li>                    
                </ul> 
            </div>
        </div>
        <h1 class="font36 txtc pad-t20">Register Here For More Information</h1>
        <hr> 
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
                      <input type="radio" name="be" id="be" value="Pursuing"> Pursuing 
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="be" id="be" value="Completed"> Completed 
                    </label>               
                </div>
            </div> 
            <div class="col-sm-6">
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
            <div class="col-sm-6">
                <div class="form-group">
                <label for="inputEmail3" class="control-label">Other: </label>    
                    <label class="radio-inline">
                      <input type="radio" name="other" id="other" value="Pursuing"> Pursuing 
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="other" id="other" value="Completed"> Completed 
                    </label>               
                </div>
            </div> 
            <div class="col-sm-6">
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
            <div class="col-sm-6">
                <div class="form-group">
                    <textarea name="msg" id="msg" rows="5" class="form-control" placeholder="Message"></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <h3 class="font18">Contact Us</h3>
                <p>Email: info@rv-vlsi.com</p>
                <p>Phone Number: +91-80-40788574</p>                
            </div> 
            </div> 
            </div>                    
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary btn-block btn-lg mar-t20">SUBMIT</button>              
            </div>                                                                                                       
        </div>       
    </section>
  
   <?php include('vlsi_include/footer.php');?>
 
 <div class="modal fade mar-t70" id="all-companies" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Our Students Placed In Following Companies</h4>
      </div>
      <div class="modal-body txtc">
            <div class="row hmar5">
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/2.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/3.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/4.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/5.png" class="img-responsive brd-all">
                </div>   
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/6.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/7.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/8.png" class="img-responsive brd-all">
                </div>
                <div class="col-xs-6 col-sm-3 hpad5 mar-b10">
                    <img src="vlsi_img/9.png" class="img-responsive brd-all">
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
    <script src="vlsi_js/jquery.min.js"></script>
    <script src="vlsi_js/bootstrap.min.js"></script>
 <script src="vlsi_js/classie.js"></script>    
    <script src="vlsi_js/fixed.js"></script> 

</html>