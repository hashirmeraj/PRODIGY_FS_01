<?php
// Initialize variable to track login failure status
$loginFail = false;

// Check if the 'login' parameter is set in the URL and if its value is 'false'
if (isset($_GET['login']) && $_GET['login'] == 'false') {
    $loginFail = true; // Set loginFail to true if credentials are invalid
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Preconnect to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Link to Google Fonts and Material Symbols Outlined -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./src/styles.css"> <!-- Link to custom styles -->
    <title>Login</title>
</head>

<body class="body text">
    <?php
    // If login fails, display an alert
    if ($loginFail) {
        echo '
        <!-- Alert Container -->
        <div
            class="alert fixed top-4 right-4 bg-red-600 text-white p-6 rounded-lg shadow-lg flex items-center space-x-4 max-w-xs mx-auto">
            <!-- Alert Message -->
            <span class="flex-1 font-semibold text-lg">Invalid credentials. Please check your username and password.</span>
            <!-- Close Button -->
            <button class="close-btn ml-4 text-white hover:text-gray-300 focus:outline-none">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        ';
    }
    ?>
    <div class="container h-screen flex items-center justify-center ">
        <form action="./particles/handleLogin.php" method="post">
            <!-- Login Form Container -->
            <div class="login flex flex-col items-center w-96 h-96 backdrop-blur-md border-solid border-2 border-white rounded-2xl">
                <h1 class="mt-12 mb-5 heading text-4xl font-semibold">Login</h1>
                <!-- Email Input -->
                <div class="flex">
                    <input class="input" type="email" placeholder="Enter Your Email ID" name="loginEmail" required>
                    <span class="material-symbols-outlined absolute mt-3 ml-[0.6rem] text-white">
                        mail
                    </span>
                </div>
                <!-- Password Input -->
                <div class="flex">
                    <input class="input" type="password" placeholder="Enter Your Password" name="loginPassword" required>
                    <span class="material-symbols-outlined absolute mt-3 ml-[0.6rem] text-white">
                        lock
                    </span>
                </div>
                <!-- Submit Button -->
                <button type="submit" class="input btn">Login</button>
                <!-- Register Link -->
                <span class="text-white">Not a member? <span class="font-semibold"><a href="./register.php">Register</a></span></span>
            </div>
        </form>
    </div>
    <script>
        // Add event listener to close button to hide the alert
        document.querySelectorAll('.close-btn').forEach(button => {
            button.addEventListener('click', function() {
                this.closest('.alert').style.display = 'none';
            });
        });
    </script>
</body>

</html>