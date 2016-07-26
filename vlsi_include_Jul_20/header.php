<?php
$tablet_browser = 0;
$mobile_browser = 0;
 
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}
 
if ($tablet_browser > 0) {
   // do something for tablet devices
 $mobile_browser = 200;
   
}
else if ($mobile_browser > 0) {
   // do something for mobile devices
 $mobile_browser = 100;
}
else {
   // do something for everything else
 $mobile_browser = 200;
} 
?>

    <header>
        <div class="navbar navbar-default top--header" role="navigation">
            <div class="container">
                <div class="row">                    
                        <a href="trust.php" class="col-sm-2 logo"><span></span><img src="vlsi_img/rv_institutes.png" class="img-responsive" /></a> 
                        <a href="index.php" class="col-sm-2 logo"><span></span><img src="vlsi_img/rv_vlsi.png" class="img-responsive" /></a> 
  <a href="nanochipsolution.php" class="col-sm-2 logo"><span style="display: inline-block;
vertical-align: middle;
height: 22%;
color:#c72055;font-size: 15px;">Training Partner</span><img src="vlsi_img/nanochip.png" class="img-responsive" /></a>                          <div class="col-sm-7 col-sm-offset-5 col-md-6 col-md-offset-6 mar-t25 mar-b30">
                        <div class="navbar-right pad-t10">
                           <div class="clearfix">
                                <ul class="pull-left h-small-nav pad-t5">
                                    <li><a href="contact_us.php">Contact Us</a></li>
                                </ul>
                                <ul class="pull-left h-social">
                                    <li><a href="https://www.facebook.com/rv.vlsi" target="_blank">Facebook</a></li>
                                    <li><a href="https://twitter.com/RV_VLSI" target="_blank">Twitter</a></li>
                                    <li><a href="https://www.linkedin.com/company/rv-vlsi-design-center" target="_blank">Linked In</a></li>
                                    <li><a href="https://www.youtube.com/user/rvvlsivideos" target="_blank">Youtube</a></li>
                                </ul>  
                            </div>                                               
                        </div>
                    </div>                 
                </div>
            </div>
            <nav class="main-nav">
                <div class="container p-relative">
                   <div class="clearfix">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
</div>                                           
                        <div id="navbar" class="navbar-collapse collapse clearfix">
                            <ul class="nav navbar-nav header-nav">
                                <li><a href="courses.php" class="pad-sm-t13 pad-sm-b12">Courses</a>
                                </li>
                                <li><a href="our_differentiators.php" class="pad-sm-t13 pad-sm-b12">About Us</a>
                                </li>
                               
                                <li><a href="placements.php" class="pad-sm-t13 pad-sm-b12">Placements</a>
                                </li>
                                <li><a href="testimonial.php" class="pad-sm-t13 pad-sm-b12 pad-r0">Testimonials</a>
                                </li>
                                <li><a href="faq.php" class="pad-sm-t13 pad-sm-b12 pad-r0">FAQ</a>
                                </li>
                                 <li><a href="learning-at-rv-vlsi.php" class="pad-sm-t13 pad-sm-b12 pad-r0">Learning @ RV-VLSI</a>
                                </li>
                                <li><a href="our_partners.php" class="pad-sm-t13 pad-sm-b12 pad-r0">Partners</a>
                                </li>
                                <li><a href="gallery.php" class="pad-sm-t13 pad-sm-b12 pad-r0">Gallery</a>
                                </li>
 <li><a href="work-at-rv-vlsi.php" class="pad-sm-t13 pad-sm-b12 pad-r0">Work@RV-VLSI</a>
                                </li>
                                 <?php if($mobile_browser==100){?>
                                <li><a href="contact_us.php" class="pad-sm-t13 pad-sm-b12 pad-r0">Contact Us</a>

                                 <?php }?>
                                <li style='display:none'><a href="#" class="pad-sm-t13 pad-sm-b12 pad-r0">B.E Projects</a>
                                </li>                                
                            </ul>                           
                        </div>
                                                                                              
                </div>
            </nav>
        </div>
    </header>
