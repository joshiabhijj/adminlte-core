<?php 
include('connection.php');
if(isset($_POST['submit'])){
   // Count total uploaded files
   $totalfiles = count($_FILES['fileuplod']['name']);
   
   // Looping over all files
   for($i=0;$i<$totalfiles;$i++){
   $filename = $_FILES['fileuplod']['name'][$i];
    
   // Upload files and store in database
   if(move_uploaded_file($_FILES["fileuplod"]["tmp_name"][$i],'pic/'.$filename)){
   // Image db insert sql
    $insert = "INSERT INTO img(file) VALUES('$filename')";
    if(mysqli_query($conn, $insert)){
      header('location:show.php');
     echo 'Data inserted successfully';
    }
    else{
     echo 'Error: '.mysqli_error($conn);
    }
   }else{
     echo 'Error in uploading file - '.$_FILES['fileuplod']['name'][$i].'<br/>';
   } 
   }
}
   
?>

