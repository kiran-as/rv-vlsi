<?php 
include_once('../db/dbconfig.php');

$idfaqheading = $_GET['idfaqheading'];


if($_POST)
{

  $testimonialsby = str_replace("'","&rsquo;",$_POST['testimonialby']); 
  
  $result = mysql_query("UPDATE tbl_faqheading SET 
  faqheadingname = '".$testimonialsby."'
											
				WHERE idfaqheading ='".$idfaqheading."' "); 
echo "<script>parent.location = 'faqindex.php';</script>";	
													 
}

$testimonialssql = mysql_query("Select * from tbl_faqheading where idfaqheading=$idfaqheading");
while($row =  mysql_fetch_assoc($testimonialssql))
{
    $faqheadingname = $row['faqheadingname'];
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
     parent.location="faqindex.php";
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
                                          <td colspan="4" class="heading_new">Edit Faq</td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <form action="" method="POST" id="myForm" name="myform">
                                                
			<table cellpadding="2" cellspacing="2" border="0">
			   
			     <tr>
				  <td  class="label" nowrap="nowrap">Faq Heading</td>
				  <td><input type="text" style="height: 25px;
width: 500px;" name="testimonialby" id="testimonialby" value="<?php echo $faqheadingname;?>">
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
