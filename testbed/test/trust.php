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
       <title>RV-VLSI, VLSI and Embedded training institute in Bangalore</title>


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
    <h3 class="font36 txtc">Rashtreeya Sikshana Samithi Trust</h3> 
    <hr/>          
<div role="tabpanel" class="pad-t10">
  <div class="row">

  <!-- Tab panes -->
  <div class="col-sm-12">
      <div class="tab-content">
                        <p class="pad-b20">The Rashtreeya sikshana samithi Trust (RSST) was founded by Sri. M.C. Shivananda Sharma, when education was a privilege in the pre-independent India. The mission of the founder was to ‘Impart Quality Education to all sections of the society’. Sri M.C.Shivananda Sharma, an Educationalist in the year 1940 and Sri Meda Kasturi Ranga Setty, a business man & philanthropist joined hands together to pull this movement forward. Today six decades later, RSST through the (Rashtreeya vidyalaya) RV institutions, are in the forefront among providers of quality education in the state of Karnataka.
In today’s global context, the brand ‘RV’ immediately brings to one's mind a class of young achievers in enterprise, information technology, industry and research; it is because of its flagship institution of RSST, namely RV College of Engineering (RVCE)
Global recognition of RSST’s initiatives has given it the impetus to modernize itself, expand the existing and explore newer frontiers of knowledge for the benefit of society. In the process, RSST has been continuously evolving itself, strengthening its roots with every offshoot of a new branch. Keeping in step with its mission “Excellence in Education with Societal Commitment”, its concerns have always been to provide opportunities, especially challenged, disabled, and economically weak. Commendable success not withstanding, its commitments are deepening. <a href="http://www.rvinstitutions.com/institutions-technology.htm" target="_blank">Click here</a> to know more about other Technology Institutions run by RV group.
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
