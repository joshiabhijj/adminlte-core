<?php
include('connection.php');
$id = $_POST['id'];  
$filename =  $_FILES["fileuplod"]["name"];
$tempname = $_FILES["fileuplod"]["tmp_name"];
$folder = "pic/" .$filename;
 move_uploaded_file($tempname, $folder);
if($_POST['fileuplod']!=NULL){ 
$query = "UPDATE `img` SET  ` 
`file`='$folder' 
  WHERE `img`.`id`= '$id'";
}else{   
$query = "UPDATE `img` SET `id`='$id' WHERE `img`.`id` = '$id'";
}
$var_c = mysqli_query($conn ,$query);
if($var_c){
    header("Location:show.php");
}else{ 
    header("Location:edit_form_v1.php");
}
 
// if(coun){
//     mysqli_query($conn,"UPDATE  data SET name='". $_POST['name'] ."', WHERE id'".$_POST['id'] );
// }
