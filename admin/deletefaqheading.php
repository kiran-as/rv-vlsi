<?php
  include_once('../db/dbconfig.php');
include_once('admin_login_check.php');
	session_start();	
mysql_query("delete from tbl_faqheading 
where idfaqheading=".$_GET['idfaqheading']);
header("Location:faqindex.php");exit;
 ?>
  