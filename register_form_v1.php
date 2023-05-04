<?php
include ('connection.php');
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $epass=password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO register(name,email,password,epassword) VALUES('$name','$email','$password','$epass')";
    if(mysqli_query($conn,$sql)){
    header("Location:login.php");
           
        echo "New record has been added successfully !";
    }else{
        echo "not";
    }
}
?>