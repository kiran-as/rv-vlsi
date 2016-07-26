<?php
include("application/conn.php");
$resultsss = "SELECT * FROM tbl_testimonials order by idtestimonials desc";

    $resultc = mysql_query($resultsss);
    $j=$k=0;
    while ($row = mysql_fetch_assoc($resultc)) {
           if($row['testimonialtype']=='Student')
           {
             $studenttestimonials[$j]["subject"]   = $row["subject"];
             $studenttestimonials[$j]["testimonials"]   = $row["testimonials"];
             $studenttestimonials[$j]["testimonialsby"] = $row["testimonialsby"];
             $j++;
           }
           else
           {
            $corporatetestimonials[$k]["subject"]   = $row["subject"];
             $corporatetestimonials[$k]["testimonials"] = $row["testimonials"];
             $corporatetestimonials[$k]["testimonialsby"]= $row["testimonialsby"];
             $k++;
           }
        
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
           <h3 class="font36 txtc">Testimonials</h3> 
           <hr/> 
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs mar-t20 custom-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#students" aria-controls="students" role="tab" data-toggle="tab">Students</a></li>
    <li role="presentation"><a href="#corporate" aria-controls="corporate" role="tab" data-toggle="tab">Corporate Recognition</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content pad-t20">
    <div role="tabpanel" class="tab-pane active" id="students">                                                  
        <div class="row">
            <div class="col-sm-6">
               <?php for($i=0;$i<count($studenttestimonials);$i++){?>
                   <?php if($i%2=='0')
                   { ?>
                <p class="t-block">
                <span class="font18 pad-b10"><?php echo $studenttestimonials[$i]['subject'];?></span>
                <?php echo $studenttestimonials[$i]['testimonials'];?></p>
                <p class="primary-color pad-l20 pad-t10 pad-b20">

                <?php echo $studenttestimonials[$i]['testimonialsby'];?></p>
                
                   <?php }
                  }?>
            </div>

            <div class="col-sm-6">
               <?php for($i=0;$i<count($studenttestimonials);$i++){?>
                   <?php if($i%2!='0')
                   { ?>
                <p class="t-block">
                <span class="font18 pad-b10"><?php echo $studenttestimonials[$i]['subject'];?></span>

                <?php echo $studenttestimonials[$i]['testimonials'];?></p>
                <p class="primary-color pad-l20 pad-t10 pad-b20">

                <?php echo $studenttestimonials[$i]['testimonialsby'];?></p>
                
                   <?php }
                  }?>
            </div>


        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="corporate">
    
<div class="row">
           <div class="col-sm-12 col-md-8 col-md-offset-2 txtc pad-b20 ">
Many thanks to all the companies for visiting us regularly to hire our skilled engineers to meet their requirements. We believe this is the ultimate recognition and endorsement for RV-VLSI.               
           </div>           
                <div class="col-sm-6">
               <?php for($i=0;$i<count($corporatetestimonials);$i++){?>
                   <?php if($i%2=='0')
                   { ?>
                <p class="t-block">
                <span class="font18 pad-b10"><?php echo $corporatetestimonials[$i]['subject'];?></span>

                <?php echo $corporatetestimonials[$i]['testimonials'];?></p>
                <p class="primary-color pad-l20 pad-t10 pad-b20">

                <?php echo $corporatetestimonials[$i]['testimonialsby'];?></p>
                
                   <?php }
                  }?>
            </div>

            <div class="col-sm-6">
               <?php for($i=0;$i<count($corporatetestimonials);$i++){?>
                   <?php if($i%2!='0')
                   { ?>
                <p class="t-block">
                <span class="font18 pad-b10"><?php echo $corporatetestimonials[$i]['subject'];?></span>

                <?php echo $corporatetestimonials[$i]['testimonials'];?></p>
                <p class="primary-color pad-l20 pad-t10 pad-b20">

                <?php echo $corporatetestimonials[$i]['testimonialsby'];?></p>
                
                   <?php }
                  }?>
            </div>
          
        </div>       
        
    </div>
  </div>

</div>                      
    </section>
   <?php include('include.footer.php');?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="vlsi_js/jquery.min.js"></script>
    <script src="vlsi_js/bootstrap.min.js"></script>
 
</body>

</html>
