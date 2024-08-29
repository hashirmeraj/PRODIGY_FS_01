<?php
include './config.php';
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    $sql = "SELECT * FROM `register` WHERE `user_email` = '$loginEmail'";
    $result = mysqli_query($conn, $sql);
    $emailExist = mysqli_num_rows($result);

    if ($emailExist == 1) {
        $row = mysqli_fetch_assoc($result);
        $userName = $row['user_name'];
        $userPassword = $row['user_password'];
        //verify password
        if (password_verify($loginPassword, $userPassword)) {
            session_start();

            $_SESSION['loggedin'] = true;
            $_SESSION['userName'] = $userName;
            header("Location:../index.php?login=true");
            exit();
        }
    } else {
        $error = 'Invalid credentials';
    }
}
header("Location:../login.php?login=false&&error=" . urlencode($error));
exit();
