<?php
$regTrue = false;
$emailError = false;
$passError = false;

if (isset($_GET['create']) && $_GET['create'] == 'true') {
    $regTrue = true;
} elseif (isset($_GET['create']) && $_GET['create'] == 'false') {
    $errorMessage = urldecode($_GET['error']);
    if ($errorMessage == 'Email already exist') {
        $emailError = true;
    } elseif ($errorMessage == 'password does not match') {
        $passError = true;
    }
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./src/styles.css">
    <title>Register</title>
</head>

<body class="body text">
    <?php
    if ($regTrue) {
        echo '
        
    <!-- Alert Container -->
    <div
        class="alert fixed top-4 right-4 bg-green-600 text-white p-6 rounded-lg shadow-lg flex items-center space-x-4 max-w-xs mx-auto">

        <!-- Alert Message -->
        <span class="flex-1 font-semibold text-lg">Registration Successful!</span>
        <!-- Close Button -->
        <button class="close-btn ml-4 text-white hover:text-gray-300 focus:outline-none">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
        ';
    } elseif ($emailError) {
        echo '
            <!-- Alert Container -->
    <div
        class="alert fixed top-4 right-4 bg-red-600 text-white p-6 rounded-lg shadow-lg flex items-center space-x-4 max-w-xs mx-auto">

        <!-- Alert Message -->
        <span class="flex-1 font-semibold text-lg">This email address is already registered.</span>
        <!-- Close Button -->
        <button class="close-btn ml-4 text-white hover:text-gray-300 focus:outline-none">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
        ';
    } elseif ($passError) {
        echo '
            <!-- Alert Container -->
    <div
        class="alert fixed top-4 right-4 bg-red-600 text-white p-6 rounded-lg shadow-lg flex items-center space-x-4 max-w-xs mx-auto">

        <!-- Alert Message -->
        <span class="flex-1 font-semibold text-lg">The passwords do not match. Please try again.</span>
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
        <form action="./particles/handleRegister.php" method="post">
            <div class="login flex flex-col items-center  w-96  backdrop-blur-md border-solid border-2 border-white rounded-2xl">
                <h1 class=" mt-12 mb-5 heading text-4xl font-semibold">Register</h1>
                <div class=" flex">
                    <input class=" input " type="text" placeholder="Enter Name" name="registerName" required>
                    <span class="material-symbols-outlined absolute mt-3 ml-[0.6rem] text-white">
                        person
                    </span>

                </div>
                <div class=" flex">
                    <input class=" input " type="email" placeholder="Enter Your Email ID" name="registerEmail" required>
                    <span class="material-symbols-outlined absolute mt-3 ml-[0.6rem] text-white">
                        mail
                    </span>
                </div>
                <div class=" flex">
                    <input class="input " type="password" placeholder="Create Password" name="registerPassword" required minlength="6">
                    <span class="material-symbols-outlined absolute mt-3 ml-[0.6rem] text-white">
                        lock
                    </span>
                </div>
                <div class=" flex">
                    <input class="input " type="password" placeholder="Confirm Password" name="confirmPassword" required minlength="6">
                    <span class="material-symbols-outlined absolute mt-3 ml-[0.6rem] text-white">
                        lock
                    </span>
                </div>
                <div class=" flex mr-16 mb-2">
                    <input type="checkbox" required>
                    <span class=" ml-4 text-white">I accept all term & conditions</span>
                </div>

                <button type="submit" class="input btn">Register</button>
                <span class="text-white mb-4">Already have an account? <span class=" font-semibold "><a href="./login.php">Login now</a></span></span>
            </div>
        </form>
    </div>
    <script>
        document.querySelectorAll('.close-btn').forEach(button => {
            button.addEventListener('click', function() {
                this.closest('.alert').style.display = 'none';
            });
        });
    </script>
</body>

</html>