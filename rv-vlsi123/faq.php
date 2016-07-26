<?php
include("application/conn.php");
include('detect.php');
$resultsss = "SELECT * FROM tbl_faqheading";

	$resultc = mysql_query($resultsss);
	$s=0;
	while ($row = mysql_fetch_assoc($resultc)) {
		  $arraStudent[$s]["idfaqheading"]	= $row["idfaqheading"];
		 $arraStudent[$s]["faqheadingname"]	= $row["faqheadingname"];
		  $s++;  
		}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
<meta name="description" content=" Best VLSI & Embedded Systems Training institutes of India, located in Bangalore with students placed in 127 companies & top universities globally">
  
    <title>Faq-RV-VLSI & Embedded Systems Training institute, students placed in 127 companies- Bangalore, India</title>

	   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	   
	   <!-- scripts links -->
	   
	     <script type="text/javascript" src="js/jquery.min.js"></script>
         <script type="text/javascript" src="js/classie.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		
		<!-- Bottom TAb pannel (Video) -->
	
	<script type="text/javascript">
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
		<!-- bxSlider Javascript file -->
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

<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">




	   <!-- End scripts links -->
	   <link rel="stylesheet" type="text/css" href="css/style.css">
	   <link rel="stylesheet" href="css/colorbox.css" />
  <link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
  
          <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/accstyle.css" />
     <!--  	<noscript>
			<style>
				.st-accordion ul li{
					height:auto;
				}
				.st-accordion ul li > a span{
					visibility:hidden;
				}
			</style>
		</noscript>-->
</head>

  

  <body>
 <header>
  <?php include('header.php');?>
  
  
  
  </header>
  
  
  
  <article>
  <div class="clear"></div>
	<div class="">
			<h2 class="heading-title">Frequently Asked Questions</h2>
	</div>
    <div class="contnr">
  
		 <?php if($mobile_browser=='200') {?>
	<section id="slide1" class="" style="padding-top: 46px; padding-bottom: 0px;">
	<?php } else {?>
	<section id="slide1" class="main style1 right dark fullscreen" style="">
	<?php }?>
				<div class="content box style2 slide8">
			
		<div class="abt-mtr-main">
    
                <div id="st-accordion" class="st-accordion">
                    <ul>

                        <?php for($i=0;$i<count($arraStudent);$i++){?>
						 <li>
                            <a href="#"><?php echo $arraStudent[$i]['faqheadingname'];?><span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
							   <?php  $resultsss = "SELECT * FROM tbl_faqdetails";
								$resultc = mysql_query($resultsss);
								$f=0;
								while ($row = mysql_fetch_assoc($resultc)) {
									  $arraStudentss[$f]["idfaqheading"]	= $row["idfaqheading"];
									 $arraStudentss[$f]["faqquestion"]	= $row["faqquestion"];
									 $arraStudentss[$f]["faqanswers"]	= $row["faqanswers"];
									  $f++;  
									}?>
						        <?php for($l=0;$l<count($arraStudentss);$l++){?>
										<div  class="CollapsiblePanel "> 
										<div class="CollapsiblePanelTab"><?php echo $arraStudentss[$l]['faqquestion'];?></div> 
										<div style="display: block; visibility: visible;border:0; " class="CollapsiblePanelContent">
<?php echo $arraStudentss[$l]['faqanswers'];?>										</div>  
										</div>
								 <?php } ?>
								 </div>
						</li>
						<?php }?>
	                    
						
					</ul>
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
  
  
   		<script type="text/javascript" src="js/jquery.accordion.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
			
				$('#st-accordion').accordion({
					oneOpenedItem	: true,
					//scrollOffset : 60
				});
				
            });
        </script>

  </body>
  

</html>