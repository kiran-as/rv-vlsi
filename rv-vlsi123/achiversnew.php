<?php
include('detect.php');
include("application/conn.php");
$resultsss = "SELECT * FROM tbl_achievers ORDER BY RAND()";

	$resultc = mysql_query($resultsss);
	$s=0;
	while ($row = mysql_fetch_assoc($resultc)) {
		 $arraStudent[$s]["idacheievers"]	= $row["idacheievers"];
		 $arraStudent[$s]["name"]	= $row["name"];
		 $arraStudent[$s]["company"]	= $row["company"];
		 
		 $arraStudent[$s]["batchno"]	= $row["batchno"];
		 
		 $arraStudent[$s]["image"]	= $row["image"];
		  $s++;  
		}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content=" Best VLSI & Embedded Systems Training institutes of India, located in Bangalore with students placed in 127 companies & top universities globally">
    
    <title>
      A world class Embedded systems and VLSI Skill development center with Alumni in 250+ companies in India and Abroad.
    </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="shortcut icon" href="images/favicon.png" />
    
    <!-- scripts links -->
    <script type="text/javascript" src="js/jquery.min.js">
    </script>
    
	
    <script type="text/javascript" src="js/classie.js">
    </script>
    
    <script src="js/easyResponsiveTabs.js" type="text/javascript">
    </script>
    <!--http://dean.edwards.name/packer/-->
    <script src="js/jquery.poptrox.min.js">
    </script>
    <script src="js/skel.min.js">
    </script>
    <script src="js/init.js">
    </script>
    
    <!-- Bottom TAb pannel (Video) -->
	
	
    <!-- bxSlider Javascript file -->
    <script src="js/jquery.bxslider.min.js">
    </script>
    <script>
      function init() {
        window.addEventListener('scroll', function(e){
          var distanceY = window.pageYOffset || document.documentElement.scrollTop,
              shrinkOn = 300,
              header = document.querySelector(".nvgtn");
          if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
          }
          else {
            if (classie.has(header,"smaller")) {
              classie.remove(header,"smaller");
            }
          }
        }
                               );
    }
  window.onload = init();
    </script>
    <script>
      $(document).ready(function() {
        $(".tabs-menu a").click(function(event) {
          event.preventDefault();
          $(this).parent().addClass("current");
          $(this).parent().siblings().removeClass("current");
          var tab = $(this).attr("href");
          $(".tab-content").not(tab).css("display", "none");
          $(tab).fadeIn();
        }
                               );
      }
                       );
	</script>
    
    
    
	<script>
      $(document).ready(function() {
        var cards = $(".imgs-achi");
        for(var i = 0; i < cards.length; i++){
          var target = Math.floor(Math.random() * cards.length -1) + 1;
          var target2 = Math.floor(Math.random() * cards.length -1) +1;
          cards.eq(target).before(cards.eq(target2));
        }
      }
                       );
	</script>
    
    <!-- End scripts links -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <?php if($mobile_browser=='200') {?>
    <!--pop-up scripts-->
    <link rel="stylesheet" href="css/reveal.css">
	
    
    <!-- Attach necessary scripts -->
    <!-- 
<script type="text/javascript" src="jquery-1.4.4.min.js">
</script>
-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js">
    </script>
    <script type="text/javascript" src="js/jquery.reveal.js">
    </script>
    
    <?php }?>
  </head>
  
  
  
  <body>
    <header>
      <?php include('header.php');?>
      
    </header>
    
    
    
    <article>
      <div class="clear">
      </div>
      <div class="">
        <h2 class="heading-title" style="top:47px !important">
          We offer the best and most comprehensive placement assistance program in India
          <h2>
          </div>
          <br/>
          <br/>
          <div class="contnr">
            
            <section id="slide1" class="main style1 right dark fullscreen" style="">
              <div class="content box style2 slide8">
                
                
                
                <div  class="horiz-tabs">
                  
                  <div class="resp-tabs-container">
                    <div>
                      <p class="content-tabs">
						<div class="main-cntr-vedo">
                          <p class="lght-cnttnt">
                            <br>
                            <br>
                            Our placements are always in core companies and we take pride in having the highest number of such placements compared to any academic institution in India. We congratulate the students who have bought fame to the institute and are now on the path to realize their dreams.
                            <?php if($mobile_browser=='200') {?>
                            <a data-reveal-id="myModal994" class="chfe"  href="#" style="font-size:14px !important;">
                              <br>
                              Click here to see our future star achiever
                            </a>
                            <?php }?>
                            
                          </p>
                          
                          <div class="main-vdeo-cntnr">
                            
                              
                              
                              
                              
                              
                  <div class="frst-main-tmln">
                    <?php for($i=0;$i<count($arraStudent);$i++){?>
                      <div class="images-tetmals">
                        <div class="imgs-achi frst-acho">
                          <div class="shfl-cnt">
                            <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   src="images/achivers/<?php echo $arraStudent[$i]['image'];?>"/>
                            <p class="lgt-atnr">
                              <?php echo $arraStudent[$i]['name'];?>
                            </p>
                            
                            <p class="bld-rbto">
                              <?php echo $arraStudent[$i]['company'];?>
                            </p>
                            <p class="lgt-rbto-small">
                              Student of RV-VLSI
                            </p>
                            <p class="lgt-rbto-pink">
                             <?php echo $arraStudent[$i]['batchno'];?>
                            </p>
                          </div>
						</div>
                      </div>
                    <?php }?>
                                  
                                 
                              </div>
                              <div>
                              </div>
                          </div>
                          <div>
                            <table border="1">
                              <tr>
                                <td>
                                  &nbsp;
                                </td>
                                <td>
                                  &nbsp;
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  &nbsp;
                                </td>
                                <td>
                                  &nbsp;
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  &nbsp;
                                </td>
                                <td>
                                  &nbsp;
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  &nbsp;
                                </td>
                                <td>
                                  &nbsp;
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  &nbsp;
                                </td>
                                <td>
                                  &nbsp;
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  &nbsp;
                                </td>
                                <td>
                                  &nbsp;
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  &nbsp;
                                </td>
                                <td>
                                  &nbsp;
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  &nbsp;
                                </td>
                                <td>
                                  &nbsp;
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  &nbsp;
                                </td>
                                <td>
                                  &nbsp;
                                </td>
                              </tr>
                              
                              <tr>
                                <td>
                                  &nbsp;
                                </td>
                                <td>
                                  <a class="chfe" href="index.php#slide6" >
                                    &nbsp;&nbsp;&nbsp;Visit our Center for the complete list of Achievers
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </div>
                  </div>
                  <div>
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
    
    
    <div id="myModal994" class="reveal-modal" style="width:284px !important;left:60% !important;">
      <table>
        <tr>
          <td width="30%">
            &nbsp;
          </td>
          <td width="30%">
            <img src="images/person.jpg">
          </td>
          <td width="30%">
            &nbsp;
          </td>
        </tr>
        <tr>
          <td colspan="3" style="text-align:center">
            You are our next Superstar!!
          </td>
        </tr>
        <tr>
          <td colspan='3' style="text-align:center">
            <a class="chfe" href="index.php#slide6">
              Here is how
            </a>
          </td>
        </tr>
      </table>
      <a class="close-reveal-modal">
        &#215;
      </a>
    </div>
    
    
	
	<script type="text/javascript">
      $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
          type: 'default', //Types: default, vertical, accordion           
          width: 'auto', //auto or any width like 600px
          fit: true,   // 100% fit in a container
          closed: 'accordion', // Start closed if in accordion view
          activate: function(event) {
            // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#tabInfo');
            var $name = $('span', $info);
            
            $name.text($tab.text());
            
            $info.show();
          }
        }
                                              );
      
      $('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
      }
                                          );
    }
                     );
    </script>
    <script>
      $(document).ready( function(){
        
        $('.has-sub').click( function(event){
          event.stopPropagation();
          $('.sub-nav').toggle();
        }
                           );
        
        $(document).click( function(){
          $('.sub-nav').hide();
        }
                         );
        
      }
                       );
      
    </script>
  </body>
  </html>