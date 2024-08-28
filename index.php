<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles.css">
    <title>Login</title>
</head>

<body style="  background-image: url(./src/images/login-bg.png); background-size:cover;">
    <div class="container">
        <form action="#" method="post">
            <div class="login flex flex-col w-96 self-center py-2">
                <h1>Login</h1>
                <input class=" w-60 h-8  mb-4" type="email" placeholder="Enter Your Email ID" name="loginEmail" required>
                <input class=" w-60" type="password" placeholder="Enter Your Password" name="loginPassword" required>
                <button type="submit" class=" bg-white  w-20 h-9">Login</button>
                <span>Don't have account? <span class=" font-semibold"><a href="./register.php">Register</a></span></span>
            </div>
        </form>
    </div>
</body>

</html>