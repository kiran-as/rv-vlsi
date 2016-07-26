<?php 
include("application/conn.php");
$resultsss = "SELECT * FROM tbl_achievers ORDER BY RAND()";

    $resultc = mysql_query($resultsss);
    $s=0;
    while ($row = mysql_fetch_assoc($resultc)) {
         $arraStudentachievers[$s]["idacheievers"]   = $row["idacheievers"];
         $arraStudentachievers[$s]["name"]   = $row["name"];
         $arraStudentachievers[$s]["company"]    = $row["company"];
         
         $arraStudentachievers[$s]["batchno"]    = $row["batchno"];
         
         $arraStudentachievers[$s]["image"]  = $row["image"];
          $s++;  
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="og:title" content="Placements @ RV-VLSI">
<meta name="og:type" content="website">
<meta name="og:url" content="http://rv-vlsi.com">
<meta name="og:image" content="http://rv-vlsi.com/vlsi_img/rv_vlsi_whatsapp_5.png">
<meta name="og:image" itemprop="image" content="http://rv-vlsi.com/vlsi_img/rv_vlsi_whatsapp_5.png">
<meta property="fb:app_id" content="158904641191757"/>
<meta property="og:site_name" content="rv-vlsi.com"/>
<meta property="og:title" content="Placements @ RV-VLSI" />
<meta property="og:description" content="Placements @ RV-VLSI" />
<meta property="og:type" content="website">
<meta property="og:url" content="http://rv-vlsi.com/placements.php"/>
<meta property="og:image" content="http://rv-vlsi.com/vlsi_img/RV-SM-G10.png"/>
    <title>Placements @ RV-VLSI</title>

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
           <h3 class="font36 txtc">Our Placements</h3> 
           <hr/> 
              <h3 class="font18 txtc">We have a excellent Placement track record for all our flagship programs</h3>
            <p class="txt pad-t10">Our placements are always in core companies, we take pride in having the highest number of core placements compared to any academic institution in India.</p>
            <p class="txtc"> For more details on our placements, <a href="contact_us.php">contact</a> the placement cell.</p>     
            
            <div class="row txtc mar-t30 hmar10">             
                
                 <?php for($i=0;$i<count($arraStudentachievers);$i++){?>
                <div class="col-sm-4 col-md-3 hpad10">
                    <div class="p-block mar-b20">
                        <img src="vlsi_img/achivers/<?php echo $arraStudentachievers[$i]['image'];?>" />
                        <h3 class="font18 primary-color"><?php echo $arraStudentachievers[$i]['name'];?></h3>
                        <p><?php echo $arraStudentachievers[$i]['company'];?></p>
                        <div class="p-content clearfix">
                            <p>Student of RV-VLSI</p>
                            <p class="font14 secondary-color"><?php echo $arraStudentachievers[$i]['batchno'];?></p>
                        </div>
                    </div>
                </div> 
               <?php }?>
                
    </section>
  <?php include('vlsi_include/footer.php');?>
        
<!-- Modal -->
<div class="modal fade" id="future-star" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true" style="display:none">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Future Star</h4>
      </div>
      <div class="modal-body txtc">
            <img src="vlsi_images/person.jpg" />  
            <p class="pad-t20">You are our next Superstar!!</p>
      </div>
    </div>
  </div>
</div> 
<script src="vlsi_js/jquery.min.js"></script>              
     <script src="vlsi_js/bootstrap.min.js"></script>

</body>

</html>
