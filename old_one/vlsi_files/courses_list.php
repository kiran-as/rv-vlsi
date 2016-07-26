<?php
include("application/conn.php");
$resultsss = "SELECT * FROM tbl_programs where Programtype=10 and Active=1 order by Orderforaltera";

	$resultc = mysql_query($resultsss);
	$s=0;
	while ($row = mysql_fetch_assoc($resultc)) {
		  $vlsiFT[$s]["idprograms"]	= $row["idprograms"];
		  $vlsiFT[$s]["Description"]	= $row["Description"];
		   $vlsiFT[$s]["Title"]	= $row["Title"];
		   		   $vlsiFT[$s]["Description"]	= $row["Description"];
		   
		  $s++;  
		}

$resultsss = "SELECT * FROM tbl_programs where Programtype=11 and Active=1 order by Orderforaltera";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $vlsiPT[$s]["idprograms"] = $row["idprograms"];
      $vlsiPT[$s]["Description"]  = $row["Description"];
       $vlsiPT[$s]["Title"] = $row["Title"];
             $vlsiPT[$s]["Description"] = $row["Description"];
       
      $s++;  
    } 

$resultsss = "SELECT * FROM tbl_programs where Programtype=12 and Active=1 order by Orderforaltera";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $vlsiVTU[$s]["idprograms"]  = $row["idprograms"];
      $vlsiVTU[$s]["Description"] = $row["Description"];
       $vlsiVTU[$s]["Title"]  = $row["Title"];
             $vlsiVTU[$s]["Description"]  = $row["Description"];
       
      $s++;  
    }   

    $resultsss = "SELECT * FROM tbl_programs where Programtype=13 and Active=1 order by Orderforaltera";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $vlsiCorporate[$s]["idprograms"]  = $row["idprograms"];
      $vlsiCorporate[$s]["Description"] = $row["Description"];
       $vlsiCorporate[$s]["Title"]  = $row["Title"];
             $vlsiCorporate[$s]["Description"]  = $row["Description"];
       
      $s++;  
    }   


$resultsss = "SELECT * FROM tbl_programs where Programtype=14 and Active=1 order by Orderforaltera";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $embeddedFT[$s]["idprograms"]  = $row["idprograms"];
      $embeddedFT[$s]["Description"] = $row["Description"];
       $embeddedFT[$s]["Title"]  = $row["Title"];
             $embeddedFT[$s]["Description"]  = $row["Description"];
       
      $s++;  
    }     

$resultsss = "SELECT * FROM tbl_programs where Programtype=15 and Active=1 order by Orderforaltera";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $embeddedPT[$s]["idprograms"]  = $row["idprograms"];
      $embeddedPT[$s]["Description"] = $row["Description"];
       $embeddedPT[$s]["Title"]  = $row["Title"];
             $embeddedPT[$s]["Description"]  = $row["Description"];
       
      $s++;  
    }  
    
$resultsss = "SELECT * FROM tbl_programs where Programtype=16 and Active=1 order by Orderforaltera";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $embeddedVTU[$s]["idprograms"]  = $row["idprograms"];
      $embeddedVTU[$s]["Description"] = $row["Description"];
       $embeddedVTU[$s]["Title"]  = $row["Title"];
             $embeddedVTU[$s]["Description"]  = $row["Description"];
       
      $s++;  
    }     

$resultsss = "SELECT * FROM tbl_programs where Programtype=17 and Active=1 order by Orderforaltera";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $embeddedCorporate[$s]["idprograms"]  = $row["idprograms"];
      $embeddedCorporate[$s]["Description"] = $row["Description"];
       $embeddedCorporate[$s]["Title"]  = $row["Title"];
             $embeddedCorporate[$s]["Description"]  = $row["Description"];
       
      $s++;  
    }  

$resultsss = "SELECT * FROM tbl_programs where  Active=1";

  $resultc = mysql_query($resultsss);
  $s=0;
  while ($row = mysql_fetch_assoc($resultc)) {
      $allPrograms[$s]["idprograms"]  = $row["idprograms"];
      $allPrograms[$s]["Description"] = $row["Description"];
       $allPrograms[$s]["Title"]  = $row["Title"];
             $allPrograms[$s]["Description"]  = $row["Description"];
       
      $s++;  
    }             
?>