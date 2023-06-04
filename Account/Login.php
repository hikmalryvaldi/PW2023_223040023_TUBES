<?php
session_start();

require '../functions.php';

if (isset($_SESSION["login"])) {
    header("Location: ../Dashboard/index.php");
    exit;
}

// if (isset($_POST["ladmin"])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

//     if ($username === "admin" && $password === "admin") {
//         $_SESSION["ladmin"] = true;
//         header("Location: ../Dashboard/Admin.php");
//         exit;
//     }
// }

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION['login'] = true;

            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];

            if ($row['role'] == 'admin') {
                header("Location: ../Dashboard/index.php");
            } elseif ($row['role'] == 'user') {
                header("Location: ../index.php");
                exit;
            }
        }
    }
    // if (mysqli_num_rows($result) === 1) {
    //     $row = mysqli_fetch_assoc($result);
    //     if (password_verify($password, $row["password"])) {
    //         $_SESSION["login"] = true;

    //         header("Location: ../page.php");
    //         exit;
    //     }
    // }

    $error = true;

    if (isset($error)) {
        echo "<script>
                alert('username / password salah!');
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- FONT AWS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/account/login.css">
</head>

<body>

    <div class="container">
        <div class="card">
            <h1><span>Lo</span>gin</h1>

            <form action="" method="post">
                <div class="email">
                    <label for="username"><i class="fa-solid fa-user"></i></i></label>
                    <input type="text" name="username" id="username" require autofocus placeholder="Enter your username" autocomplete="0">
                </div>

                <div class="pass">
                    <label for="password"><i class="fa-solid fa-key"></i></label>
                    <input type="password" name="password" id="password" require placeholder="Enter your password">
                    <i class="fa-solid fa-eye" id="eye"></i>
                </div>

                <div class="remember">
                    <div class="box1">
                        <input type="checkbox">
                        <label for="me">Remember Me</label>
                    </div>

                    <div class="box2">
                        <a href="#">Forgor password?</a>
                    </div>
                </div>

                <div class="buttLog">
                    <button type="submit" name="login" name="login">Login Now</button>
                    <p>Don't have an account? <a href="Register.php">Sigup Now</a></p>
                </div>

            </form>
        </div>
    </div>

</body>

<script src="../js/passEye.js"></script>

</html>