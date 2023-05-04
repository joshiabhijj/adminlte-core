<?php
include 'connection.php';
if(isset($_POST['submit']))
{   
   
     $name = $_POST['name'];
     $email = $_POST['email'];
     $data= $_POST['hobbys'];
     $alldata= implode("," ,$data);
     $gen= $_POST['gender'];
     $dat=date("Y-m-d-H-");
     $filename =  $_FILES["fileuplod"]["name"];
     $tempname = $_FILES["fileuplod"]["tmp_name"];
     $folder = "pic/" .$dat.$filename;
      move_uploaded_file($tempname, $folder);
    // $imges= $_FILES['fileuplod']['name'];
     // move_uploaded_file($_FILES["fileuplod"]["tmp_name"],"pic/".$_FILES['fileuplod']['name']);
     $opt= $_POST['cit'];
     $sql = "INSERT INTO data (name,email,hobby,gender,file,city)
     VALUES ('$name','$email','$alldata','$gen','$folder','$opt')";
     if (mysqli_query($conn, $sql)) { 
      header("Location:table.php");
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }   
     mysqli_close($conn);
}
?>
