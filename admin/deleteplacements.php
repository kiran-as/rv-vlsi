<?php
  include_once('../db/dbconfig.php');
include_once('admin_login_check.php');
	session_start();	
mysql_query("delete from tbl_achievers 
where idacheievers=".$_GET['idtestimonials']);
header("Location:placementindex.php");exit;
 ?>
  