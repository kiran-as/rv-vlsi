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
<?php include('include/header.php');?>
    
    
    
    <section class="container">
    <h3 class="font36 txtc">Frequently Asked Questions</h3> 
    <hr/>          
<div role="tabpanel" class="pad-t10">
  <div class="row">
  <div class="col-sm-4">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs faq-tabs" role="tablist">
        <?php for($i=0;$i<count($arraStudent);$i++){?>

        <?php if($i==0){ ?>
    <li role="presentation" class="active">
               <a href="#faq<?php echo $i;?>" aria-controls="faq<?php echo $i;?>" role="tab" data-toggle="tab"><?php echo $arraStudent[$i]['faqheadingname'];?></a></li>

       <?php }  else {?>
    <li role="presentation"><a href="#faq<?php echo $i;?>" aria-controls="faq<?php echo $i;?>" role="tab" data-toggle="tab"><?php echo $arraStudent[$i]['faqheadingname'];?></a></li>

        <?php }?>
    
        <?php }?>
 </ul>
  </div>

  <!-- Tab panes -->
  <div class="col-sm-8">
      <div class="tab-content">
      <?php for($i=0;$i<count($arraStudent);$i++){?>
              <?php if($i==0) { ?>
             <div role="tabpanel" class="tab-pane active" id="faq<?php echo $i;?>">


              <?php }  else {?>
             <div role="tabpanel" class="tab-pane" id="faq<?php echo $i;?>">

              <?php }?>
              <?php $idfaqheading = $arraStudent[$i]["idfaqheading"]; 
                   $resultsss = "SELECT * FROM tbl_faqdetails 
                                       where idfaqheading=$idfaqheading";
                    $resultc = mysql_query($resultsss);
                    $f=0;
                    while ($row = mysql_fetch_assoc($resultc)) {
                          $arraStudentss[$f]["idfaqheading"]    = $row["idfaqheading"];
                         $arraStudentss[$f]["faqquestion"]  = $row["faqquestion"];
                         $arraStudentss[$f]["faqanswers"]   = $row["faqanswers"];
                          $f++;  
                        }
                    for($l=0;$l<count($arraStudentss);$l++){?>
                        <h3 class="font18 mar-t10"><?php echo $arraStudentss[$l]['faqquestion'];?></h3>
                        <p class="pad-b20"><?php echo $arraStudentss[$l]['faqanswers'];?>.</p>
        
                    <?php }?>
            </div>
      <?php }?>
                                                                            
                                                                               
      
  </div>
  </div>

</div>                      
    </section>
    <footer class="home-footer">
            <div class="container">
                <div class="sm-pull-right clearfix">
                    <ul class="pull-left h-small-nav pad-t5 pad-b20">
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <ul class="pull-left h-social pad-b20">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Linked In</a></li>
                        <li><a href="#">Youtube</a></li>
                    </ul>
                </div>
                <p class="sm-pull-left pad-t5 pad-xs-t20 pad-b10">© RV-VLSI Design Center.</p>
            </div>
        </footer>      
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <script src="js/classie.js"></script>    
    <script src="js/fixed.js"></script> 
</body>

</html>
