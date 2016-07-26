<?php
  include_once('../db/dbconfig.php');
include_once('admin_login_check.php');
	session_start();	
	echo "delete from tbl_questions 
where idquestion=".$_GET['idfaqheading'];
exit;
mysql_query("delete from tbl_questions 
where idquestion=".$_GET['idfaqheading']);
//header("Location:beprojectindex.php");exit;
 ?>
  