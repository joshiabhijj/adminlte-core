<?php
include('connection.php'); 
$id = $_POST['id'];
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
$opt= $_POST['cit'];
$query = "UPDATE `data` SET  `name` = '$name', `email` = '$email',`hobby`='$alldata', `gender` = '$gen', 
`file`='$folder' ,
`city` = '$opt'  WHERE `data`.`id` = '$id'";
if(mysqli_query($conn,$query))
{
    header('location:table.php');
}
 
// if(coun){
//     mysqli_query($conn,"UPDATE  data SET name='". $_POST['name'] ."', WHERE id'".$_POST['id'] );
// }
