<?
include('../db/dbconfig.php');
include_once('admin_login_check.php');


$sql = "Select * from tbl_registerfreeworkshop";
	$result = @mysql_query($sql)	or die("Couldn't execute query:<br>".mysql_error().'<br>'.mysql_errno());
	$dbTable="Workshop";

	header('Content-Type: application/vnd.ms-excel');	//define header info for browser
	header('Content-Disposition: attachment; filename='.$dbTable.'-'.date('Ymd').'.xls');
	header('Pragma: no-cache');
	header('Expires: 0');
	
	
	    echo "Name"."\t".
			 "Phone"."\t".
			 "Date"."\t".
			 "Email"."\t";		 
			print("\n");
			
		while($imp=mysql_fetch_array($result))
				{
	
//$date=date("d",$imp[p_time])." ".date('M, Y',$imp[p_time])."  ".date('g:i:s',$imp[p_time]);
	
				
	$output=str_replace("\t", "t",trim(stripslashes($imp[name])))."\t".
	str_replace("\t", "t",trim(stripslashes($imp[mobile])))."\t".
	str_replace("\t", "t",trim(stripslashes(gmdate("'Y-m-d H:i:s", $imp[upddatetime]))))."\t".
	str_replace("\t", "t",trim(stripslashes($imp[email])))."\t";
	$output = preg_replace("/\r\n|\n\r|\n|\r/", ' ', $output);
		print(trim($output))."\t\n";
				}		 
	
?>