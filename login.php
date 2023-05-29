<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- Font AWS -->
    <script src="https://kit.fontawesome.com/b7283141b8.js" crossorigin="anonymous"></script>

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#" class="social">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>

                <span>Gunakan Email Untuk Registrasi</span>
                <input type="text" placeholder="Nama" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>Sign Up</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Sign In</h1>
                <div class="social-container">
                    <a href="#" class="social">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#" class="social">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>

                <span>Gunakan email yang sudah ada</span>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>Sign In</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Sudah Punya Akun?</h1>
                    <p>Sign In Sekarang</p>

                    <button class="ghost" id="signIn">Sign In</button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1>Belum Punya Akun?</h1>
                    <p>Sign Up Sekarang</p>

                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/login.js"></script>
</body>

</html>