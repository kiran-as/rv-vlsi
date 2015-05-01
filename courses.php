<?php
include("application/conn.php");
$resultsss = "SELECT * FROM tbl_programs where Programtype=1 and Active=1 order by Orderforaltera";

	$resultc = mysql_query($resultsss);
	$s=0;
	while ($row = mysql_fetch_assoc($resultc)) {
		  $rvvlsicourses[$s]["idprograms"]	= $row["idprograms"];
		  $rvvlsicourses[$s]["Description"]	= $row["Description"];
		   $rvvlsicourses[$s]["Title"]	= $row["Title"];
		   		   $rvvlsicourses[$s]["Description"]	= $row["Description"];
		   
		  $s++;  
		}

$resultsss = "SELECT * FROM tbl_programs where Programtype=2 and Active=1 order by Orderforaltera";

	$resultc = mysql_query($resultsss);
	$s=0;
	while ($row = mysql_fetch_assoc($resultc)) {
		  $weekendcourses[$s]["idprograms"]	= $row["idprograms"];
		  $weekendcourses[$s]["Description"]	= $row["Description"];
		   $weekendcourses[$s]["Title"]	= $row["Title"];
		   		   $weekendcourses[$s]["Description"]	= $row["Description"];
		   
		  $s++;  
		}

$resultsss = "SELECT * FROM tbl_programs where Programtype=3 and Active=1 order by Orderforaltera";

	$resultc = mysql_query($resultsss);
	$s=0;
	while ($row = mysql_fetch_assoc($resultc)) {
		  $corporatecourses[$s]["idprograms"]	= $row["idprograms"];
		  $corporatecourses[$s]["Description"]	= $row["Description"];
		   $corporatecourses[$s]["Title"]	= $row["Title"];
		   		   $corporatecourses[$s]["Description"]	= $row["Description"];
		   
		  $s++;  
		}
		
		
		
$resultsss = "SELECT * FROM tbl_programs where Programtype=0 and Active=1 and AlteraCategory=1";

	$resultc = mysql_query($resultsss);
	$s=0;
	while ($row = mysql_fetch_assoc($resultc)) {
		  $alteraonecourses[$s]["idprograms"]	= $row["idprograms"];
		  $alteraonecourses[$s]["Description"]	= $row["Description"];
		   $alteraonecourses[$s]["Title"]	= $row["Title"];

		  $s++;  
		}
	
		
$resultsss = "SELECT * FROM tbl_programs where Programtype=0 and Active=1 and AlteraCategory=2";

	$resultc = mysql_query($resultsss);
	$s=0;
	while ($row = mysql_fetch_assoc($resultc)) {
		  $alteratwocourses[$s]["idprograms"]	= $row["idprograms"];
		  $alteratwocourses[$s]["Description"]	= $row["Description"];
		   $alteratwocourses[$s]["Title"]	= $row["Title"];
		  $s++;  
		}
	
$resultsss = "SELECT * FROM tbl_programs where Programtype=0 and Active=1 and AlteraCategory=3";

	$resultc = mysql_query($resultsss);
	$s=0;
	while ($row = mysql_fetch_assoc($resultc)) {
		  $alterathreecourses[$s]["idprograms"]	= $row["idprograms"];
		  $alterathreecourses[$s]["Description"]	= $row["Description"];
		   $alterathreecourses[$s]["Title"]	= $row["Title"];
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
		  $arrprogramdetails[$k]["idprograms"]	= $row["idprograms"];
		  	  $arrprogramdetails[$k]["idprogramcalendar"]	= $row["idprogramcalendar"];
		  $arrprogramdetails[$k]["startmonth"]	= $row["startmonth"].''.$row["startweek"].','.$row["Startyear"].'-'.$row["endmonth"].''.$row["endweek"].','.$row["Endyear"];
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
</head>

<body>
<?php include('include/header.php') ;?>
    <section class="container">
    <h3 class="font36 txtc">Our Courses</h3> 
    <hr/>          
    <div class="row">
        <div class="col-sm-12 col-md-6 pad-b20">
            <h3 class="font18 l-height26">Our programs will help you gain the skills required for 93% of all fresher Job openings in the core industry. When taught by veterans with rich industry experience, it is not difficult to acquire the skills needed to get a job in the core industry. We train you on the many different approaches used in the industry to solve design problems.</h3>
            <p>We specialize in learning-through-experience method of teaching; inculcate the habit of out-of-box thinking and applied learning by using our proprietary course material and concept labs.</p>
            <p>At RV-VLSI you get to interact with experts who share with you numerous tips and shortcuts to deal with challenging design problems based on their work experience (something which is not possible from text books or video lectures). This will help you understand concepts and gain experience in problem solving; you must master these skills to clear written tests and crack a job interview.</p>
            <p>The following programs are offered to students, Industry Professionals, Corporates and Colleges. Click on each program for more details.</p>
        </div>
        <div class="col-sm-12 col-md-6 clearfix pad-b20">
            <img src="img/course_img.jpg" class="img-responsive pull-right" />
        </div>
    </div> 
    <hr>
    <h3 class="font18 pad-t10">RV-VLSI PROGRAMS</h3> 
    <p>Add value to your academic degree by acquiring the skills to be industry ready or to prepare for higher studies abroad. We have a course that's right for you.</p>
    <h3 class="font18 pad-t10 primary-color">RV-VLSI:Advanced Diploma and Diploma Programs -(Full time program)</h3>    
    <ul class="list-group">
<input type="text"  class="input-txt" name="selectedcourse" id="selectedcourse" value=''/>
    <?php for($i=0;$i<count($rvvlsicourses);$i++){?>
	    <li class="list-group-item">
	        <div class="row clearfix">
	            <div class="col-sm-6 sm-mar-t10">
	                <a href="#" data-toggle="modal" data-target="<?php echo '#'.$rvvlsicourses[$i]['idprograms'];?>"><?php echo $rvvlsicourses[$i]['Title'];?></a>
	            </div>
	            <div class="form-group col-sm-4 mar-b0 xs-mar-t10">
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
    <?php } ?>
    </ul> 
    <h3 class="font18 pad-t20 primary-color">Weekend Courses -(Part time courses for working professionals)</h3>    
    <ul class="list-group">
    <?php for($i=0;$i<count($weekendcourses);$i++){?>
	    <li class="list-group-item">
	        <div class="row clearfix">
	            <div class="col-sm-6 sm-mar-t10">
	                <a href="#"data-toggle="modal" data-target="<?php echo '#'.$weekendcourses[$i]['idprograms'];?>">
	                <?php echo $weekendcourses[$i]['Title'];?></a>
	            </div>
	            <div class="form-group col-sm-4 mar-b0 xs-mar-t10">
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
<a href="#" data-toggle="modal" data-target="#detailsForm" class="btn btn-primary btn-block" onclick="fngetcoursename(<?php echo $weekendcourses[$i]['idprograms'];?>)">JOIN NOW</a>                	            </div>
	        </div>
	    </li>
    <?php } ?>           
    </ul>   
    <h3 class="font18 pad-t20 primary-color">Altera Programs -(Altera certified programs)</h3>    
    <ul class="list-group">
    <?php for($i=0;$i<count($alteraonecourses);$i++){?>							
        <li class="list-group-item">
            <div class="row clearfix">
                <div class="col-sm-9 mar-t5">
                    <a href="#" data-toggle="modal" data-target="<?php echo '#'.$alteraonecourses[$i]['idprograms'];?>">
                    <?php echo $alteraonecourses[$i]['Title'];?></a>
                </div>
                <div class="col-sm-3 xs-mar-t10">
                    <a href="#" data-toggle="modal" data-target="#detailsForm" class="btn btn-primary btn-block" onclick="fngetcoursename(<?php echo $alteraonecourses[$i]['idprograms'];?>)">ENQUIRE NOW</a>                
                </div>
            </div>
        </li>
    <?php }?>

	<?php for($i=0;$i<count($alteratwocourses);$i++){?>							
        <li class="list-group-item">
            <div class="row clearfix">
                <div class="col-sm-9 mar-t5">
                    <a href="#" data-toggle="modal" data-target="<?php echo '#'.$alteratwocourses[$i]['idprograms'];?>">
                    <?php echo $alteratwocourses[$i]['Title'];?></a>
                </div>
                <div class="col-sm-3 xs-mar-t10">
                    <a href="#" data-toggle="modal" data-target="#detailsForm" class="btn btn-primary btn-block" onclick="fngetcoursename(<?php echo $alteratwocourses[$i]['idprograms'];?>)">ENQUIRE NOW</a>                
                </div>
            </div>
        </li>
    <?php }?>

	<?php for($i=0;$i<count($alterathreecourses);$i++){?>							
        <li class="list-group-item">
            <div class="row clearfix">
                <div class="col-sm-9 mar-t5">
                    <a href="#" data-toggle="modal" data-target="<?php echo '#'.$alterathreecourses[$i]['idprograms'];?>">
                    <?php echo $alterathreecourses[$i]['Title'];?></a>
                </div>
                <div class="col-sm-3 xs-mar-t10">
                    <a href="#" data-toggle="modal" data-target="#detailsForm" class="btn btn-primary btn-block" onclick="fngetcoursename(<?php echo $alterathreecourses[$i]['idprograms'];?>)">ENQUIRE NOW</a>                
                </div>
            </div>
        </li>
    <?php }?>    
                                                                                              
    </ul>  
    <h3 class="font18 pad-t20 primary-color">Corporate Courses</h3>    
    <ul class="list-group">
       <?php for($i=0;$i<count($corporatecourses);$i++){?>							
        <li class="list-group-item">
            <div class="row clearfix">
                <div class="col-sm-9 mar-t5">
                    <a href="#" data-toggle="modal" data-target="<?php echo '#123'.$corporatecourses[$i]['idprograms'];?>">
                    <?php echo $corporatecourses[$i]['Title'];?></a>
                </div>
                <div class="col-sm-3 xs-mar-t10">
                    <a href="#" data-toggle="modal" data-target="#detailsForm" class="btn btn-primary btn-block" onclick="fngetcoursename(<?php echo $corporatecourses[$i]['idprograms'];?>)">ENQUIRE NOW</a>                
                </div>
            </div>
        </li>
    <?php }?>
    </ul>                    
    </section>
    <?php include('include/footer.php') ;?>
<?php for($i=0;$i<count($rvvlsicourses);$i++){?>
<div class="modal fade" id="<?php echo $rvvlsicourses[$i]['idprograms'];?>" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body txtc">
           <?php echo $rvvlsicourses[$i]['Description'];?>
      </div>
    </div>
  </div>
</div>
<?php }?>

<?php for($i=0;$i<count($rvvlsicourses);$i++){?>
<div class="modal fade" id="<?php echo $rvvlsicourses[$i]['idprograms'];?>" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body txtc">
           <?php echo $rvvlsicourses[$i]['Description'];?>
      </div>
    </div>
  </div>
</div>
<?php }?>

<?php for($i=0;$i<count($weekendcourses);$i++){?>
<div class="modal fade" id="<?php echo $weekendcourses[$i]['idprograms'];?>" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog modal-sm">
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
  <div class="modal-dialog modal-sm">
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
  <div class="modal-dialog modal-sm">
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
  <div class="modal-dialog modal-sm">
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
  <div class="modal-dialog modal-sm">
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
      <div class="modal-body txtc">
           <form>
			  <div class="form-group has-error">    
			    <input type="text" class="form-control" placeholder="Please Enter Name">
			  </div>
			  <div class="form-group has-error">    
			    <input type="email" class="form-control" placeholder="Please Enter Email">
			  </div>  
			  <div class="form-group">    
			    <input type="text" class="form-control" placeholder="Mobile Number">
			  </div>  
			  <button type="button" class="btn btn-primary btn-block btn-lg">JOIN NOW</button>
			</form> 
      </div>
    </div>
  </div>
</div>




<script type='text/JavaScript'>
function fngetcoursename(id)
{
 
  document.getElementById('selectedcourse').value =id;
}
</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
</body>

</html>
