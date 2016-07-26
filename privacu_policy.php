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
    <title>RV</title>

    <!-- Bootstrap core CSS -->
    <link href="vlsi_css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="vlsi_css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php include('vlsi_include/header.php');?>
    
    
    
    <section class="container">
    <h3 class="font36 txtc">Privacy Policy</h3> 
    <hr/>          
<div role="tabpanel" class="pad-t10">
  <div class="row">

  <!-- Tab panes -->
  <div class="col-sm-12">
      <div class="tab-content">
                        <p class="pad-b20">
                        Privacy policy
You use our website anonymously unless you choose to provide us with information about yourself. We protect your personal information on the internet to an equivalent high standard as that of our responsibilities to you in any other dealings that we may have with you.
You can access your account details at any time if you wish to.</p>

<p>What information do we collect?<br/>

The information we collect is used for the following purposes:<br/>
To fulfil orders;<br/>
We do not pass your details on to third parties.</br>
</p>

<p>
Cookies

Cookies are small pieces of information that are stored by your browser on your computer's hard drive. We use cookies to identify registered users automatically when they log on and also to track users as they travel through the system. You can set up your browser to reject cookies but you should be aware that this could limit your ability to use certain features on our site.
</p>

 
<p>Credit Card Details

No credit card details are stored by RV-VLSI.</p>

Information gathered by us when you browse the RV-VLSI Website

Although we will do all that we reasonably can to ensure that availability of our website will be uninterrupted and error free, we cannot guarantee this due to the nature of the internet. The website may also be down from time to time to allow us to maintain or repair it, or to change the services that we offer.

When you visit the RV-VLSI website to browse information that it contains, you do so anonymously unless you choose to provide us with information about yourself. If you do nothing during your visit but browse through the web site - reading pages, viewing images, for example - we will gather and store certain information about your visit automatically. This information does not identify you personally.

The RV-VLSI website automatically logs visitor information from which summary statistics are created. We use the summary statistics to help us make our site more useful to visitors, such as assessing what information is of most interest to visitors, as well as for other purposes such as determining the site's technical design specifications and identifying system performance or problem areas.
The following are representative of the types of information automatically collected and stored about your visit:
the internet domain and Internet Protocol (IP) address from which you access our website;
the type of internet browser and the operating system of the computer you use to access our website;
the date and time of your visit;
the pages you visit on our website;
if you linked to our website from another one, the address of the other website;
and, if you linked to our website from a search website, the address of that website and the search term you used.
Shared Information with other RV-VLSI Businesses

 
 Any information that you may provide to RV-VLSI will not be shared with Group.
We will not pass any information to any party outside the RV-VLSI Group, although we reserve the right to pass your details to law enforcement agencies if required to do so by applicable law.
If the ownership of RV-VLSI is changed, or the assets of RV-VLSI are sold we reserve the right to pass your details to the new purchaser, subject to notifying you of this as soon as is reasonably possible in the case of an asset sale.
Changes to our privacy policy

Any changes to our privacy policy will be posted here although we may choose to email you directly or direct you to an updated policy when you visit our site if the changes are significant.
                        </p>
            </div>

                                                                            
                                                                               
      
  </div>
  </div>

</div>                      
    </section>
      <?php include('vlsi_include/footer.php');?>
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="vlsi_js/jquery.min.js"></script>
    <script src="vlsi_js/bootstrap.min.js"></script>
 <script src="vlsi_js/classie.js"></script>    
    <script src="vlsi_js/fixed.js"></script> 
</body>

</html>
