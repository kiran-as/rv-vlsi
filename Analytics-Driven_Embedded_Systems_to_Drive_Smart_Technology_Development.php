<?php
include("application/conn.php");  

$rand1 = rand(1,9);
$rand2 = rand(1,9);

$rand3 = $rand1+$rand2;

$sql = mysql_query("Select * from tbl_blog where industry_insights=2");
$i=0;
while ($row = mysql_fetch_assoc($sql)) {
  $comments[$i]['name'] = $row['name'];
  $comments[$i]['comments'] = $row['comments'];
  $i++;
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RV-VLSI, VLSI and Embedded training institute in Bangalore</title>
    <!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
<meta property="fb:app_id" content="158904641191757"/>
<meta property="og:site_name" content="rv-vlsi.com"/>
<meta property="og:title" content="Analytics Driven Embedded Systems to Drive Smart Technology Development." />
<meta property="og:description" content="Our world is generating oceanic proportion of data every single day. With Big Data Analytics to extract insights, recognize patterns and useful information from business, engineering and scientific data,s are enabling design engineers in many industries to develop smarter products and services." />
<meta property="og:type" content="website">
<meta property="og:url" content="http://rv-vlsi.com/Analytics-Driven_Embedded_Systems_to_Drive_Smart_Technology_Development.php"/>
<meta property="og:image" content="http://rv-vlsi.com/vlsi_img/fb_logo.png"/>

</head>
    <!-- Bootstrap core CSS -->
    <link href="Blog/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Blog/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css" media="print">
.dontprint
{ display: none; }
</style>
    <style>
    #loading {
   width: 100%;
   height: 100%;
   top: 0px;
   left: 0px;
   position: fixed;
   display: block;
   opacity: 0.7;
   background-color: #000000;
   z-index: 99;
   text-align: center;
}

#loading-image {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 100;
}
</style>
  <script src="vlsi_js/jquery-1.10.2.js"></script>
  <script src="vlsi_js/jquery-ui.js"></script>
<script src="vlsi_js/jquery.validate.min.js"></script>

<script type='text/JavaScript'>
$(document).ready(function() {
  $.noConflict();

$("#detailsRegisterform").validate({
                // Specify the validation rules
                rules: {
                    NameRegister: "required",  
                    EmailRegister: "required", 
                    MobileNumberRegister: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10

                    },    
                    
                },
                // Specify the validation error messages
                messages: {
                  
                    NameRegister: "<span>Please enter a First Name</span>",
                    EmailRegister: "<span>Please enter a Email Name</span>",
                    MobileNumberRegister:{
                        required: "Please provide valid Phone no",
                        minlength: "Please provide 10 digit Mobile Number",
                        maxlength: "Only 10 digit Mobile Number is allowed",
                        number: "Please enter only numbers"
                    },

                },
                submitHandler: function(form) {
                     sendEmailRegister();
                 }
            });

function sendEmailRegister()
{

$('#detailsRegisterform').hide();     
    $('#courseThankYouMessageRegister').show();
    var Name = $('#NameRegister').val();
    var Email = $('#EmailRegister').val();
    var MobileNumber = $('#MobileNumberRegister').val();
    var formData = 'Name='+Name+'&Email='+Email+'&MobileNumber='+MobileNumber;
    var url = "https://goo.gl/maps/kUqFe";
    $('#homeenquiryId').html(' <p>    Dear '+Name+'<br/>Thank you for enquiring at RV-VLSI<br/>An email has been sent to your registered email Id. A counselor will get back to you shortly. You may also write to us at <a href="mailto:info@rv-vlsi.com">info@rv-vlsi.com</a> or call us at 080-40788574 / +91-7899-617-936 / +91-7899-617-941.<br/><a href="' + url + '" target="_blank">Click here for Direction</a><br/>Team RV-VLSI.</p>');
                   
      $.ajax({
                url : "indexTopFormMailer.php?"+formData,
                type: "POST",
                data : formData, 
                success: function(result)
                {
                    $('#NameRegister').val(' ');
                    $('#EmailRegister').val(' ');
                    $('#MobileNumberRegister').val(' ');
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
                submitHandler: function(form) {
                     sendEmail();
                 }
            });
            

function sendEmail()
{
$('#homepagetopform').hide();     
                     $('#courseThankYouMessage').show();
                     var selectedcourse = $('#selectedcourse').val();
                     var Name = $('#Name').val();
                     var Email = $('#Email').val();
                     var MobileNumber = $('#MobileNumber').val();
                     var Message = 'Analytics-Driven Embedded Systems to Drive Smart Technology Development';
                     var URL = 'http://rv-vlsi.com/Analytics-Driven_Embedded_Systems_to_Drive_Smart_Technology_Development.php';

                     var formData = 'selectedcourse='+selectedcourse+'&name='+Name+'&Email='+Email+'&MobileNumber='+MobileNumber+'&Message='+Message+'&URL='+URL;

var url = "https://goo.gl/maps/kUqFe";
                    $('#courseThankYouMessage').html('<p> Thank you for sharing the blog link, <br/> Team RV-VLSI.</p>');
               

                     $.ajax({
                        url : "blogmailer.php?"+formData,
                        type: "POST",
                        data : formData, 
                        success: function(result)
                        {
                          //$('#courseThankYouMessage').html(" <p>    Dear "+Name+" <br/>Thank you for enquiring at RV-VLSI .<br/>An email has been sent to your registered email Id. A counselor will get back to you shortly. You may also write to us at <a href="mailto:info@rv-vlsi.com">info@rv-vlsi.com</a> or call us at 080-40788574 / +91-7899-617-936 / +91-7899-617-941.<br/>Team RV-VLSI.</p>");
                      }
                    });
  
}

$("#homepagetopformComment").validate({
                // Specify the validation rules
                rules: {
                    NameComment: "required",  
                    EmailComment: "required", 
                    MobileNumberComment: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10

                    },  
                    comment: "required",
                    Sum : "required"
                    
                },
                // Specify the validation error messages
                messages: {
                  
                    NameComment: "<span>Please enter a First Name</span>",
                    EmailComment: "<span>Please enter a Email Name</span>",
                    MobileNumberComment:{
                        required: "Please provide valid Phone no",
                        minlength: "Please provide 10 digit Mobile Number",
                        maxlength: "Only 10 digit Mobile Number is allowed",
                        number: "Please enter only numbers"
                    },
                    comment: "<span>Please enter Comments</span>",
                    Sum : "Required"
                },
                submitHandler: function(form) {
                     insertIntoTable();
                 }
            });
       
       function insertIntoTable()
{
                    $('#detailsCommentForm').hide();
                     $('#loading').show();
                     var Name = $('#NameComment').val();
                     var Email = $('#EmailComment').val();
                     var MobileNumber = $('#MobileNumberComment').val();
                     var Comment = $('#comment').val();
                     var formData = 'name='+Name+'&email='+Email+'&mobileNumber='+MobileNumber+'&Comment='+Comment+'&industry_insights=2';

                     $.ajax({
                        url : "insertintocomment.php",
                        type: "POST",
                        data : formData, 
                        success: function(result)
                        {
                          location.reload();
                        }
                    });
  
}     
 });

</script>
<body>
       <?php include('vlsi_include/header.php');?>

    <div id="loading" style="display:none;">
  <img id="loading-image" src="ajax-loader.gif" alt="Loading..." />
</div>
    
    <section class="container">
         <h3 class="font36 txtc">INDUSTRY INSIGHTS</h3> 
</h5>
           <hr/> 
           <div class="row">
               <div class="col-sm-8">
                <h3 class="font24">Analytics Driven Embedded Systems to Drive Smart Technology Development.</h3>
                 <div class="clearfix blog-social dontprint">
                    <ul class="lhs clearfix">
                        <li><!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=158904641191757";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://www.facebook.com/rv.vlsi/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div></li>
<!--                         <li><a href="#" class="linkedin">linkedIn</a></li>
 -->                    </ul>
                    <ul class="rhs clearfix">
                        <li><a href="#" data-toggle="modal" data-target="#detailsForm" class="email" onclick="fngetcoursename('asdf')">Email</a>                
                        <li><a href="#" class="print" onclick="window.print();">Print</a></li>
                        <li><a href="#" class="comment-link" data-target="#detailsCommentForm"><?php echo count($comments);?></a></li>
                    </ul>
                </div>
                <p class="pad-t10">Our world is generating oceanic proportion of data every single day. With Big Data Analytics to extract insights, recognize patterns and useful information from business, engineering and scientific data,s are enabling design engineers in many industries to develop smarter products and services.</p>
                <p class="pad-t10">Engineers today can use analytics to describe and predict a system’s behavior, and further combine predictive analytics with embedded control systems and sensors to automate actions and decisions based on the patterns, insights and information extracted. It uses a Train and Predict methodology.</p>
                <p class="pad-t10">Real Time Embedded Systems are modeled to generate the Trained Model based on the stored data. Later with real time data fed in the trained model is applied to perform real-time analytics. This is helping engineers all over the world develop extremely intelligent real time systems that combine and process sensor generated data with other real time source like the historical data (IOT - Internet of Things), to provide highly accurate results. </p>
               <p style="font-size: 11px;">(Courtesy. <a href="http://insidebigdata.com/2016/06/03/how-to-use-analytics-driven-embedded-systems-to-drive-smart-technology-development/" target="_blank">insidebigdata.com</a>)</p>

                <hr/>
                               <a href="#" data-toggle="modal" data-target="#detailsRegister" class="email">Enroll for our industry trusted VLSI and Embedded Systems Courses</a>  

                <h3 class="font24">Comments</h3>         
                <hr/>
                <?php for($i=0;$i<count($comments);$i++) {
                       $comment = $comments[$i]['comments'];
                       $name = $comments[$i]['name'];
                       ?>

                  <p class="t-block comment-block"><?php echo $comment;?></p>   
                 <p class="primary-color pad-l20 pad-t10 pad-b20"> - <?php echo $name;?></p> 

                <?php } ?>
                <a href="#" data-toggle="modal" data-target="#detailsRegister" class="email">Enroll for our industry trusted VLSI and Embedded Systems Courses</a>  
             
             
              <div class="form-group">    
              <button data-toggle="modal" style="width:228px" class="btn btn-primary btn-block" data-target="#detailsCommentForm" >Click Here to Add Comments</button>
              </div>

                             </div>
               <div class="col-sm-4">
                <h3 class="font18 pad-t10 primary-color">Latest News</h3> <ul class="list-group">
                    <li class="list-group-item">
                        <a href="Analytics-Driven_Embedded_Systems_to_Drive_Smart_Technology_Development.php">Analytics Driven Embedded Systems to Drive Smart Technology Development</a>
                    </li>
                    <li class="list-group-item">
                        <a href="industry_insights.php">Global Semiconductor Industry to see boosted growth from Automobile and Consumer Electronics Industry</a>
                    </li>
                                                                              
                </ul> 
                <h3 class="font18 pad-t10 primary-color">Most Popular</h3> <ul class="list-group">
                    <li class="list-group-item">
                        <a href="Analytics-Driven_Embedded_Systems_to_Drive_Smart_Technology_Development.php">Analytics Driven Embedded Systems to Drive Smart Technology Development</a>
                    </li>
                    <li class="list-group-item">
                        <a href="industry_insights.php">Global Semiconductor Industry to see boosted growth from Automobile and Consumer Electronics Industry</a>
                    </li>                                                         
                </ul>                                  
               </div>
           </div>      
            
    </section>
        <?php include('vlsi_include/footer.php');?>

<div class="modal fade" id="detailsForm" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
      </div>
      <form action='' id='homepagetopform'>
      <div class="modal-body txtc" id='courseForm'>Reciever Details
          <div class="form-group">    
            <input type="text" class="form-control" placeholder="Name" id='Name' name='Name'>
              </div>
              <div class="form-group">    
                <input type="text" class="form-control" placeholder="Email" id='Email' name='Email'>
              </div>  
              <div class="form-group">    
                <input type="text" class="form-control" placeholder="Mobile Number" id='MobileNumber' name='MobileNumber'>
              </div>
               
              <button type="submit" class="btn btn-primary btn-block btn-lg">Send Email</button>
      </div>
      </form>
         <div class="modal-body txtc" id='courseThankYouMessage' style='display:none'>
          <div class="form-group">    
            Thank you for showing interest<br/>
          </div>   
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="detailsCommentForm" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
      </div>
      <form action='' id='homepagetopformComment'>
      <div class="modal-body txtc" id='courseForm'>          
      <div class="form-group">    
            <input type="text" class="form-control" placeholder="Name" id='NameComment' name='NameComment'>
              </div>
              <div class="form-group">    
                <input type="text" class="form-control" placeholder="Email" id='EmailComment' name='EmailComment'>
              </div>  
              <div class="form-group">    
                <input type="text" class="form-control" placeholder="Mobile Number" id='MobileNumberComment' name='MobileNumberComment'>
              </div>
                 <div class="form-group">    
                <textarea class="form-control" placeholder="Add Comment" id='comment' style="height:108px;width:272px;" name='comment'></textarea>
              </div>
              <div class="form-group">  
                <div>
                     <table>
                       <tr> <td style="white-space:nowrap;"><b>Sum of : <?php echo $rand1;?> + </b></td> 
                       <td  style="white-space:nowrap;"><b><?php echo $rand2;?> = </b></td>
                       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" placeholder="Sum" id='Sum' name='Sum' style="width:100px;display: -webkit-inline-box !important;" onblur="fnvalidateSum(<?php echo $rand3;?>)"></td></tr>  
                     </table>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block btn-lg">Add Comments</button>
      </div>
      </form>
      <div class="modal-body txtc" id='courseThankYouMessageComments' style='display:none'>
          <div class="form-group">    
            Thank you for showing interest<br/>
          </div>   
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="detailsRegister" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
      </div>
      <form action='' id='detailsRegisterform'>
      <div class="modal-body txtc" id='courseForm'>
          <div class="form-group">    
            <input type="text" class="form-control" placeholder="Name" id='NameRegister' name='NameRegister'>
              </div>
              <div class="form-group">    
                <input type="text" class="form-control" placeholder="Email" id='EmailRegister' name='EmailRegister'>
              </div>  
              <div class="form-group">    
                <input type="text" class="form-control" placeholder="Mobile Number" id='MobileNumberRegister' name='MobileNumberRegister'>
              </div>
                 <div class="form-group">    
                <textarea class="form-control" placeholder="Add Comment" id='commentRegister' style="height:108px;width:272px;" name='commentRegister'></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-block btn-lg">Enquiry</button>
      </div>
      </form>
      <div class="modal-body txtc" id='courseThankYouMessageRegister' style='display:none'>
          <div class="form-group" id="homeenquiryId">    
            <br/>
          </div>   
      </div>
    </div>
  </div>
</div>
   
</body>
<script type='text/JavaScript'>
function fngetcoursename(id)
{
  
 $('#homepagetopform').show();     
 $('#courseThankYouMessage').hide();

}
function closeFancyBox()
{
    $.noConflict();
  parent.$.fancybox.close();
}

function fnvalidateSum(sum) {

  var totalSum = $('#Sum').val();

  if(sum==totalSum) {

  } else {
    alert('Please Enter the Total Sum of two digits');
    $('#Sum').val('');
    return false;
  }
}
</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="vlsi_js/jquery.min.js"></script>
    <script src="vlsi_js/bootstrap.min.js"></script>
</html>
