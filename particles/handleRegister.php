<?php
include './config.php';
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {

    $registerName = $_POST['registerName'];
    $registerPassword = $_POST['registerPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $registerEmail = $_POST['registerEmail'];

    // checking email already or not 
    $sql = "SELECT * FROM `register` WHERE `user_email` = '$registerEmail'";
    $result = mysqli_query($conn, $sql);
    $emailExist = mysqli_num_rows($result);

    if ($emailExist > 0) {
        $error = 'Email already exist';
    } else {
        // matching passowrd 
        if ($registerPassword == $confirmPassword) {
            $hashPassword = password_hash($registerPassword, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `register` (`user_name`, `user_email`, `user_password`) 
            VALUES ( '$registerName', '$registerEmail', '$hashPassword' )";
            $result = mysqli_query($conn, $sql);
            header("Location:../register.php?create=true");
            exit();
        } else {
            $error = 'password does not match';
        }
    }
}
header("Location:../register.php?create=false&&error=" . urlencode($error));
exit();