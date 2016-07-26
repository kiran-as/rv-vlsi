<?php
  include_once('../db/dbconfig.php');
include_once('admin_login_check.php');
	session_start();	
mysql_query("delete from tbl_work_rvvlsi
where id=".$_GET['idfaqdetails']);
header("Location:work_at_rvvlsiindex.php");exit;
 ?>
  