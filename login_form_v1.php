<?php
session_start();
include('connection.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * from `register` WHERE email = '$email' ";
    $data = mysqli_query($conn, $query);
    //var_dump($data);exit();
    $total = mysqli_num_rows($data);
    $hash = password_hash($password, PASSWORD_DEFAULT);
    if ($total == 1) {
        while ($row = mysqli_fetch_assoc($data)) {
            $check = password_verify($hash, $row['epassword']);
            if ($password == $row['password']) {
                $_SESSION['e_mail'] = $email;
                header("location:table.php");
            } else {
                echo "check login failed";
            }
        }
     } else {
        echo "out login failed";
    }
}
?>