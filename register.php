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
    <div class="container h-screen flex items-center justify-center ">
        <form action="#" method="post">
            <div class="login flex flex-col items-center  w-96  backdrop-blur-md border-solid border-2 border-white rounded-2xl">
                <h1 class=" mt-12 mb-5 heading text-4xl font-semibold">Register</h1>
                <div class=" flex">
                    <input class=" input " type="text" placeholder="Enter Name" name="registerName" required>
                    <span class="material-symbols-outlined absolute mt-3 ml-[0.6rem] text-white">
                        mail
                    </span>
                </div>
                <div class=" flex">
                    <input class=" input " type="email" placeholder="Enter Your Email ID" name="loginEmail" required>
                    <span class="material-symbols-outlined absolute mt-3 ml-[0.6rem] text-white">
                        mail
                    </span>
                </div>
                <div class=" flex">
                    <input class="input " type="password" placeholder="Create Password" name="registerPassword" required>
                    <span class="material-symbols-outlined absolute mt-3 ml-[0.6rem] text-white">
                        lock
                    </span>
                </div>
                <div class=" flex">
                    <input class="input " type="password" placeholder="Confirm Password" name="confirmPassword" required>
                    <span class="material-symbols-outlined absolute mt-3 ml-[0.6rem] text-white">
                        lock
                    </span>
                </div>
                <div class=" flex mr-16 mb-2">
                    <input class="form-checkbox h-5 w-5 text-purple-600 " type="checkbox" required>
                    <span class=" ml-4 text-white">I accept all term & conditions</span>
                </div>

                <button type="submit" class="input btn">Register</button>
                <span class="text-white mb-4">Already have an account? <span class=" font-semibold "><a href="./login.php">Login now</a></span></span>
            </div>
        </form>
    </div>
</body>

</html>