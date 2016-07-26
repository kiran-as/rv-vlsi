<?php
  include_once('../db/dbconfig.php');
include_once('admin_login_check.php');
	session_start();
$result	=	mysql_query("delete from tbl_courseenquiries where idcourseenquiries=".$_GET['idstudentdetailsinformation']);

header("Location:admin_manage_coursesregister.php");exit;
 ?>
  