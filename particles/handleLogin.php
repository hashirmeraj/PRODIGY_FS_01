<?php
// Include configuration file for database connection
include './config.php';

// Check if the request method is POST
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    // Retrieve and sanitize user input
    $loginEmail = mysqli_real_escape_string($conn, $_POST['loginEmail']);
    $loginPassword = $_POST['loginPassword'];

    // Prepare and execute SQL query to find user by email
    $sql = "SELECT * FROM `register` WHERE `user_email` = '$loginEmail'";
    $result = mysqli_query($conn, $sql);
    $emailExist = mysqli_num_rows($result);

    // Check if email exists in the database
    if ($emailExist == 1) {
        // Fetch user data from the result set
        $row = mysqli_fetch_assoc($result);
        $userName = htmlspecialchars($row['user_name'], ENT_QUOTES, 'UTF-8'); // Escape output to prevent XSS
        $userPassword = $row['user_password'];

        // Verify the provided password against the stored hashed password
        if (password_verify($loginPassword, $userPassword)) {
            // Start session and store user details
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['userName'] = $userName;
            // Redirect to the home page with a success message
            header("Location:../index.php?login=true");
            exit();
        }
    } else {
        // Set error message for invalid credentials
        $error = 'Invalid credentials';
    }
}

// Redirect to login page with error message if login fails
header("Location:../login.php?login=false&error=" . urlencode($error));
exit();
