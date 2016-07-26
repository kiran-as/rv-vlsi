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
    <link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="vlsi_css/bootstrap-image-gallery.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
            <?php include('vlsi_include/header.php');?>

    
    
    
    <section class="container">
           <h3 class="font36 txtc">Gallery</h3> 
           <hr/> 
    <div class="row pad-t20" id="links">        
    <a href="vlsi_img/gallery/1.jpg" class="col-sm-2 col-xs-4 mar-b30" title="Title 1" data-gallery>
        <img src="vlsi_img/gallery/1.jpg" alt="Title 1" class="img-responsive">
    </a> 
    <a href="vlsi_img/gallery/2.jpg" class="col-sm-2 col-xs-4 mar-b30" title="Title 2" data-gallery>
        <img src="vlsi_img/gallery/2.jpg" alt="Title 2" class="img-responsive">
    </a> 
    <a href="vlsi_img/gallery/3.jpg" class="col-sm-2 col-xs-4 mar-b30" title="Title 3" data-gallery>
        <img src="vlsi_img/gallery/3.jpg" alt="Title 3" class="img-responsive">
    </a>                                     
    <a href="vlsi_img/gallery/4.jpg" class="col-sm-2 col-xs-4 mar-b30" title="Title 4" data-gallery>
        <img src="vlsi_img/gallery/4.jpg" alt="Title 4" class="img-responsive">
    </a>
    <a href="vlsi_img/gallery/5.jpg" class="col-sm-2 col-xs-4 mar-b30" title="Title 5" data-gallery>
        <img src="vlsi_img/gallery/5.jpg" alt="Title 5" class="img-responsive">
    </a>
            <a href="vlsi_img/gallery/6.jpg" class="col-sm-2 col-xs-4 mar-b30" title="Title 6" data-gallery>
        <img src="vlsi_img/gallery/6.jpg" alt="Title 6" class="img-responsive">
    </a>
    <a href="vlsi_img/gallery/7.jpg" class="col-sm-2 col-xs-4 mar-b30" title="Title 7" data-gallery>
        <img src="vlsi_img/gallery/7.jpg" alt="Title 7" class="img-responsive">
    </a>
    <a href="vlsi_img/gallery/8.jpg" class="col-sm-2 col-xs-4 mar-b30" title="Title 8" data-gallery>
        <img src="vlsi_img/gallery/8.jpg" alt="Title 8" class="img-responsive">
    </a>
    <a href="vlsi_img/gallery/9.jpg" class="col-sm-2 col-xs-4 mar-b30" title="Title 9" data-gallery>
        <img src="vlsi_img/gallery/9.jpg" alt="Title 9" class="img-responsive">
    </a>
    <a href="vlsi_img/gallery/10.jpg" class="col-sm-2 col-xs-4 mar-b30" title="Title 10" data-gallery>
        <img src="vlsi_img/gallery/10.jpg" alt="Title 10" class="img-responsive">
    </a>
    <a href="vlsi_img/gallery/11.jpg" class="col-sm-2 col-xs-4 mar-b30" title="Title 11" data-gallery>
        <img src="vlsi_img/gallery/11.jpg" alt="Title 11" class="img-responsive">
    </a>                    
    </div>                     
    </section>
     <?php include('vlsi_include/footer.php');?>

        
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="vlsi_js/bootstrap.min.js"></script>
    <script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="vlsi_js/bootstrap-image-gallery.min.js"></script>    
   
</body>

</html>
