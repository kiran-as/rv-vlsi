<?php
include("application/conn.php");
$resultsss = "SELECT * FROM tbl_faqheading";

    $resultc = mysql_query($resultsss);
    $s=0;
    while ($row = mysql_fetch_assoc($resultc)) {
          $arraStudent[$s]["idfaqheading"]  = $row["idfaqheading"];
         $arraStudent[$s]["faqheadingname"] = $row["faqheadingname"];
          $s++;  
        }
?>

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
  $.noConflict();

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
            
 });

function sendEmail()
{
$('#homepagetopform').hide();     
                     $('#courseThankYouMessage').show();
                     var selectedcourse = $('#selectedcourse').val();
                     var Name = $('#Name').val();
                     var Email = $('#Email').val();
                     var MobileNumber = $('#MobileNumber').val();
                     var Message = $('#Message').val();
                     var formData = 'name='+Name+'&Email='+Email+'&MobileNumber='+MobileNumber+'&Message='+Message;

                     $.ajax({
                        url : "questionformmailer.php?"+formData,
                        type: "POST",
                        data : formData, 
                        success: function(result)
                        {
                          $('#courseThankYouMessage').html(" <p>    Dear "+Name+" <br/>Thank you for submiting the question.<br/>An email has been sent to your registered email Id. A counselor will get back to you shortly. You may also write to us at <b>info@rv-vlsi.com</b> or call us at 080-40788574 / +91-7899-617-936 / +91-7899-617-941.<br/>Team RV-VLSI.</p>");
                      }
                    });
  
}
</script> 
</head>

<body>
<?php include('vlsi_include/header.php');?>
    
    
    
    <section class="container">
    <h3 class="font36 txtc">Frequently Asked Questions</h3> 
    <hr/>          
    <h3 class="font18 txtc">We have tried to address most of the questions that you might have. Still have a question?<a href="#" data-toggle="modal" data-target="#detailsForm"> Click Here</a></h3>
          
            
<div role="tabpanel" class="pad-t10">
  <div class="row">
  <div class="col-sm-4">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs faq-tabs" role="tablist">
        <?php for($i=0;$i<count($arraStudent);$i++){?>

        <?php if($i==0){ ?>
    <li role="presentation" class="active">
               <a href="#faq<?php echo $i;?>" aria-controls="faq<?php echo $i;?>" role="tab" data-toggle="tab"><?php echo $arraStudent[$i]['faqheadingname'];?></a></li>

       <?php }  else {?>
    <li role="presentation"><a href="#faq<?php echo $i;?>" aria-controls="faq<?php echo $i;?>" role="tab" data-toggle="tab"><?php echo $arraStudent[$i]['faqheadingname'];?></a></li>

        <?php }?>
    
        <?php }?>
 </ul>
  </div>

  <!-- Tab panes -->
  <div class="col-sm-8">
      <div class="tab-content">
      <?php for($i=0;$i<count($arraStudent);$i++){?>
              <?php if($i==0) { ?>
             <div role="tabpanel" class="tab-pane active" id="faq<?php echo $i;?>">


              <?php }  else {?>
             <div role="tabpanel" class="tab-pane" id="faq<?php echo $i;?>">

              <?php }?>
              <?php $idfaqheading = $arraStudent[$i]["idfaqheading"]; 
                   $resultsss = "SELECT * FROM tbl_faqdetails 
                                       where idfaqheading=$idfaqheading";
                    $resultc = mysql_query($resultsss);
                    $f=0;
                    while ($row = mysql_fetch_assoc($resultc)) {
                          $arraStudentss[$f]["idfaqheading"]    = $row["idfaqheading"];
                         $arraStudentss[$f]["faqquestion"]  = $row["faqquestion"];
                         $arraStudentss[$f]["faqanswers"]   = $row["faqanswers"];
                          $f++;  
                        }
                    for($l=0;$l<count($arraStudentss);$l++){?>
                        <h3 class="font18 mar-t10"><?php echo $arraStudentss[$l]['faqquestion'];?></h3>
                        <p class="pad-b20"><?php echo $arraStudentss[$l]['faqanswers'];?>.</p>
        
                    <?php }?>
            </div>
      <?php }?>
                                                                            
                                                                               
      
  </div>
  </div>

</div>                      
    </section>

    <div class="modal fade" id="detailsForm" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action='' id='homepagetopform'>
      <div class="modal-body txtc" id='courseForm'>
          <div class="form-group">    
            <input type="text" class="form-control" placeholder="Name" id='Name' name='Name'>
              </div>
              <div class="form-group">    
                <input type="text" class="form-control" placeholder="Email" id='Email' name='Email'>
              </div>  
              <div class="form-group">    
                <input type="text" class="form-control" placeholder="Mobile Number" id='MobileNumber' name='MobileNumber'>
              </div>
              <div class="form-group">
                    <textarea name=""  rows="5" placeholder="Please type your question here" class="form-control" id="Message" name="Message"></textarea>
                </div>   
              <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
      </div>
      </form>
      <div class="modal-body txtc" id='courseThankYouMessage' style='display:none'>
           
      </div>
    </div>
  </div>
</div>

      <?php include('vlsi_include/footer.php');?>
     
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
    <script type='text/JavaScript'>
function fngetcoursename(id)
{
  document.getElementById('selectedcourse').value =id;
  
 $('#homepagetopform').show();     
 $('#courseThankYouMessage').hide();

}
function closeFancyBox()
{
    $.noConflict();
  parent.$.fancybox.close();
}
</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="vlsi_js/jquery.min.js"></script>
    <script src="vlsi_js/bootstrap.min.js"></script>
 <script src="vlsi_js/classie.js"></script>    
    <script src="vlsi_js/fixed.js"></script> 
   
</body>
</body>

</html>
