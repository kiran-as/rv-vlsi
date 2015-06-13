<?php 
include("application/conn.php");
$resultsss = "SELECT * FROM tbl_achievers";

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
           <h3 class="font36 txtc">Our Placements</h3> 
           <hr/> 
            <h3 class="font18 txtc">We offer the best and most comprehensive placement assistance program in India</h3>
            <p class="txtc pad-t10">Our placements are always in core companies and we take pride in having the highest number of such placements compared to any academic institution in India. We congratulate the students who have bought fame to the institute and are now on the path to realize their dreams.</p>       
            <p class="txtc pad-t10"><a href="#" data-toggle="modal" data-target="#future-star">Click here to see our future star achiever</a></p>
            <div class="row txtc mar-t30 hmar10">             
                
                 <?php for($i=0;$i<count($arraStudentachievers);$i++){?>
                <div class="col-sm-4 col-md-3 hpad10">
                    <div class="p-block mar-b20">
                        <img src="img/achivers/<?php echo $arraStudentachievers[$i]['image'];?>" />
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
  <?php include('include/footer.php');?>
        
<!-- Modal -->
<div class="modal fade" id="future-star" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Future Star</h4>
      </div>
      <div class="modal-body txtc">
            <img src="img/achivs01.png" />  
            <p class="pad-t20">You are our next Superstar!!</p>
      </div>
    </div>
  </div>
</div> 
<script src="js/jquery.min.js"></script>              
     <script src="js/bootstrap.min.js"></script>

</body>

</html>
