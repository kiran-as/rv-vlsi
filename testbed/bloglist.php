<?php
include("application/conn.php");  

$sql = mysql_query("Select * from tbl_blog");
$i=0;
while ($row = mysql_fetch_assoc($sql)) {
  $comments[$i]['idblog'] = $row['idblog'];	
  $comments[$i]['name'] = $row['name'];
  $comments[$i]['comments'] = $row['comments'];
  $comments[$i]['email'] = $row['email'];
  $comments[$i]['mobile'] = $row['mobile'];
  $i++;
  }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.12.3.js"></script>
 <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js
"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</head>
 <body>
   <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Comments</th>
                <th>Edit</th>
              
            </tr>
        </thead>
      
       
         <?php for($i=0;$i<count($comments);$i++) {
             $name = $comments[$i]['name'];
             $email = $comments[$i]['email'];
             $mobile = $comments[$i]['mobile'];
         $comment = $comments[$i]['comments'];
         $idblog = $comments[$i]['idblog'];
       ?>
            <tr>
                <td><?php echo $name;?></td>
                <td><?php echo $email;?></td>
                <td><?php echo $mobile;?></td>

                <td><?php echo $comment;?></td>
                <td><a href="editblog.php?id=<?php echo $idblog;?>">Edit</a></td>
            </tr>
            <?php } ?>
           
            </table>
            </body>
