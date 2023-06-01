<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- FONT AWS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/account/register.css">
</head>

<body>

    <div class="container">
        <h1><span>Re</span>gistration</h1>

        <form action="" method="post">
            <div class="user">
                <label for="username"><i class="fa-solid fa-user"></i></label>
                <input type="text" name="username" id="username" require autofocus placeholder="Enter your name" autocomplete="0">
            </div>

            <div class="email">
                <label for="email"><i class="fa-solid fa-envelope"></i></label>
                <input type="email" name="email" id="email" require placeholder="Enter your email" autocomplete="0">
            </div>

            <div class="pass">
                <label for="password"><i class="fa-solid fa-key"></i></label>
                <input type="password" name="password" id="password" require placeholder="Create your password">
                <i class="fa-solid fa-eye" id="eye"></i>
            </div>

            <div class="remember">
                <input type="checkbox">
                <label for="me">I accept all terms & conditions</label>
            </div>

            <div class="buttRegis">
                <button type="submit" name="register">Register Now</button>
                <p>Already have an account? <a href="Login.php">Login Now</a></p>
            </div>
        </form>
    </div>

</body>

<script src="../js/passEye.js"></script>

</html>