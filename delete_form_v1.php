<?php
include('connection.php');
 $id =  $_GET['id'];
$query = "SELECT  * FROM  data  WHERE id='$id' ";
$rejult = mysqli_query($conn, $query);
$rows=mysqli_fetch_array($rejult);
unlink("pic/".$rows['file']);
$que =  "DELETE  FROM  data WHERE id='$id'" ;
$rej= mysqli_query($conn,$que);
header('location:table.php');
?>