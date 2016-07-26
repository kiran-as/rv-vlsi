<?php
include("application/conn.php");
include('detect.php');
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
WHERE Programtype =1
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
<meta name="description" content=" Best VLSI & Embedded Systems Training institutes of India, located in Bangalore with students placed in 127 companies & top universities globally">
  
    <title>A world class Embedded systems and VLSI Skill development center with Alumni in 250+ companies in India and Abroad.</title>
	   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	   <link rel="shortcut icon" href="images/favicon.png" />
	  
	  	  
	   <!-- scripts links -->
	   
	   
		
	    <script type="text/javascript" src="js/jquery.min.js"></script>
	   <script type="text/javascript" src="js/classie.js"></script>
	   <script src="js/jquery.poptrox.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		
		<!-- Bottom TAb pannel (Video) -->
	
	
		<!-- bxSlider Javascript file -->
		<style>
		a:link  {color:#000000; background-color:transparent}
a:visited {color:#000000; background-color:transparent}
a:hover   {color:#f589aa; background-color:transparent}
a:active  {color:#f589aa; background-color:transparent}
		</style>
<script src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript">
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector(".nvgtn");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>
<script type="text/javascript">
	$(document).ready(function() {
    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
});
	</script>
<script type="text/javascript">
function fngetcoursename(id)
{
 
  document.getElementById('selectedcourse').value =id;
}

function validation()
	{
		 
		 var name=document.getElementById('cont_name');
         var email=document.getElementById('cont_email');
         var phone=document.getElementById('cont_mobile');
        // var msg=document.getElementById('cont_msg');
		//var carmdl = $('#car_mdl').find(":selected").text();
		//alert(name);

		 if(name.value.trim()== '')   
                        {
							 
							
                        alert("Please enter your name.");
                        name.focus();
                        return false;
                        }
						else  if(name.value.trim()!= '')
                    {
                        var namenal=name.value.trim();
                        var nameregexp=/^[a-zA-Z ]*$/i;
                        if(!nameregexp.test(namenal))
                        {
                            alert("This is not a valid Name! Only alphabets are accepted");
                            name.focus();
                            return false
                        }
                    }


	if(phone.value.trim()== '')
                    {
                        alert("Please enter your Mobile Number.");
                        phone.focus();
                        return false;
                    }
					if(!isValidPhone(phone.value.trim()))
                    {
                         alert("Please enter valid Mobile Number.");
                         phone.focus();
                         return false;
                    }
                	
                          
						  
						  

       if(email.value.trim()== '')
                    {
                        alert("Please enter your Email-id.");
                        email.focus();
                        return false;
                    }
                  else if(email.value.trim()!= '')
                    {
                        str2=email.value.trim();
                        var a=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                        if(!a.test(str2))
                        {
                            alert("Please input a valid email id!");
                            email.focus();
                            return false;
                        }
                    }
					
        
		
	}  


	</script>


	   <!-- End scripts links -->
	   <link rel="stylesheet" type="text/css" href="css/style.css">
	     <!--pop-up scripts-->
       <link rel="stylesheet" href="css/reveal.css">	
	  	
		<!-- Attach necessary scripts -->
		<!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="js/jquery.reveal.js"></script>
		
</head>


  

  <body>
  <header>
  <?php include('header.php');?> 
  </header>
  
  
  
  <article>
  <div class="clear"></div>
	<div class=""><br/>
			<h2 class="heading-title">Program Offerings</h2>
	</div>
	<br/>
	<br/>
    <div class="contnr">
  
		<section id="slide1" class="main style1 right dark fullscreen" style="">
				<div class="content box style2 slide8">
					<div class="wh-we-r wh-we-course">
						<div class="lft-cntnr">
							<p class="light-para">
							
							Our programs will help you gain the skills required for 93% of all fresher Job openings in the core industry. When taught by veterans with rich industry experience, it is not difficult to acquire the skills needed to get a job in the core industry. We train you on the many different approaches used in the industry to solve design problems.
                            </p>
						
                        	<p class="light-small-para" style="padding-bottom:20px;">
							We specialize in learning-through-experience method of teaching; inculcate the habit of out-of-box thinking and applied learning by using our proprietary course material and concept labs.
                            </p>
                          
							<p class="light-small-para">
							At RV-VLSI you get to interact with experts who share with you numerous tips and shortcuts to deal with challenging design problems based on their work experience (something which is not possible from text books or video lectures). This will help you understand concepts and gain experience in problem solving; you must master these skills to clear written tests and crack a job interview. 
							</p>
							<p class="light-small-para">
The following programs are offered to students, Industry Professionals, Corporates and Colleges. Click on each program for more details.								</p>
						</div>
						<div class="rgt-cntnr rgt-cntnr-crses">
							<img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="imgs-frst-crsr" src="images/course-1.png" style="float:left;margin:0 0 10px 0px;" />
							<div class="rgt-cntnt-imsges" style=" padding:0px !important; background:#fff !important;">
								<p class="cntnt-paragrph">
								<img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="imgs-frth-crsr" src="images/course-4.png" style="float:left;margin:0 0 10px 0px;" />
                                </p>
							</div>
							<img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="imgs-secn-crsr" style="float:left;" src="images/course-2.png" />
							<img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="imgs-thrd-crsr" style="float:right;" src="images/course-3.png" />
						</div>
						
						<div class="vlsi-courses-details" id="RVVLSI">
							<h2 class="bold-title-vlsi">RV-VLSI PROGRAMS</h2>
							<p class="light-small-para-main">


Add value to your academic degree by acquiring the skills to be industry ready or to prepare for higher studies abroad. We have a course that's right for you.                			</p>
							
							<table width="100%" class="tble-for-corse" border="0" cellpadding="0" cellspacing="0">
								<tr style="background:#eef0f2;">
									<th class="med-curs frst-pading" colspan="3">RV-VLSI:Advanced Diploma and Diploma Programs -(Full time program)</th>
									
								</tr>
								
								
								<?php for($i=0;$i<count($rvvlsicourses);$i++){?>
								
								<tr>
									<td class="reglr-curs frst-pading"><a href="#"  data-reveal-id="myModal<?php echo $rvvlsicourses[$i]['idprograms'];?>" >
									<?php echo $rvvlsicourses[$i]['Title'];?></a></td>
									
									 <?php if($mobile_browser=='200') {?>
									 
									<td> 
									  <select name="doctor" id="doctor"    class="label"   onchange="assigndoctorsss(this.value,<?php echo $rvvlsicourses[$s]['idprograms']?>);">
											  
											 
												  <?php 
								  for($k=0;$k<count($arrprogramdetails);$k++){
								  if($arrprogramdetails[$k]['idprograms'] == $rvvlsicourses[$i]['idprograms'])
								  {	
								 
								  ?>
											  <option value="<?php echo $arrprogramdetails[$k]['idprogramcalendar'];?>">
												<?php echo $arrprogramdetails[$k]['startmonth'];?>
										    
									 
									 
									 <?php 
									 }
									 
									 }
									  ?> </option>
											 
										</select>
					
					              </td>
								  <?php }?>
								  <td><a data-reveal-id="myModal-btn1" class="big-link" href="#"><input onclick='fngetcoursename(<?php echo $rvvlsicourses[$i]['idprograms'];?>);' class="coursesregistercursor" type="submit" name="join-now" value="Join Now" /></a></td>
									
									
								</tr>
								
								<?php }?>
								<tr>
								<td>&nbsp;</td>
								</tr>
								
								<tr style="background:#eef0f2;">
									<th colspan="2" class="med-curs frst-pading">Weekend Courses -(Part time courses for working professionals)<br/>
									</th>
									
								</tr>
								<tr class="reglr-curs frst-pading" style='display:none'>
									<td style="text-align: center;
width: 90%;
margin: 0 auto;
font-family: 'robotolight';
font-size: 15px;
line-height: 24px;
padding:10px 0 4px 0;" colspan="3">Weekend Courses</td>
									
								</tr>
								<?php for($i=0;$i<count($weekendcourses);$i++){?>
								
								<tr>
									<td class="reglr-curs frst-pading">
									
									<a href="#" class="big-link" data-reveal-id="myModal<?php echo $weekendcourses[$i]['idprograms'];?>">
									<?php echo $weekendcourses[$i]['Title'];?></a></td>
									<td>
									
									<a data-reveal-id="myModal-btn1" class="big-link" href="#"><input onclick='fngetcoursename(<?php echo $weekendcourses[$i]['idprograms'];?>);' class="coursesregistercursor" type="submit" name="join-now" value="Enquire Now" /></a></td>
								</tr>
								<?php }?>
								
							
								
								<tr style="background:#eef0f2;">
									<th colspan="2" class="med-curs frst-pading">Altera Programs -(Altera certified programs)<br/>
									</th>
									
								</tr>
								
								<?php for($i=0;$i<count($alteraonecourses);$i++){?>
								
								<tr>
									<td class="reglr-curs frst-pading">
									
									<a href="#" class="big-link" data-reveal-id="myModal<?php echo $alteraonecourses[$i]['idprograms'];?>">
									<?php echo $alteraonecourses[$i]['Title'];?></a></td>
									<td>
									
									<a data-reveal-id="myModal-btn1" class="big-link" href="#"><input onclick='fngetcoursename(<?php echo $alteraonecourses[$i]['idprograms'];?>);' class="coursesregistercursor" type="submit" name="join-now" value="Enquire Now" /></a></td>
								</tr>
								<?php }?>
								<?php for($i=0;$i<count($alteratwocourses);$i++){?>
								
								<tr>
									<td class="reglr-curs frst-pading"><a href="#" class="big-link" data-reveal-id="myModal<?php echo $alteratwocourses[$i]['idprograms'];?>">
									<?php echo $alteratwocourses[$i]['Title'];?></a></td>
									<td>
									
									<a data-reveal-id="myModal-btn1" class="big-link" href="#"><input onclick='fngetcoursename(<?php echo $alteratwocourses[$i]['idprograms'];?>);'  class="coursesregistercursor" type="submit" name="join-now" value="Enquire Now" /></a></td>
									
								</tr>
								<?php }?>
								<?php for($i=0;$i<count($alterathreecourses);$i++){?>
								
								<tr>
									<td class="reglr-curs frst-pading"><a href="#" class="big-link" data-reveal-id="myModal<?php echo $alterathreecourses[$i]['idprograms'];?>">
									<?php echo $alterathreecourses[$i]['Title'];?></a></td>
									<td>
									
									<a data-reveal-id="myModal-btn1" class="big-link" href="javascript:fngetcoursename();"><input onclick='fngetcoursename(<?php echo $alterathreecourses[$i]['idprograms'];?>);' class="coursesregistercursor" type="submit" name="join-now" value="Enquire Now" /></a></td>
									
								</tr>
								<?php }?>
								
								
								
								
								<tr>
								<td>&nbsp;</td>
								</tr>
								
								<tr style="background:#eef0f2;">
									<th colspan="2" class="med-curs frst-pading">Corporate Courses<br/>
									</th>
									
								</tr>
								<?php for($i=0;$i<count($corporatecourses);$i++){?>
								
								<tr>
									<td class="reglr-curs frst-pading">
									
									<a href="#" class="big-link" data-reveal-id="myModal<?php echo $corporatecourses[$i]['idprograms'];?>">
									<?php echo $corporatecourses[$i]['Title'];?></a></td>
									<td>
									
									<a data-reveal-id="myModal-btn1" class="big-link" href="#"><input onclick='fngetcoursename(<?php echo $corporatecourses[$i]['idprograms'];?>);' class="coursesregistercursor" type="submit" name="join-now" value="Enquire Now" /></a></td>
								</tr>
								<?php }?>
								
							</table>
						</div>
						
						
					</div>
				</div>
		</section>
  
    </div>
  </article>
  <footer>
  <div class="footer-main">
  	<div class="footer-inner">
    	&#169; RV-VLSI Design Center.
    </div>
  </div>
  </footer>
  
<?php for($i=0;$i<count($rvvlsicourses);$i++){?>
 <div id="myModal<?php echo $rvvlsicourses[$i]['idprograms'];?>" class="reveal-modal">
			<h1 style="color:red; font-size:26px;"><?php echo $rvvlsicourses[$i]['Title'];?><br></h1>


            <br>
			<p><?php echo $rvvlsicourses[$i]['Description'];?>
<br><br>

            </p>
			<a class="close-reveal-modal">&#215;</a>
		</div>
<?php }?>  
  <?php for($i=0;$i<count($alteraonecourses);$i++){?>
 <div id="myModal<?php echo $alteraonecourses[$i]['idprograms'];?>" class="reveal-modal">
			<h1 style="color:red; font-size:26px;"><?php echo $alteraonecourses[$i]['Title'];?><br></h1>


            <br>
			<p><?php echo $alteraonecourses[$i]['Description'];?>
<br><br>

            </p>
			<a class="close-reveal-modal">&#215;</a>
		</div>
<?php }?>
 <?php for($i=0;$i<count($alteratwocourses);$i++){?>
 <div id="myModal<?php echo $alteratwocourses[$i]['idprograms'];?>" class="reveal-modal">
			<h1 style="color:red; font-size:26px;"><?php echo $alteratwocourses[$i]['Title'];?><br></h1>


            <br>
			<p><?php echo $alteratwocourses[$i]['Description'];?>
<br><br>

            </p>
			<a class="close-reveal-modal">&#215;</a>
		</div>
<?php }?>
<?php for($i=0;$i<count($alterathreecourses);$i++){?>
 <div id="myModal<?php echo $alterathreecourses[$i]['idprograms'];?>" class="reveal-modal">
			<h1 style="color:red; font-size:26px;"><?php echo $alterathreecourses[$i]['Title'];?><br></h1>


            <br>
			<p><?php echo $alterathreecourses[$i]['Description'];?>
<br><br>

            </p>
			<a class="close-reveal-modal">&#215;</a>
		</div>
<?php }?>

<?php for($i=0;$i<count($weekendcourses);$i++){?>
 <div id="myModal<?php echo $weekendcourses[$i]['idprograms'];?>" class="reveal-modal">
			<h1 style="color:red; font-size:26px;"><?php echo $weekendcourses[$i]['Title'];?><br></h1>


            <br>
			<p><?php echo $weekendcourses[$i]['Description'];?>
<br><br>

            </p>
			<a class="close-reveal-modal">&#215;</a>
		</div>
<?php }?>
		 
<div id="myModal-btn1" class="reveal-modal">
			<h1 style="color:#f589aa; font-size:26px;">Enter the details<br></h1>

  <form action="courseformmailer.php"  name="cont_form" id="cont_form" method="POST" onsubmit="return validation();">
            
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td width="207"><input type="text"  class="input-txt" name="cont_name" id="cont_name" placeholder="Contact Name *"/></td>
  </tr>
  
  <tr>
    <td><input type="text"  class="input-txt" name="cont_mobile" id="cont_mobile" placeholder="Mobile  *"/></td> </tr>
  
   <tr>
      <td class="eml-disp" id="txtAge"><input type="text"  name="cont_email" id="cont_email" class="input-txt" placeholder="Email"/></td>
  </tr>
<tr style='display:'''>
   <td width="207"><input type="hidden"  class="input-txt" name="selectedcourse" id="selectedcourse" value=''/></td>
  </tr>
  <tr>
   <td><input type="submit"  name="formsubmit" class="send-button" value="Submit"/></td>
  </tr>
  
</table>
</form>

            </p>
			<a class="close-reveal-modal">&#215;</a>
		</div>	
				
	  <script>

function loaddatacourses(id)
{
  alert(id);
}
  </script>
	  
  </body>
</html>
