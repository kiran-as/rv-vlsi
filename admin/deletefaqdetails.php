<?php
  include_once('../db/dbconfig.php');
include_once('admin_login_check.php');
	session_start();	
mysql_query("delete from tbl_faqdetails
where idfaqdetails=".$_GET['idfaqdetails']);
header("Location:faqdetailsindex.php");exit;
 ?>
  