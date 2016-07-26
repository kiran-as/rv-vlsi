<?php
include("application/conn.php");

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
           <h3 class="font36 txtc">Alumni</h3> 
           <hr/> 
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs mar-t20 custom-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#students" aria-controls="students" role="tab" data-toggle="tab">Success Stories</a></li>
    <li role="presentation"><a href="#corporate" aria-controls="corporate" role="tab" data-toggle="tab">Register with the “Alumni Network Group”–</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content pad-t20">
    <div role="tabpanel" class="tab-pane active" id="students">                                                  
        <div class="row">
            <div class="col-sm-12">
              Content goes here...
            </div>


        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="corporate">
    
<div class="row">
           <div class="col-sm-12 col-md-8 col-md-offset-2 txtc pad-b20 ">
 ANy heading
            </div>           
                <div class="col-sm-12">
              Content goes here....
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
