<?php
  include_once('../db/dbconfig.php');
include_once('admin_login_check.php');
	session_start();	
mysql_query("delete from tbl_testimonials 
where idtestimonials=".$_GET['idtestimonials']);
header("Location:testimonialsindex.php");exit;
 ?>
  