<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
    header("Location:./login.php");
    exit();
}
include './particles/config.php';
$username = $_SESSION['userName'];
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
    <title>Login</title>
</head>

<body class="body">
    <div class="container h-screen flex items-center justify-center ">

        <div class="login flex flex-col items-center justify-center w-2/5 h-96 backdrop-blur-md border-solid border-2 border-white rounded-2xl text-white">
            <div class="container w-56">
                <span class=" mb-5 heading text-3xl ">Welcome
                    <span class=" text-purple-400 ">
                        <?php
                        echo $username;
                        ?>
                    </span>
                    to our home page
                </span>
            </div>
        </div>

    </div>
</body>

</html>