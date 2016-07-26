<?php
error_reporting(E_ERROR | E_PARSE);
include('detect.php');
$val1 = rand(1,9);
$val2 = rand(1,9);
$finalcount = $val1 + $val2;
session_start();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
<meta name="description" content=" Best VLSI & Embedded Systems Training institutes of India, located in Bangalore with students placed in 127 companies & top universities globally">
  
      <meta name="keywords" content=" “training in vlsi” “embedded systems Bangalore” “Embedded system courses” ">
 <title>A world class Embedded systems and VLSI Skill development center with Alumni in 250+ companies in India and Abroad.</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <script type="text/javascript" src="../lib/jquery-1.10.2.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="../lib/jquery.mousewheel.pack.js?v=3.1.3"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="../source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.5" media="screen" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <script type="text/javascript" src="../source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <script type="text/javascript" src="../source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="../source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <script type="text/javascript">
        $(document).ready(function() {
             // $("#hidden_link").fancybox().trigger('click');
  // $('#hidden_link').hide();
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

            /*
             *  Different effects
             */

            // Change title type, overlay closing speed
            $(".fancybox-effects-a").fancybox({
                helpers: {
                    title : {
                        type : 'outside'
                    },
                    overlay : {
                        speedOut : 0
                    }
                }
            });

            // Disable opening and closing animations, change title type
            $(".fancybox-effects-b").fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                helpers : {
                    title : {
                        type : 'over'
                    }
                }
            });

            // Set custom style, close if clicked, change title type and overlay color
            $(".fancybox-effects-c").fancybox({
                wrapCSS    : 'fancybox-custom',
                closeClick : true,

                openEffect : 'none',

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    overlay : {
                        css : {
                            'background' : 'rgba(238,238,238,0.85)'
                        }
                    }
                }
            });

            // Remove padding, set opening and closing animations, close if clicked and disable overlay
            $(".fancybox-effects-d").fancybox({
                padding: 0,

                openEffect : 'elastic',
                openSpeed  : 150,

                closeEffect : 'elastic',
                closeSpeed  : 150,

                closeClick : true,

                helpers : {
                    overlay : null
                }
            });

            /*
             *  Button helper. Disable animations, hide close button, change title type and content
             */

            $('.fancybox-buttons').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons : {}
                },

                afterLoad : function() {
                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                }
            });


            /*
             *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
             */

            $('.fancybox-thumbs').fancybox({
                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,
                arrows    : false,
                nextClick : true,

                helpers : {
                    thumbs : {
                        width  : 50,
                        height : 50
                    }
                }
            });

            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
            */
            $('.fancybox-media')
                .attr('rel', 'media-gallery')
                .fancybox({
                    openEffect : 'none',
                    closeEffect : 'none',
                    prevEffect : 'none',
                    nextEffect : 'none',

                    arrows : false,
                    helpers : {
                        media : {},
                        buttons : {}
                    }
                });

            /*
             *  Open manually
             */

            $("#fancybox-manual-a").click(function() {
                $.fancybox.open('1_b.jpg');
            });

            $("#fancybox-manual-b").click(function() {
                $.fancybox.open({
                    href : 'iframe.html',
                    type : 'iframe',
                    padding : 5
                });
            });

            $("#fancybox-manual-c").click(function() {
                $.fancybox.open([
                    {
                        href : '1_b.jpg',
                        title : 'My title'
                    }, {
                        href : '2_b.jpg',
                        title : '2nd title'
                    }, {
                        href : '3_b.jpg'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });


        });
    </script>
    <style type="text/css">
        .fancybox-custom .fancybox-skin {
            box-shadow: 0 0 50px #222;
        }

    
    </style>
    
     <!-- scripts links -->
     
       <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
      
    <script src="js/jquery.poptrox.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/new-comp.js"></script>
  
  <!--menu-slide-click-->
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

    <!-- Bottom TAb pannel (Video) -->
  
  
    <!-- bxSlider testimonial-conetnt-slider -->

    <script type="text/javascript">
  $(document).ready(function(){
        $('.bxslider-tm').bxSlider({
       auto: true,
    
        });
      }); 
  </script>
  
  <!--header-scroll-->
  <script>
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

<!--youtube-video-->
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

<!-- Testimonials Slider script link-->
    
    <script type="text/javascript">
      $(document).ready(function(){
        //Examples of how to assign the Colorbox event to elements
        $(".group1").colorbox({rel:'group1'});
        $(".group2").colorbox({rel:'group2', transition:"fade"});
        $(".group2-1").colorbox({rel:'group2', transition:"fade"});
        $(".group2-12").colorbox({rel:'group2-12', transition:"fade",width:"300", height:"auto"});
        $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
        $(".group4").colorbox({rel:'group4', slideshow:true});
        $(".ajax").colorbox();
        $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
        $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
        $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
        $(".inline").colorbox({inline:true, width:"50%"});
        $(".callbacks").colorbox({
          onOpen:function(){ alert('onOpen: colorbox is about to open'); },
          onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
          onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
          onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
          onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
        });

        $('.non-retina').colorbox({rel:'group5', transition:'none'})
        $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
        
        //Example of preserving a JavaScript event for inline calls.
        $("#click").click(function(){ 
          $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
          return false;
        });
      });
    </script>
    <!-- Testimonials Slider script link-->
     <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
   
 
<link rel="stylesheet" href="css/colorbox.css" />

    

     <!-- End scripts links -->
     <link rel="stylesheet" type="text/css" href="css/style.css">
         <?php if($mobile_browser=='200') {?>
        <!--pop-up scripts-->
       <link rel="stylesheet" href="css/reveal.css">  
      
    <!-- Attach necessary scripts -->
    <!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="js/jquery.reveal.js"></script>  
     <?php }?>
<script type="text/javascript">
  function isValidPhone(ph)
                        {
                    var RegExp12 = /^\d{3}([ -]\d\d|\d[ -]\d|\d\d[ -])\d{6}$/;
                     if(RegExp12.test(ph))
                     {
                        return true;
                     }
                     else
                     {
                        var RegExp123 = /^\d{10}$/;
                        if(RegExp123.test(ph))
                        {
                            return true
                        }
                        else
                        {
                            return false;
                        }
                     }
                }
  
    function validation()
  {
     
     var name=document.getElementById('cont_name');
         var email=document.getElementById('cont_email');
         var phone=document.getElementById('cont_mobile');
        // var msg=document.getElementById('cont_msg');
    //var carmdl = $('#car_mdl').find(":selected").text();
    
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
  
  
      function formvalidation()
  {
     
     var name=document.getElementById('scont_name');
         var email=document.getElementById('scont_email');
         var phone=document.getElementById('scont_mobile');
         var city=document.getElementById('scont_city');
     var state=document.getElementById('scont_state');
     var country=document.getElementById('scont_country');
     var msg=document.getElementById('scont_msg');
    var study=$("input[name='radioName']:checked").val()
    

    
    
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
                  
                       
  if(city.value.trim()== '')   
                        {
                        alert("Please enter your city.");
                        city.focus();
                        return false;
                        }
                          else  if(city.value.trim()!= '')
                    {
                        var citynal=city.value.trim();
                        var cityregexpnss=/^[a-zA-Z ]*$/i;
                        if(!cityregexpnss.test(citynal))
                        {
                            alert("This is not a valid city !Only alphabets are accepted");
                            city.focus();
                            return false
                        }
                    }
          
          
           if(state.value.trim()== '')   
                        {
                        alert("Please enter your state.");
                        state.focus();
                        return false;
                        }
                          else  if(state.value.trim()!= '')
                    {
                        var statenal=state.value.trim();
                        var stateregexpnss=/^[a-zA-Z ]*$/i;
                        if(!stateregexpnss.test(statenal))
                        {
                            alert("This is not a valid state ! Only alphabets are accepted");
                            state.focus();
                            return false
                        }
                    }
          
          
                                
  if(country.value.trim()== '')   
                        {
                        alert("Please enter your country.");
                        country.focus();
                        return false;
                        }
                          else  if(country.value.trim()!= '')
                    {
                        var countrynal=country.value.trim();
                        var countryregexpnss=/^[a-zA-Z ]*$/i;
                        if(!countryregexpnss.test(countrynal))
                        {
                            alert("This is not a valid country ! Only alphabets are accepted");
                            country.focus();
                            return false
                        }
                    }
          
                     
                     if(msg.value.trim()== '')   
                        {
                        alert("Please enter your Message.");
                        msg.focus();
                        return false;
                        }
                          else  if(msg.value.trim()!= '')
                    {
                        var msgnal=msg.value.trim();
                        var msgregexpnss=/^[a-z0-9\d\n ,._]*$/i;
                        if(!msgregexpnss.test(msgnal))
                        {
                            alert("This is not a valid message ! Only alphabets are accepted");
                            msg.focus();
                            return false
                        }
                    }

             if(study.value.trim()== '') {
            alert("Please select the status of engineering");
            study.focus();
            return false;
            }
            else
            {
            return true;
            }

      
    
    
  }  
  
  
      function mobformvalidation()
  {
     
     var name=document.getElementById('mscont_name');
         var email=document.getElementById('mscont_email');
         var phone=document.getElementById('mscont_mobile');
         var city=document.getElementById('mscont_city');
     var state=document.getElementById('mscont_state');
     var country=document.getElementById('mscont_country');
     var msg=document.getElementById('mscont_msg');
    
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
                  
                       
  if(city.value.trim()== '')   
                        {
                        alert("Please enter your city.");
                        city.focus();
                        return false;
                        }
                          else  if(city.value.trim()!= '')
                    {
                        var citynal=city.value.trim();
                        var cityregexpnss=/^[a-zA-Z ]*$/i;
                        if(!cityregexpnss.test(citynal))
                        {
                            alert("This is not a valid city !Only alphabets are accepted");
                            city.focus();
                            return false
                        }
                    }
          
          
           if(state.value.trim()== '')   
                        {
                        alert("Please enter your state.");
                        state.focus();
                        return false;
                        }
                          else  if(state.value.trim()!= '')
                    {
                        var statenal=state.value.trim();
                        var stateregexpnss=/^[a-zA-Z ]*$/i;
                        if(!stateregexpnss.test(statenal))
                        {
                            alert("This is not a valid state ! Only alphabets are accepted");
                            state.focus();
                            return false
                        }
                    }
          
          
                                
  if(country.value.trim()== '')   
                        {
                        alert("Please enter your country.");
                        country.focus();
                        return false;
                        }
                          else  if(country.value.trim()!= '')
                    {
                        var countrynal=country.value.trim();
                        var countryregexpnss=/^[a-zA-Z ]*$/i;
                        if(!countryregexpnss.test(countrynal))
                        {
                            alert("This is not a valid country ! Only alphabets are accepted");
                            country.focus();
                            return false
                        }
                    }
          
                               
                     if(msg.value.trim()== '')   
                        {
                        alert("Please enter your Message.");
                        msg.focus();
                        return false;
                        }
                          else  if(msg.value.trim()!= '')
                    {
                        var msgnal=msg.value.trim();
                        var msgregexpnss=/^[a-z0-9\d\n ,._]*$/i;
                        if(!msgregexpnss.test(msgnal))
                        {
                            alert("This is not a valid message ! Only alphabets are accepted");
                            msg.focus();
                            return false
                        }
                    }

              
              

      
    
    
  }  
  
  function handleEvent()
    {
        $('#hidden_link').hide();
        $.ajax({url: "ajax_popup.php", success: function(result){
       
    }});
    }
  </script>
  
  
</head>

  <body>

   <div id="toPopup"> 
      
        <div class="close"></div>
        <span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
    <div id="popup_content"> <!--your content start-->
        
 <form action="mailer.php"  name="cont_form" id="cont_form" method="POST" onsubmit="return validation();">
 <table style="width:100%;border:0px;" >
  <tr>
   <td style="width:207px;"><input type="text"  class="input-txt" name="cont_name" id="cont_name" placeholder="Contact Name *"/></td>
  </tr>
  
  <tr>
    <td><input type="text"  class="input-txt" name="cont_mobile" id="cont_mobile" placeholder="Mobile  *"/></td> </tr>
  
   <tr>
      <td class="eml-disp" id="txtAge"><input type="text"  name="cont_email" id="cont_email" class="input-txt" placeholder="Email"/></td>
  </tr>
 
  <tr>
   <td><input type="submit"  name="formsubmit" class="send-button" value="Submit"/></td>
  </tr>
  
</table>
</form>
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
      <div id="backgroundPopup"></div>
  
  <header>
  <?php include('header.php');?>
  
  
  
  </header>
  
  
  
  
  <article>
  
  <!--<div class='lftsde-mnuslider' data-menu-style = "sapphire">
            <ul>
                <li><a href='#slide1'>1</a></li>
                <li><a href='#slide2'>2</a></li>
                <li><a href='#slide3'>3</a></li>
                <li><a href='#slide4'>4</a></li>
                <li><a href='#slide5'>5</a></li>
                <li><a href='#slide6'>6</a></li> 
                <li><a href='#slide7'>7</a></li> 
                <li><a href='#slide8'>8</a></li> 
            </ul>
  </div>-->
   <div class="contnr">
    <?php if($mobile_browser=='200') {?>
  <section id="slide1" class="" style="padding-top: 162px !important; padding-bottom: 100px;" ><marquee>
</marquee>
  <?php } else {?>
  
  <section id="slide1" class="main style2 right dark fullscreen" style="padding-top: 120px !important; padding-bottom: 100px;">
  <?php }?>
    
        <div class="content box style2 slide1">
        <div class="wh-we-r">
          <p class="rgt-cntn-hme">
            <span class="nme-light">Jayanth Bharathi Srinivas</span><br />
            <span class="desgntn">Design Engineer</span>
            <span class="cmpny"> - Cypress</span><br /><br />
            <span class="positin">Student of RV-VLSI</span><br />
            <span class="yrs">Advanced Diploma in ASIC Design</span><br />
            <a  href="achivers.php" style="color: #014593;
font-size: 15px;"><b>Click here for more achievers</b></a>
          </p>
          <div class="clear"></div>
          <p class="rgt-cntn-scndhme">
            <span class="nme-medium">VLSI & EMBEDDED SYSTEMS TRAINING</span><br />
            
            <p class="centry-yrs"><span style="color:#f86592;">1600</span><span style="color:#01cba9;"> + </span> <span style="color:#014593;"> Students </span></p><br />
            <div class="clear"></div>
            <p class="cmpny-ps">Trained.</p>
            <p class="cmpny-pssmal">Working in 250+ companies in India and Abroad</p>
            <div class="clear"></div>
            <p class="clnt-imgs">
              <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   src="images/logos/broadcom.png" > 
                        <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   src="images/logos/ibm.png" >
                        <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   src="images/logos/infosys.png" >
                        <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   src="images/logos/intel.png" > 
                        <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   src="images/logos/lsi.png" > 
              <?php if($mobile_browser=='200') {?>
                        <a href="#" data-reveal-id="myModal1"><img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   style="margin-right:0px;" src="images/logos/viewall.png" ></a>
                        <?php }?>
                         </p>
              
<div class="clear"></div>
            <div class="new-btch">
            <span>New batch starts<span class="july-mnth"></span> </span> <br />
            <a class="chfe" href="#slide6" >Click Here for More information on Upcoming Batches</a><img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   src="images/li.png" style="vertical-align: middle;margin: 0 0 0 5px;" />
            </div>
            <div class="clear"></div>
            <!--<p class="crs-offring"><span class="co-tile">Programs Offered :</span><br />
            <span class="bld-co">Advance Diploma in Embedded Systems</span> (ADEMS)<br />
              <span class="bld-co">Advanced Diploma in ASIC Design</span> (ADAD)<br />
              
              <span class="bld-co">Diploma in VLSI Design and Verification</span> (VLSI FRONT END)<br />
            
            
                        </p>-->
            <div class="clear"></div>
          
          <div class="clear"></div>
        </div>
        </div>
        
    </section>
       
        <div id='hidden_link'  onclick="handleEvent(event)"> 
        <div class="fancybox-overlay fancybox-overlay-fixed" style="width: auto; height: auto; display: block;"><div class="fancybox-wrap fancybox-desktop fancybox-type-inline fancybox-opened" tabindex="-1" style="width: 800px; height: auto; position: absolute; top: 10px; left: 250px; opacity: 1; overflow: visible;"><div class="fancybox-skin" style="padding: 15px; width: auto; height: auto;"><div class="fancybox-outer"><div class="fancybox-inner" style="overflow: auto; width: 760px; height: 800px;"><div id="hidden_link">    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="4_b.jpg"></a>
        <div style="font-family:robotolight; font-size:16px;">
        <!--<div style="overflow:hidden;">
            <p style="float:left;margin-top: 20px;"><img src='isa_logo.jpg'></p>
            <p style="float:right;"><img src='rvvlsi-logo.gif'></p>
           
        </div>-->
 <p style="text-align:center;font-weight:bold; font-size:22px;font-family:sans-serif; line-height:21px;">RV-VLSI ANNOUNCES THE START OF ADVANCED DIPLOMA IN EMBEDDED SYSTEMS(ADEMS)</p>
        <p style="padding-bottom:20px; padding-top:20px; line-height: normal;font-size: 14px;"><span style="font-weight:bold;">PROGRAM FEATURES:</span><BR/>The course is designed to meet the expectation of the industry. It is a four months full time program with 25% of time
spent on theory, and 75% of time spent in labs and real life projects. The program has helped many engineers gain employment in reputed companies. For more details Call us on +91-78996-17-936 / +91-78996-17-941 or mail us at info@rv-vlsi.com.</p>
        <p style="padding-bottom:20px; line-height: normal;font-size: 14px;"><span style="font-weight:bold;">WHO SHOULD TAKE THE COURSE:</span><BR/>Engineers from any of the circuit branches, working professions looking for core sector jobs. Engineers going abroad for higher studies are eligible to take the program. </p>   
    
        <p style="line-height: normal;font-size: 14px;display:" style="font-weight:bold;"><span style="font-weight:bold;">RV-VLSI ALUMNI ARE WORKING IN THE FOLLOWING COMPANIES</span><span style=" color: #019885;font-weight: bold;"><br/>
Our placement record in embedded has been an impressive 85%. Companies visit us regularly to hire qualified students, here is a partial list of companies who has hired from us.<br/>

Cupola, Dimention, Arete Automation System, Infosys, Accenture, Lekha Wireless, Position Square, DotNet, Dell, RedPine Signals, WingGlobal Tech, C2K Technologies, Alpha Tech, cane, Bit to Bit, HCL, Audience, IMESI, LockTech, SpanIdea Systems, Cognizant,  Riverstone, SAP Lab, IBM, IIT Mumbai, Robert Bosch, KPIT , Radel Electronics etc.. are some of the core companies our students get placed. 
Call us on +91-78996-17-936 / +91-78996-17-941 or mail us at info@rv-vlsi.com to know more about ADEMS.</span><br/>

<img src='images/customerlogos/embedded/wipro.png' style='width:150px'>
<img src='images/customerlogos/embedded/accenture.png' style='width:150px'>
<img src='images/customerlogos/embedded/bosch.png' style='width:150px'>
<img src='images/customerlogos/embedded/cognizant.png' style='width:150px'>
<img src='images/customerlogos/embedded/cupol.png' style='width:150px'>
<img src='images/customerlogos/embedded/del.png' style='width:150px'>
<img src='images/customerlogos/embedded/hcl.png' style='width:150px'>

<img src='images/customerlogos/embedded/ibm.png' style='width:150px'>&nbsp;
<img src='images/customerlogos/embedded/infosys.png' style='width:150px'>
<img src='images/customerlogos/embedded/indian.png' style='width:150px'>
<img src='images/customerlogos/embedded/radel.png' style='width:150px'>
<img src='images/customerlogos/embedded/kpit-cummins.png' style='width:150px'>
<img src='images/customerlogos/embedded/arete.png' style='width:150px'>
<img src='images/customerlogos/embedded/audience.png' style='width:150px'>
<img src='images/customerlogos/embedded/lekha.png' style='width:150px'>
<span style=" color: #019885;font-weight: bold;"></p>   
        </div>                            
        <!--table border='1'>
        <tr>
          <td><img src='isa_logo.jpg'></td>
          <td style='font:bold !important;color:black;text-align:justify;width:100% !important;font-family:robotolight;font-size:16px;line-height:21px;'>RV-VLSI partners with IESA to promote ESDM in education</td>
          <td style="float:right"><img src='rvvlsi-logo.png'></td>
        </tr>
       

         <tr>
        
          <td colspan='3' style='color:black;text-align:justify;width:100% !important;font-family:robotolight;font-size:16px;line-height:21px;'><br/><bold>BENGALURU:</bold> In a significant step, which is integral to ensuring the success of the ambitious ‘Make in India’ plan of the Indian government, the academia and the industry forum are partnering to create a readily available talent pool for the ESDM sector and the allied industries. Bengaluru-based RV-VLSI Design Centre, which is part of the RV Group of educational institutions, signed a Memorandum of Understanding (MoU) with the IESA (Indian Electronics & Semiconductor Association) to promote ESDM (Electronic System Design & Manufacturing) in the education sector and the academia.
</td>
        </tr>

          <!--  <tr>
        
          <td colspan='3' style='color:black;text-align:justify;width:100% !important;font-family:robotolight;font-size:16px;line-height:21px;'><br/>The MoU was signed by IESA and the RV-VLSI on the second day of the 10th Vision Summit of the IESA in Bengaluru in the presence of the top honchos from the electronics and semiconductor industries.
</td>
        </tr> -->
           <!--tr>
        
          <td colspan='3' style='color:black;text-align:justify;width:100% !important;font-family:robotolight;font-size:16px;line-height:21px;'><br/>The objective of the MoU is to bridge the gap between academia and industry and to roll out courses, customized for the ESDM industry, to meet their talent requirement. In its initial stage, the courses will be introduced as a pilot in select academic institutions. The ESDM course will be offered by RV-VLSI in collaboration with Nanochip Solutions Pvt. Ltd. from the current academic year. At present, students, who have completed their engineering courses, will be eligible for the course. Going forward, the same will be extended to students, who are in the second semester of their engineering courses. The academia too will be trained in ESDM.
</td>
        </tr>

          <tr>
        
          <td colspan='3' style='color:black;text-align:justify;width:100% !important;font-family:robotolight;font-size:16px;line-height:21px;'><br/>Mr. M.N. Vidyashankar, President, IESA, said, “We signed this MoU with RV-VLSI because of its excellent educational infrastructure, legacy and its comfort level with the industry. Engineers trained at RV-VLSI have been absorbed by top companies in the world. We want our next talent pool for the ESDM to emerge out of the RV-VLSI. We have had a long relationship with the RV-VLSI and this MoU will strengthen it going forward. For India to embark on the Make in India journey, we need readily available talent pool and skilled work force. This MoU will help lower the barriers for engineers to acquire the knowledge and skills to help them plan their careers in VLSI and Embedded Systems and become employable for the ESDM sector."
</td>
        </tr>
        </table--->   
      </div></div></div><a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a></div></div></div></div>
   
    <section id="slide3" class="main style1 right dark fullscreen" style="">
        <div class="content box style2 slide3">
        <div class="wh-we-r">
            <h2 class="rbt-lght-title" style="text-align:left;border-bottom:1px solid #e8f4f4;">Program Offerings</h2>
          <div class="lft-po">
        
          <p class="wosp-tle">RV-VLSI course details</p>
          <div class="clear"></div>
          <ul class="elgblty dels">
          <li><a href="courses.php" >Advance Diploma in Embedded Systems(ADEMS)</a></li>
            <li><a href="courses.php" >Advanced Diploma in ASIC Design(ADAD )</a></li>
            
            <li><a href="courses.php" >Diploma in VLSI Design and Verification (VLSI Front End)</a></li>
            
            
          </ul>
          <p class="wosp-tle">You are eligible to take our courses if you are:</p>  
          <ul class="elgblty curse">
            
              <li>An engineer with BE/ME in ECE. Or related branch looking to gain  job oriented skills</li>
              <li>An IT Professional looking for a career change to core industry</li>
              <li>Planning to go abroad for pursuing higher studies in US, Europe, Australia</li>
                            </ul><br /><br />
          <a  href="#slide6" class="chk-elgblty"  target="_blank">Register Now</a>
          <br /><br /><br />
          <div class="clear"></div>
            
          </div>
          <div class="rgt-po">  
            <p class="wosp-tle">Students Placed Successfully</p>  
            <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="cmpny-lgo" src="images/broadcom.png" />
                        <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="cmpny-lgo" src="images/cypress.png" />
                        <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="cmpny-lgo" src="images/ibm.png" />
                        <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="cmpny-lgo" src="images/infosys.png" />
                        <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="cmpny-lgo" src="images/intel.png" />
                        <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="cmpny-lgo" src="images/lsi.png" />
            <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="cmpny-lgo" src="images/magma.png" />
                        <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="cmpny-lgo" src="images/mentor-graphics.png" />
          
                     <a class="view-all-btn" href="#" data-reveal-id="myModal1">View All</a><br />
          <p class="wosp-tle">Students Pursuing Higher Studies at</p> 
            
            <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="uni-lgo" src="images/cincinnati.png" />
            <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="uni-lgo" src="images/illinois.png" />
                        <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="uni-lgo" src="images/client-14.png" />
            <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="uni-lgo uni-sml" src="images/syracuse.png" />
                        <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="uni-lgo" src="images/client-15.png" />
                        <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="uni-lgo" src="images/university-of-california.png" />
            <img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   class="uni-lgo" src="images/university-of-colorado.png" />
          <a class="view-all-btn" href="index.php#slide6" >Visit center for the complete list</a><br />

          </div>
            
        </div>
        
          
        </div>
        
    </section>
  

    <section id="slide6" class="main style1 right dark fullscreen" style="">
        <div class="content box style2 slide6">
        <div class="wh-we-r">
        <h2 class="rbt-lght-title">  Register Here <a href="#" style="float: right;" class="topopup dowld-form" ></a>For More Information</h2>

   <form action="formmailer.php"  name="scont_form" id="scont_form" method="POST" onsubmit="return formvalidation();">
   <table class="enq-regstrn-frm" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left"><input class="enq-reg-inpt" type="text" id="scont_name" name="scont_name" value="" placeholder="Name" /></td>
    <td align="right"><input class="enq-reg-inpt rgt-reg-inpt" id="scont_email" type="text" name="scont_email" value="" placeholder="Email"/></td>
  </tr>
  <tr>
    <td align="left"><input class="enq-reg-inpt" type="text" id="scont_mobile" name="scont_mobile" value="" placeholder="Mobile"/></td>
    <td align="right"><input class="enq-reg-inpt rgt-reg-inpt" id="scont_city" type="text" name="scont_city" value="" placeholder="City"/></td>
  </tr>
  <tr>
    <td align="left"><input class="enq-reg-inpt" type="text" id="scont_state" name="scont_state" value="" placeholder="State"/></td>
    <td align="right"><input class="enq-reg-inpt rgt-reg-inpt" id="scont_country" type="text" name="scont_country" value="" placeholder="Country"/></td>
  </tr>
  <tr>
    <td align="left" class="vert-top"><span class="engineering-spn" style="font-family:'robotoregular';font-size:16px;">B.E/B.Tech :</span> 
    <span class="engineering-spn" style="font-family:'robotolight';font-size:16px;">
    <input type="radio" name="be" value="Pursuing" style=" outline: 0; " /> Pursuing
     <input type="radio" name="be" value="Completed" style=" outline: 0; " /> Completed
     </span></td>
    <td align="left" class="vert-top"><span class="engineering-spn" style="font-family:'robotoregular';font-size:16px;">M.E/M.Tech :</span> 
    <span class="engineering-spn" style="font-family:'robotolight';font-size:16px;">
    <input type="radio" name="me" value="Pursuing" style=" outline: 0; " /> Pursuing
     <input type="radio" name="me" value="Completed" style=" outline: 0; " /> Completed
     </span></td>
  </tr>
      <tr>
    <td align="left" class="vert-top"><span class="engineering-spn" style="font-family:'robotoregular';font-size:16px;">Other :</span> 
    <span class="engineering-spn" style="font-family:'robotolight';font-size:16px;">
    <input type="radio" name="others" value="Pursuing" style=" outline: 0; " /> Pursuing
     <input type="radio" name="others" value="Completed" style=" outline: 0; " /> Completed
     </span></td>
    <td align="left" class="vert-top"><span class="engineering-spn" style="font-family:'robotoregular';font-size:16px;">Industry Experience :</span> 
    <span class="engineering-spn" style="font-family:'robotolight';font-size:16px;">
    <input type="radio" name="ind" value="0-2" style=" outline: 0; " /> 0-2
     <input type="radio" name="ind" value="2+" style=" outline: 0; " /> 2+
     </span><br/>&nbsp;</td>
  </tr>
  <tr>
    <td align="left"> <textarea id="scont_msg" name="scont_msg" class="enq-reg-inpt rgt-reg-inpt"  value="" placeholder="Message"></textarea></td>
     <td align="left" class="vert-top"><span class="engineering-spn" style="font-family:'robotoregular';font-size:16px;"><img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” " src="images/phone.png" class="address-img">:+91-80-40788574&nbsp;&nbsp;&nbsp;&nbsp;<img alt="“Embedded Systems Training” “Embedded Training in Bangalore” “VLSI Training institutes” "   src="images/email.png" class="address-img" /><a href="mailto:info@rv-vlsi.com" class="mailto-lnlk">info@rv-vlsi.com</a></td>
  </tr>
  
 <tr>
    <td align="left" class="vert-top"><input class="capctcha" type="text" readonly='readonly' value='<?php echo $val1;?>'/> <input style="width: 16px;
padding: 0px;
background: white;
border: 1px solid white;" type="text" readonly='readonly' value='+'/> &nbsp;&nbsp;&nbsp;<input class="capctcha" type="text" readonly='readonly' value='<?php echo $val2;?>'/> <input style="width: 16px;
padding: 0px;
background: white;
border: 1px solid white;" type="text" readonly='readonly' value='='/> &nbsp;&nbsp;&nbsp;<input class="finalcapctcha" 
type="text" id='finalcount' name='finalcount' value='' placeholder="Enter Count"/></td>
 
  </tr>

  <tr>
    <td align="center" colspan="2"><input type="submit" class="enq-nw" name="submit" value="Submit" /></td>
    
  </tr>
</table>
</form>

  <form action="formmailer.php"  name="scont_form" id="mscont_form" method="POST" onsubmit="return mobformvalidation();">
     <table class="enq-regstrn-frm-320" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left"><input class="enq-reg-inpt" type="text" id="mscont_name" name="scont_name" value="" placeholder="name" /></td>
    
  </tr>
  <tr>
  <td align="left"><input class="enq-reg-inpt" id="mscont_email" type="text" name="scont_email" value="" placeholder="email"/></td>
  </tr>
  <tr>
    <td align="left"><input class="enq-reg-inpt" type="text" id="mscont_mobile" name="scont_mobile" value="" placeholder="mobile"/></td>
    </tr>
  <tr>
  <td align="left"><input class="enq-reg-inpt" id="mscont_city" type="text" name="scont_city" value="" placeholder="city"/></td>
  </tr>
  <tr>
    <td align="left"><input class="enq-reg-inpt" type="text" id="mscont_state" name="scont_state"  value="" placeholder="state"/></td>
    </tr>
  <tr><td align="left"><input class="enq-reg-inpt"  id="mscont_country" type="text" name="scont_country" value="" placeholder="country"/></td>
  </tr>
  <tr>
    <td align="left" class="vert-top">
    <span class="engineering-spn" style="font-family:'robotoregular';font-size:16px;">
    Engineering :</span> 
    <span class="engineering-spn" style="font-family:'robotolight';font-size:16px;">
    <input type="radio" name="radioName" value="" style=" outline: 0; " /> Pursuing
     <input type="radio" name="radioName" value="" style=" outline: 0; " /> Completed
     </span></td>
    </tr>
  <tr><td align="left"><textarea  id="mscont_msg" name="scont_msg" class="enq-reg-inpt"  value="" placeholder="message"></textarea></td>
  </tr>
  <tr>
    <td align="center"><input type="submit" class="enq-nw" name="submit" value="Enquire Now" /></td>
    
  </tr>
</table>
</form>

<div class="dmmy-div1"></div>
<div class="dmmy"></div>
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
     <?php if($mobile_browser=='200') {?>
 <div id="myModal1" class="reveal-modal">
    <table border="0" cellspacing="2" cellpadding="2" class="logogrid" width='800px;'>
                      <tr>
                        <td><img src="images/customerlogos/single/1.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/2.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/3.png" width="200" height="100" /></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/4.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/5.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/6.png" width="200" height="100" /></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/7.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/8.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/9.png" width="200" height="100" /></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/10.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/11.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/12.png" width="200" height="100" /></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/13.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/14.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/15.png" width="200" height="100" /></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/16.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/17.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/18.png" width="200" height="100" /></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/19.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/20.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/21.png" width="200" height="100" /></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/22.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/23.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/24.png" width="200" height="100" /></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/25.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/26.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/27.png" width="200" height="100" /></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/28.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/29.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/30.png" width="200" height="100" /></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/31.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/32.png" width="200" height="100" /></td>
                        <td><img src="images/customerlogos/single/33.png" width="200" height="100" /></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/34.png" width="200" height="100" /></td>
                       
                      </tr>
                    </table>
    </div>
       <!--  <div id="myModal1" class="reveal-modal" style="top: 842px; opacity: 1; visibility: visible;">
        <table border="0" cellspacing="2" cellpadding="2" class="logogrid" width="800px;">
                      <tbody><tr>
                        <td><img src="images/customerlogos/single/1.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/2.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/3.png" width="200" height="100"></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/4.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/5.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/6.png" width="200" height="100"></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/7.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/8.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/9.png" width="200" height="100"></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/10.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/11.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/12.png" width="200" height="100"></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/13.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/14.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/15.png" width="200" height="100"></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/16.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/17.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/18.png" width="200" height="100"></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/19.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/20.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/21.png" width="200" height="100"></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/22.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/23.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/24.png" width="200" height="100"></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/25.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/26.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/27.png" width="200" height="100"></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/28.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/29.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/30.png" width="200" height="100"></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/31.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/32.png" width="200" height="100"></td>
                        <td><img src="images/customerlogos/single/33.png" width="200" height="100"></td>
                      </tr>
                      <tr>
                        <td><img src="images/customerlogos/single/34.png" width="200" height="100"></td>
                       
                      </tr>
                    </tbody></table>
        </div>
  <div class="reveal-modal-bg" style="display: block; cursor: pointer;"></div> -->

<?php }?>

    
    
    <script type="text/javascript">
 $(document).ready(function(){
        $('.bxslider').bxSlider({
       auto: true,
     mode: 'horizontal',
        autoControls: true,
        });
      }); 
  
   </script>
  </body>
</html>
