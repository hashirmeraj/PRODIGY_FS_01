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
    <title>Login</title>
</head>

<body style="  background-image: url(./src/images/login-bg.png); background-size:cover;">
    <div class="container h-screen flex items-center justify-center text-white">
        <form action="#" method="post">
            <div class="login flex flex-col items-center  w-96 h-96 backdrop-blur-md border-solid border-2 border-white rounded-2xl">
                <h1 class=" mt-12 mb-5 heading text-4xl font-semibold">Login</h1>
                <div class=" flex">
                    <input class=" input mb-4 p-3 placeholder:text-white" type="email" placeholder="Enter Your Email ID" name="loginEmail" required>
                    <span class="material-symbols-outlined absolute mt-3 ml-72 ">
                        mail
                    </span>
                </div>
                <div class=" flex">
                    <input class="input mb-4 p-3 placeholder:text-white" type="password" placeholder="Enter Your Password" name="loginPassword" required>
                    <span class="material-symbols-outlined absolute mt-3 ">
                        lock
                    </span>
                </div>
                <button type="submit" class="input font-medium text-black bg-white mb-2">Login</button>
                <span>Don't have account? <span class=" font-semibold"><a href="./register.php">Register</a></span></span>
            </div>
        </form>
    </div>
</body>

</html>