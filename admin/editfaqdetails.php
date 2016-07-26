<?php include_once('../db/dbconfig.php');
include_once('admin_login_check.php');
include("../ckeditor/ckeditor.php");
include("application/conn.php");

$idfaqdetails = $_GET['idfaqdetails'];


if($_POST)
{
 
    $testimonialtype = str_replace("'","&rsquo;",$_POST['testimonialtype']);
  $testimonials = str_replace("'","&rsquo;",$_POST['testimonial']);
  $testimonialsby = str_replace("'","&rsquo;",$_POST['testimonialby']); 
  
  $result = mysql_query("UPDATE tbl_faqdetails SET 
  idfaqheading = '".$testimonialtype."',
  faqanswers=  '".$testimonials."',
  faqquestion=  '".$testimonialsby."'
											
				WHERE idfaqdetails ='".$idfaqdetails."' "); 
echo "<script>parent.location = 'faqdetailsindex.php';</script>";	
													 
}


$resultdoctor = "SELECT a.* FROM tbl_faqheading as a";
	//print_r($resultsss);die();
	$resultdoctorss = mysql_query($resultdoctor);
	
	$s=0;
	while ($row = mysql_fetch_assoc($resultdoctorss)) {
		  $arradoctor[$s]["faqheadingname"]	= $row["faqheadingname"];
		  $arradoctor[$s]["idfaqheading"]	= $row["idfaqheading"];
		  $s++;  
		}
		
		
		
$testimonialssql = mysql_query("Select * from tbl_faqdetails where idfaqdetails=$idfaqdetails");
while($row =  mysql_fetch_assoc($testimonialssql))
{
    $idfaqheading = $row['idfaqheading'];
  $faqquestion = $row['faqquestion'];
  $faqanswers = $row['faqanswers'];  
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<link rel="stylesheet" type="text/css" media="all" href="../css/Theme.css" title="summer" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<link rel="stylesheet" href="../css/styleupdated.css" type="text/css" media="screen" />

	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RV-VLSI Design Center</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<script type="text/javascript" src="../js/admin_validation.js"></script>
<link href="../rv_main.css" rel="stylesheet" type="text/css" />
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="../css/theme.css" rel="stylesheet" type="text/css" />
<head>
<script type="text/javascript">
 function fnclose()
 {
     parent.location="faqdetailsindex.php";
 } 
</script>

</head>
<body onLoad="rvvlsi(1);">
<div class="wrapper">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
   <tr>
      <td align="left" valign="top">
         <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
               <td width="20">&nbsp;</td>
               <td align="left" valign="top">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                        <td align="left" valign="top">
                           <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                 <td width="111"><a href="../index.php"><img src="../images/logo.jpg" width="111" height="98" border="0" /></a></td>
                                 <td width="55">&nbsp;</td>
                                 <td width="88" align="left" valign="middle">&nbsp;</td>
                                 <td align="left" valign="bottom">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                       <tr>
                                          <td align="left" valign="bottom"></td>
                                       </tr>
                                       <tr>
                                          <td width="20%"></td>
                                          <td width="1px" style="background-color:#999999"></td>
                                          <td width="78%"></td>
                                       </tr>
                                    </table>
                                 </td>
                                 <td width="332" align="right" valign="bottom" class="link_green" style="padding-bottom:5px;">&nbsp;</td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                     <tr>
                        <td align="left" valign="top" style="background:#CCCCCC; height:2px;" ></td>
                     </tr>
                     <tr>
                        <td align="left" valign="top">
                           <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                 <td width="20%" valign="top" style="border-right: 2px solid #CCCCCC;">
                                    <? include("admin_navigation.php");?>
                                 </td>
                                 <td width="80%" valign="top" style="padding-left:10px;">
                                    <Table width="100%" cellpadding="0" cellspacing="0" >
                                       <tr>
                                          <td colspan="4" class="heading_new">Edit Faq details</td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <form action="" method="POST" id="myForm" name="myform">
                                                
			<table cellpadding="2" cellspacing="2" border="0">
			   <tr>
				  <td  class="label" nowrap="nowrap" id='alt1'>Type</td>
				  <td>
					 <select style="height: 25px;
width: 250px;" name="testimonialtype" id="testimonialtype" value=""> 
			  <?php for($i=0;$i<count($arradoctor);$i++){?>
							  <option value="<?php echo $arradoctor[$i]['idfaqheading'];?>" 
							  <?php echo $idfaqheading==$arradoctor[$i]['idfaqheading']?'selected':''?>>
								<?php echo $arradoctor[$i]['faqheadingname'];?>
								</option>
							  <?php }?></select>
				  </td>
			   </tr>
			 
			     <tr>
				  <td  class="label" nowrap="nowrap">Faq Question</td>
				  <td><input type="text" style="height: 25px;
width: 500px;" name="testimonialby" id="testimonialby" value="<?php echo $faqquestion;?>">
				  </td>
			   </tr>
			     <tr>
				  <td  class="label" nowrap="nowrap">Answers</td>
				  <td><textarea style="width: 500px;
height: 300px;" name="testimonial" id="testimonial"><?php echo $faqanswers;?></textarea>
				  </td>
			   </tr>
			  
			   
			   <tr>
				  <td colspan="2" align="right"><input type="submit" name="save" id="save" value="save" class="blueButton" />
					 <input type="button" name="Close" id="Close" value="Close" class="grayButton" onClick="fnclose();"/>
				  </td>
			   </tr>
			</table>
                                             </form>
                                          </td>
                                       </tr>
                                    </Table>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                  </table>
               </td>
               <td width="20">&nbsp;</td>
            </tr>
            <tr>
               <td height="20" colspan="3" align="center" valign="middle"></td>
            </tr>
            <tr>
               <td height="37" colspan="3" align="center" valign="middle" background="../images/footer_bg.jpg">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                        <td width="20">&nbsp;</td>
                        <td align="left" valign="middle" class="copyright">A unit of Rashtreeya Sikshana Samiti Trust.</td>
                        <td align="right" valign="middle" class="copyright">All rights reserved, Copyright  RV-VLSI Design Center.</td>
                        <td width="20">&nbsp;</td>
                     </tr>
                  </table>
               </td>
            </tr>
         </table>
      </td>
   </tr>
</table>
</div>                  
</body>
</html>
