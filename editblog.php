<?php
include("application/conn.php");  
$id = $_GET['id'];
$sql = mysql_query("Select * from tbl_blog where idblog=$id");
$i=0;
while ($row = mysql_fetch_assoc($sql)) {
  $idblog = $row['idblog'];	
  $name = $row['name'];
  $comments = $row['comments'];
  $email = $row['email'];
  $mobile = $row['mobile'];
  }

if($_POST){
  $name = $_POST['NameComment'];
  $email = $_POST['EmailComment'];
  $mobile = $_POST['MobileNumberComment'];
  $comment = $_POST['comment'];
  echo $sql = "Update tbl_blog set name='$name', email='$email', mobile='$mobile', 
  comments='$comment'
          where idblog=$id";
   mysql_query($sql);  
   echo "<script>parent.location='bloglist.php'</script>";
           
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RV-VLSI, VLSI and Embedded training institute in Bangalore</title>
    <!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="http://localhost/testbed/industry_insights.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="RV-VLSI, VLSI and Embedded training institute in Bangalore" />
  <meta property="og:description"   content="RV-VLSI, VLSI and Embedded training institute in Bangalore" />
  <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />
</head>
    <!-- Bootstrap core CSS -->
    <link href="Blog/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Blog/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css" media="print">
.dontprint
{ display: none; }
</style>
  <script src="vlsi_js/jquery-1.10.2.js"></script>
  <script src="vlsi_js/jquery-ui.js"></script>
<script src="vlsi_js/jquery.validate.min.js"></script>
<body>
<section class="container">
         <h3 class="font36 txtc">EDIT</h3> 
</h5>
           <hr/> 
           <div class="row">
               <div class="col-sm-6">
               <form action='' id='homepagetopformComment' method="POST">
      <div class="modal-body txtc" id='courseForm'>          
      <div class="form-group">    
            <input type="text" class="form-control" placeholder="Name" id='NameComment' name='NameComment' value="<?php echo $name;?>">
              </div>
              <div class="form-group">    
                <input type="text" class="form-control" placeholder="Email" id='EmailComment' name='EmailComment' value="<?php echo $email;?>">
              </div>  
              <div class="form-group">    
                <input type="text" class="form-control" placeholder="Mobile Number" id='MobileNumberComment' name='MobileNumberComment' value="<?php echo $mobile;?>">
              </div>
                 <div class="form-group">    
                <textarea class="form-control" placeholder="Add Comment" id='comment' style="height:108px;width:500px;" name='comment'><?php echo $comments;?></textarea>
              </div>

              <button type="submit" class="btn btn-primary btn-block btn-lg">Updated</button>
      </div>
      </form>
               </div>
            </div>
            </section>
            </body>
