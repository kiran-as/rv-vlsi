<?php
//set where you want to store files
//in this example we keep file in folder upload
//$HTTP_POST_FILES['ufile']['name']; = upload file name
//for example upload file name cartoon.gif . $path will be upload/cartoon.gif
$path= "upload/".$HTTP_POST_FILES['ufile']['name'];
if($ufile !=none)
{
if(copy($HTTP_POST_FILES['ufile']['tmp_name'], $path))
{
$html = "The file has been uploaded successfully<BR/>";

//$HTTP_POST_FILES['ufile']['name'] = file name
//$HTTP_POST_FILES['ufile']['size'] = file size
//$HTTP_POST_FILES['ufile']['type'] = type of file
$html.= "File Name :".$HTTP_POST_FILES['ufile']['name']."<BR/>";
$html.="File Size :".$HTTP_POST_FILES['ufile']['size']."<BR/>";
$html.="File Type :".$HTTP_POST_FILES['ufile']['type']."<BR/>";
$html.="<img src=\"$path\" width=\"150\" height=\"150\">"."<BR/>";
$html.="COPY THIS PATH:http://www.rv-vlsi.com/test/upload/".$HTTP_POST_FILES['ufile']['name'].""."<BR/>";
$html.="Close this popup and Paste this path in the image URL of Editor";

/*
echo "File Name :".$HTTP_POST_FILES['ufile']['name']."<BR/>";
echo "File Size :".$HTTP_POST_FILES['ufile']['size']."<BR/>";
echo "File Type :".$HTTP_POST_FILES['ufile']['type']."<BR/>";
echo "<img src=\"$path\" width=\"150\" height=\"150\">"."<BR/>";
echo "COPY THIS PATH:http://www.rv-vlsi.com/test/upload/".$HTTP_POST_FILES['ufile']['name'].""."<BR/>";
echo "Close this popup and Paste this path in the image URL of Editor";*/
}
else
{
echo "Error";
}
}
?><head>
<script language="javascript" type="text/javascript" src="javascript/validation.js"></script>
<link rel="stylesheet" href="../css/styleupdated.css" type="text/css" media="screen" />

<link rel="stylesheet" href="../css/lytebox.css" type="text/css" media="screen" />
</head>
<script type="text/javascript">
function fnclose()
{
  parent.location="http://www.rv-vlsi.com/rvvlsi/editmailcontent.php";
}

</script>

 <table width="100%"  cellpadding="4" cellspacing="10" border="0" class="resuemviewtableborder">
 
 <tr>
        <td colspan="2" class="popupheader">
		 <table width="100%" border="0" cellspacing="0" cellpadding="1">
         <tr>
          <td nowrap="nowrap">Upload Image</td>
         <td width="100%" align="right"><img src="../images/close.gif" align="absmiddle" onClick="fnclose();" style="cursor:pointer"></td>
      </tr>
  </table>
  </td>
  </tr>
  
		<tr><td>
		<table cellpadding="0" cellspacing="0" border="0" class=""><tr>
			<td><?php echo $html;?></td>
			
		</tr></table>
		
		
		</td></tr>
      <tr> <td align="right">
	  <input type="button" name="Close" id="Close" value="Close" class="grayButton" onClick="fnclose();"/></td></tr>
					
  </table>
