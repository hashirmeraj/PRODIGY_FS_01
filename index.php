<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // User is logged in; continue to the page
} else {
    // User is not logged in; redirect to the login page
    header("Location:./login.php");
    exit(); // Ensure no further code is executed after the redirection
}

// Include configuration file for database connection or other settings
include './particles/config.php';

// Retrieve the username from the session
$username = $_SESSION['userName'];
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Preconnect to Google Fonts for faster loading -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Include Google Fonts and Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./src/styles.css"> <!-- Link to custom CSS -->
    <title>Home</title> <!-- Page title -->
</head>

<body class="body">
    <div class="container h-screen flex items-center justify-center ">
        <!-- Main content container -->
        <div class="login flex flex-col items-center justify-center w-2/5 h-96 backdrop-blur-md border-solid border-2 border-white rounded-2xl text-white">
            <div class="container w-96">
                <!-- Welcome message displaying the logged-in username -->
                <span class=" mb-5 heading text-3xl ">Welcome
                    <span class=" text-purple-400 capitalize ">
                        <?php
                        echo $username; // Display the username
                        ?>
                    </span>
                    to our home page
                </span>
            </div>
            <!-- Logout button -->
            <a href="./particles/logout.php">
                <button type="submit" class="btn input mt-5">Logout</button>
            </a>
        </div>
    </div>
</body>

</html>