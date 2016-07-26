<?php
include('detect.php');
include("application/conn.php");
$resultsss = "SELECT * FROM tbl_testimonials order by idtestimonials desc";

	$resultc = mysql_query($resultsss);
	$j=$k=0;
	while ($row = mysql_fetch_assoc($resultc)) {
	       if($row['testimonialtype']=='Student')
		   {
		     $studenttestimonials[$j]["testimonials"]	= $row["testimonials"];
		     $studenttestimonials[$j]["testimonialsby"]	= $row["testimonialsby"];
			 $j++;
		   }
		   else
		   {
             $corporatetestimonials[$k]["testimonials"]	= $row["testimonials"];
		     $corporatetestimonials[$k]["testimonialsby"]= $row["testimonialsby"];
			 $k++;
		   }
		
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
	   
	   
		<script type="text/javascript" src="js/classie.js"></script>
	    <script type="text/javascript" src="js/jquery.min.js"></script>
		
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<!--http://dean.edwards.name/packer/-->
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		
		<!-- Bottom TAb pannel (Video) -->
	
	
		<!-- bxSlider Javascript file -->

<script>
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

	   <!-- End scripts links -->
	   <link rel="stylesheet" type="text/css" href="css/style.css">
	   
  <link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
</head>

  

  <body>
  <header>
 <?php include('header.php');?>
  </header>
  
  
  
  <article>
  <div class="clear"></div>
	<div class="">
			<h2 class="heading-title">IoT Award-Academia</h2>
	</div>
    <div class="contnr">
  
		<section id="slide1" class="main style1 right dark fullscreen" style="">
				<div class="content box style2 slide8">
			
						
						
		<div id="horizontalTab" class="hzgal horiz-tabs">
		
            <div class="resp-tabs-container tst-mnl">

                <div>
					<p class="content-tabs">
					<div class="main-cntr">
						<div class="lft-testmlns-cntns" style="font-style: normal;
text-align: center;
color: #014593;
font-size: 18px;
font-weight: bold;"><table width="100%" border='1'>
<tr>
<td colspan='5'>&nbsp;</td>
</tr>
   <tr>

       <td> <img src='isa_logo.jpg'>
       </td>
       <td style='padding-right:120px;'>IoT AWARDS - Academia<br/> 
       </td>
       <td><img src='download.jpg' height="60px;">
       </td>

   </tr>
   <tr>
    <td colspan="5"><img src='rsz_1pg_0001.jpg' width='600px;'>
    </td>
    </tr>
<tr>
       <td>&nbsp;</td>
       <td>Academic Partner</td>
       
<td></td>
   </tr>
<tr>
       <td></td>
       <td><img src='rv_vlsi.png'></td>
       
<td  colspan='2'></td>
   </tr>
   <tr>  <td colspan="5"> The IoT Award is applicable to students enrolled in undergraduate, graduate or post graduate programs and faculty who are working/worked in areas related to Internet of Things. Nominations are invited by applicants who are working/worked in the following areas related to IoT in Agriculture, Dairy and Healthcare <br/>
<a href='http://www.iesaonline.org/downloads/IoT-Award-Academia-Nomination-Form.docx' target='_blank'>CLICK HERE</a> to download the Nomination Form
Last Date for receiving Applications: June 15, 2015</td>
   </tr>
   
</table>
						</div>
						
					</div>
					</p>
					
					
						
					
						
                </div>
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
  
  
  


	
	<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
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

  </script>
  </body>
</html>
