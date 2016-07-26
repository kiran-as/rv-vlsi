<?php
include("application/conn.php");
include('detect.php');
$resultsss = "SELECT * FROM tbl_project where projecttype='vlsi'";

	$resultc = mysql_query($resultsss);
	$s=0;
	while ($row = mysql_fetch_assoc($resultc)) {
		    $rvvlsicourses[$s]["projectname"]	= $row["projectname"];
		    $rvvlsicourses[$s]["domain"]	= $row["domain"];
		    $rvvlsicourses[$s]["projecttype"]	= $row["projecttype"];
			$rvvlsicourses[$s]["idquestion"]	= $row["idquestion"];
		   	$s++;  
		}
		
		$resultsss = "SELECT * FROM tbl_project where projecttype='embedded'";

	$resultc = mysql_query($resultsss);
	$s=0;
	while ($row = mysql_fetch_assoc($resultc)) {
		    $rvvlsicourses1[$s]["projectname"]	= $row["projectname"];
		    $rvvlsicourses1[$s]["domain"]	= $row["domain"];
		    $rvvlsicourses1[$s]["projecttype"]	= $row["projecttype"];
			$rvvlsicourses1[$s]["idquestion"]	= $row["idquestion"];
		   	$s++;  
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
			<h2 class="heading-title">VLSI and Embedded projects for the year 2014 - 2015</h2>
	</div>
	<br/>
	<br/>
    <div class="contnr">
  
		<section id="slide1" class="main style1 right dark fullscreen" style="">
				<div class="content box style2 slide8">
					<div class="wh-we-r wh-we-course">
						
					
						
						<div class="vlsi-courses-details" id="RVVLSI">
							<h2 class="bold-title-vlsi">BE Academic projects</h2>
							<p class="light-small-para-main">


							
							<table width="100%" class="tble-for-corse" border="0" cellpadding="0" cellspacing="0">
								
								<tr style="background:#eef0f2;">
									<th class="med-curs frst-pading">VLSI Project Titles</th>
									<th class="med-curs frst-pading">Complexity</th>
									<th></th>
									
								</tr>
								<?php for($i=0;$i<count($rvvlsicourses);$i++){?>
								
								<tr>
									<td class="reglr-curs frst-pading" width='50%'>
									
									<a href="#" class="big-link" data-reveal-id="myModal<?php echo $rvvlsicourses[$i]['idquestion'];?>">
									<?php echo $rvvlsicourses[$i]['projectname'];?></a></td>
									
									<td class="reglr-curs frst-pading"><?php echo $rvvlsicourses[$i]['domain'];?></td>
									<td>
									
									<a data-reveal-id="myModal-btn" class="big-link" href="#"><input onclick='fngetcoursename(<?php echo $rvvlsicourses[$i]['idquestion'];?>);' class="coursesregistercursor" type="submit" name="join-now" value="Enquire Now" /></a></td>
								</tr>
								<?php }?>
								
								
								<tr style="background:#eef0f2;">
									<th class="med-curs frst-pading">Embedded Systems Project Titles</th>
									<th class="med-curs frst-pading">Complexity</th>
									<th></th>
									
								</tr>
								<?php for($i=0;$i<count($rvvlsicourses1);$i++){?>
								
								<tr>
									<td class="reglr-curs frst-pading">
									
									<a href="#" class="big-link" data-reveal-id="myModal<?php echo $rvvlsicourses1[$i]['idquestion'];?>">
									<?php echo $rvvlsicourses1[$i]['projectname'];?></a></td>
									
									<td class="reglr-curs frst-pading"><?php echo $rvvlsicourses1[$i]['domain'];?></td>
									<td>
									
									<a data-reveal-id="myModal-btn" class="big-link" href="#"><input onclick='fngetcoursename(<?php echo $rvvlsicourses1[$i]['idquestion'];?>);' class="coursesregistercursor" type="submit" name="join-now" value="Enquire Now" /></a></td>
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
  
 
		 
<div id="myModal-btn" class="reveal-modal">
			<h1 style="color:#f589aa; font-size:26px;">Enter the details<br></h1>

  <form action="courseformmailerbe.php"  name="cont_form" id="cont_form" method="POST" onsubmit="return validation();">
            
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
$(document).ready( function(){

    $('.has-sub').click( function(event){
        event.stopPropagation();
        $('.sub-nav').toggle();
    });

    $(document).click( function(){
        $('.sub-nav').hide();
    });

});

function loaddatacourses(id)
{
  alert(id);
}
  </script>
	  
  </body>
</html>
