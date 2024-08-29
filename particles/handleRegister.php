<?php
include './config.php'; // Include database connection file

// Check request method
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {

    // Get user inputs
    $registerName = $_POST['registerName'];
    $registerPassword = $_POST['registerPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $registerEmail = $_POST['registerEmail'];

    // Sanitize inputs to prevent XSS attacks
    $registerName = htmlspecialchars($registerName, ENT_QUOTES, 'UTF-8');
    $registerEmail = htmlspecialchars($registerEmail, ENT_QUOTES, 'UTF-8');

    // Check if the email already exists
    $sql = "SELECT * FROM `register` WHERE `user_email` = '$registerEmail'";
    $result = mysqli_query($conn, $sql);
    $emailExist = mysqli_num_rows($result);

    if ($emailExist > 0) {
        $error = 'Email already exists';
    } else {
        // Check if passwords match
        if ($registerPassword === $confirmPassword) {
            // Hash the password before storing it
            $hashPassword = password_hash($registerPassword, PASSWORD_DEFAULT);
            // Insert new user into the database
            $sql = "INSERT INTO `register` (`user_name`, `user_email`, `user_password`) 
            VALUES ('$registerName', '$registerEmail', '$hashPassword')";
            $result = mysqli_query($conn, $sql);
            // Redirect to registration page with success message
            header("Location:../register.php?create=true");
            exit();
        } else {
            $error = 'Passwords do not match';
        }
    }
}

// Redirect to registration page with error message
header("Location:../register.php?create=false&&error=" . urlencode($error));
exit();
