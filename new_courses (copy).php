<?php
include("application/conn.php");
include("courses_list.php");
$resultsss = "SELECT * FROM tbl_programs where Programtype=1 and Active=1 order by Orderforaltera";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $rvvlsicourses[$s]["idprograms"]  = $row["idprograms"];
      $rvvlsicourses[$s]["Description"] = $row["Description"];
       $rvvlsicourses[$s]["Title"]  = $row["Title"];
             $rvvlsicourses[$s]["Description"]  = $row["Description"];
       
      $s++;  
    }

$resultsss = "SELECT * FROM tbl_programs where Programtype=2 and Active=1 order by Orderforaltera";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $weekendcourses[$s]["idprograms"] = $row["idprograms"];
      $weekendcourses[$s]["Description"]  = $row["Description"];
       $weekendcourses[$s]["Title"] = $row["Title"];
             $weekendcourses[$s]["Description"] = $row["Description"];
       
      $s++;  
    }

$resultsss = "SELECT * FROM tbl_programs where Programtype=3 and Active=1 order by Orderforaltera";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $corporatecourses[$s]["idprograms"] = $row["idprograms"];
      $corporatecourses[$s]["Description"]  = $row["Description"];
       $corporatecourses[$s]["Title"] = $row["Title"];
             $corporatecourses[$s]["Description"] = $row["Description"];
       
      $s++;  
    }
    
    
    
$resultsss = "SELECT * FROM tbl_programs where Programtype=0 and Active=1 and AlteraCategory=1";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $alteraonecourses[$s]["idprograms"] = $row["idprograms"];
      $alteraonecourses[$s]["Description"]  = $row["Description"];
       $alteraonecourses[$s]["Title"] = $row["Title"];

      $s++;  
    }
  
    
$resultsss = "SELECT * FROM tbl_programs where Programtype=0 and Active=1 and AlteraCategory=2";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $alteratwocourses[$s]["idprograms"] = $row["idprograms"];
      $alteratwocourses[$s]["Description"]  = $row["Description"];
       $alteratwocourses[$s]["Title"] = $row["Title"];
      $s++;  
    }
  
$resultsss = "SELECT * FROM tbl_programs where Programtype=0 and Active=1 and AlteraCategory=3";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $alterathreecourses[$s]["idprograms"] = $row["idprograms"];
      $alterathreecourses[$s]["Description"]  = $row["Description"];
       $alterathreecourses[$s]["Title"] = $row["Title"];
      $s++;  
    }
    

 
 

//$select = "select * from tbl_programcalendar where idprograms in (select idprograms from tbl_programs where Programtype=1) and active=1";
$select ="SELECT * , DATE_FORMAT( startdate, '%D %M %Y' ) AS stdate
FROM tbl_programcalendar
WHERE idprograms
IN (

SELECT idprograms
FROM tbl_programs
WHERE Programtype !=0
)
AND active =1 order by Startyear,stdate";
$resultprogramsdetails = mysql_query($select);
  
  $k=0;
  while ($row = mysql_fetch_assoc($resultprogramsdetails)) {
      $arrprogramdetails[$k]["idprograms"]  = $row["idprograms"];
          $arrprogramdetails[$k]["idprogramcalendar"] = $row["idprogramcalendar"];
      $arrprogramdetails[$k]["startmonth"]  = $row["startmonth"].''.$row["startweek"].','.$row["Startyear"].'-'.$row["endmonth"].''.$row["endweek"].','.$row["Endyear"];
      if($arrprogramdetails[$k]["startmonth"]=='Jan1st Week,2015-Jan2nd Week,2015')
       $arrprogramdetails[$k]["startmonth"]="Register for next batch";
      $k++;  
    }   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RV</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
<script src="js/jquery.validate.min.js"></script>

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
                     var formData = 'selectedcourse='+selectedcourse+'&name='+Name+'&Email='+Email+'&MobileNumber='+MobileNumber;

                     $.ajax({
                        url : "courseformmailer.php?"+formData,
                        type: "POST",
                        data : formData, 
                        success: function(result)
                        {
                          //$("#div1").html(result);
                      }
                    });
  
}
</script>    
</head>

<body>
<?php include('include/header.php') ;?>
    
    
    
    <section class="container">
    <h3 class="font36 txtc">Our Courses</h3> 
    <hr/>          
<div role="tabpanel" class="pad-t10">
  <div class="row">
  <div class="col-sm-3">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs faq-tabs course-tab" role="tablist">
    <li role="presentation" class="active"><a href="#faq1" aria-controls="faq1" role="tab" data-toggle="tab">VLSI - Full time</a></li>
    <li role="presentation"><a href="#faq2" aria-controls="faq2" role="tab" data-toggle="tab">VLSI - Part Time</a></li>   
    <li role="presentation"><a href="#faq3" aria-controls="faq3" role="tab" data-toggle="tab">VLSI - VTU Program</a></li>
    <li role="presentation"><a href="#faq4" aria-controls="faq4" role="tab" data-toggle="tab">VLSI - Corporate</a></li>   
    <li role="presentation"><a href="#faq5" aria-controls="faq5" role="tab" data-toggle="tab">Embeded - Full Time</a></li>
    <li role="presentation"><a href="#faq6" aria-controls="faq6" role="tab" data-toggle="tab">Embeded - Part Time</a></li>   
    <li role="presentation"><a href="#faq7" aria-controls="faq7" role="tab" data-toggle="tab">Embeded - VTU</a></li>
    <li role="presentation"><a href="#faq8" aria-controls="faq8" role="tab" data-toggle="tab">Embeded - Corporate</a></li>   

  </ul>
  </div>

  <!-- Tab panes -->
  <div class="col-sm-9">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="faq1">
            <ul class="list-group">
                <?php for($i=0;$i<count($rvvlsicourses);$i++){?>

                <li class="list-group-item">
                    <div class="row clearfix">
                        <div class="col-sm-5">
                           <div class="p-hover">
                  <a href="#" data-toggle="modal" data-target="<?php echo '#'.$rvvlsicourses[$i]['idprograms'];?>"><?php echo $rvvlsicourses[$i]['Title'];?></a>
                            <div class="p-block">
                                <p class="mar-b5">No of Students Placed : <span class="primary-color">50</span></p>
                                <p class="mar-b5">Companies Visits : <span class="primary-color">HCL, Wipro, etc...</span></p>
                                <p class="mar-b0">No of  Vacant Positions : <span class="primary-color">Value Goes Here</span></p>
                            </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-5 mar-b0 xs-mar-t10">
                            <select name="program" id="program" class="form-control" >
              <?php for ($k = 0; $k < count($arrprogramdetails); $k++)
                {
                    if ($arrprogramdetails[$k]['idprograms'] == $rvvlsicourses[$i]['idprograms'])
                      { ?>
                <option value="<?php echo $arrprogramdetails[$k]['idprogramcalendar']; ?>">
                  <?php echo $arrprogramdetails[$k]['startmonth']; ?>       
                 </option>         
            <?php }
          } ?> 
                   
        </select>
              </div>
              <div class="col-sm-2 xs-mar-t10">
                  <a href="#" data-toggle="modal" data-target="#detailsForm" class="btn btn-primary btn-block" onclick="fngetcoursename(<?php echo $rvvlsicourses[$i]['idprograms'];?>)">JOIN NOW</a>                
              </div>
                    </div>
                </li>
                <?php }?>
                                            
                </ul>                                              
        </div>
        <div role="tabpanel" class="tab-pane active" id="faq2">
            <ul class="list-group">
    <?php for($i=0;$i<count($weekendcourses);$i++){?>

                <li class="list-group-item">
                    <div class="row clearfix">
                        <div class="col-sm-5">
                           <div class="p-hover">
<a href="#"data-toggle="modal" data-target="<?php echo '#'.$weekendcourses[$i]['idprograms'];?>">
                  <?php echo $weekendcourses[$i]['Title'];?></a>                            <div class="p-block">
                                <p class="mar-b5">No of Students Placed : <span class="primary-color">50</span></p>
                                <p class="mar-b5">Companies Visits : <span class="primary-color">HCL, Wipro, etc...</span></p>
                                <p class="mar-b0">No of  Vacant Positions : <span class="primary-color">Value Goes Here</span></p>
                            </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-5 mar-b0 xs-mar-t10">
                            <select name="program" id="program" class="form-control" >
              <?php for ($k = 0; $k < count($arrprogramdetails); $k++)
                {
                    if ($arrprogramdetails[$k]['idprograms'] == $weekendcourses[$i]['idprograms'])
                      { ?>
                <option value="<?php echo $arrprogramdetails[$k]['idprogramcalendar']; ?>">
                  <?php echo $arrprogramdetails[$k]['startmonth']; ?>       
                 </option>         
            <?php }
          } ?> 
                   
        </select>
              </div>
              <div class="col-sm-2 xs-mar-t10">
                  <a href="#" data-toggle="modal" data-target="#detailsForm" class="btn btn-primary btn-block" onclick="fngetcoursename(<?php echo $rvvlsicourses[$i]['idprograms'];?>)">JOIN NOW</a>                
              </div>
                    </div>
                </li>
                <?php }?>
                                            
                </ul>                                              
        </div>
                                                                   
      </div>
  </div>
  </div>

</div>                      
    </section>
<?php include('include/footer.php') ;?>
<?php for($i=0;$i<count($rvvlsicourses);$i++){?>
<div class="modal fade" id="<?php echo $rvvlsicourses[$i]['idprograms'];?>" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
           
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
           <?php echo $rvvlsicourses[$i]['Description'];?>
      </div>
    </div>
  </div>
</div>
<?php }?>



<?php for($i=0;$i<count($weekendcourses);$i++){?>
<div class="modal fade" id="<?php echo $weekendcourses[$i]['idprograms'];?>" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body txtc">
           <?php echo $weekendcourses[$i]['Description'];?>
      </div>
    </div>
  </div>
</div>
<?php }?>

<?php for($i=0;$i<count($alteraonecourses);$i++){?>
<div class="modal fade" id="<?php echo $alteraonecourses[$i]['idprograms'];?>" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body txtc">
           <?php echo $alteraonecourses[$i]['Description'];?>
      </div>
    </div>
  </div>
</div>
<?php }?>

<?php for($i=0;$i<count($alteratwocourses);$i++){?>
<div class="modal fade" id="<?php echo $alteratwocourses[$i]['idprograms'];?>" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body txtc">
           <?php echo $alteratwocourses[$i]['Description'];?>
      </div>
    </div>
  </div>
</div>
<?php }?>

<?php for($i=0;$i<count($alterathreecourses);$i++){?>
<div class="modal fade" id="<?php echo $alterathreecourses[$i]['idprograms'];?>" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body txtc">
           <?php echo $alterathreecourses[$i]['Description'];?>
      </div>
    </div>
  </div>
</div>
<?php }?>

<?php for($i=0;$i<count($corporatecourses);$i++){?>
<div class="modal fade" id="<?php echo $corporatecourses[$i]['idprograms'];?>" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body txtc">
           <?php echo $corporatecourses[$i]['Description'];?>
      </div>
    </div>
  </div>
</div>
<?php }?>


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
              <button type="submit" class="btn btn-primary btn-block btn-lg">JOIN NOW</button>
      </div>
      </form>
      <div class="modal-body txtc" id='courseThankYouMessage' style='display:none'>
          <div class="form-group">    
            Thank you for showing interest, We will get back to you with in 24 hours, Pleaes check
            your email for further details.
          </div>   
      </div>
    </div>
  </div>
</div>




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
</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
</body>

</html>
