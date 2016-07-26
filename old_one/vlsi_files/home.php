<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RV</title>

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
                }
            });

 $("#homepagetopform").validate({
                // Specify the validation rules
                rules: {
                    Name: "required",  
                    Email: "required", 
                    MobileNumber:"required"                     
                    
                },
                // Specify the validation error messages
                messages: {
                  
                    Name: "<span>Please enter a First Name</span>",
                    Email: "<span>Please enter a Email Name</span>",
                    MobileNumber: "<span>Please enter a Emamil Name</span>",

                }
            });
            
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
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="vlsi_img/home_banner1.jpg" class="img-resposive" />
                    </div>
                    <div class="item">
                        <img src="vlsi_img/home_banner1.jpg" class="img-resposive" />
                    </div>
                    <div class="item">
                        <img src="vlsi_img/home_banner1.jpg" class="img-resposive" />
                    </div>
                                                            
                </div>
            </div> 
            <div class="pad-l40 pad-r20 pad-t20 white-title p-relative">
                <h1 class="font36">At RV-VLSI You Will Gain <br/><span class="font24"> Interest &#8226; Confidence &#8226; Knowledge &#8226; Experience</span></h1>
                <h3 class="font18 pad-t20">In VLSI Design or Embedded Systems.</h3>
                <p class="pad-t20">Ninety Three percent of job openings in the core industry are in the following areas: FPGA Design, ASIC Design and Embedded Systems. RV-VLSI’s programs prepare you for these jobs.</p>
            </div>
            </div>  
            
            <div class="col-sm-5 hpad10">
                <div class="row hmar5">
                    <div class="col-sm-6 hpad5 mar-b10">
                        <a href="#" class="course-block white-title">
                            <p><span>Embedded Programs</span></p>
                        </a>
                        <a href="#" class="course-block white-title">
                            <p><span>VLSI Programs</span></p>
                        </a>
                       
                        <a href="#" class="course-block white-title mar-t10 box3">
                        <p><span>Program for overseas Students</span></p>
                        </a>                                                
                    </div>
                    <div class="col-sm-6 hpad5">
                        <a href="#" class="course-block white-title box4">
                            <p><span>Placement and Testimonials</span></p>
                        </a>
                        <h3 class="txtc font18 pad-t10">REGISTER FOR 
FREE SEMINARS</h3>
        <form action='' method='POST' id="homepagetopform"> 

  <div class="form-group">    
    <input type="text" class="form-control" placeholder="Name" id='Name' name='Name'>
  </div>
  <div class="form-group">    
    <input type="text" class="form-control" placeholder="Email" id='Email' name='Email'>
  </div>  
  <div class="form-group">    
    <input type="text" class="form-control" placeholder="Mobile Number" id='MobileNumber' name='MobileNumber'>
  </div>  
  <button type="submit" class="btn btn-primary btn-block btn-lg">JOIN NOW</button>
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
                <button type="submit" class="btn btn-primary btn-block btn-lg mar-t20">REGISTER NOW</button>                                                          
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
                <div class="clearfix txtc"><a href="#">View All</a></div>                                
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
                <div class="clearfix txtc"><a href="#">View All</a></div>                                               
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
                      <input type="radio" name="indExp" id="indExp" value="option1"> 0-2
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="indExp" id="indExp" value="option1"> 2+ 
                    </label>               
                </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
            <div class="col-sm-6">
                <div class="form-group">
                    <textarea name="Message" id=""  rows="5" class="form-control" placeholder="Message"></textarea>
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
 
    

</body>

</html>
