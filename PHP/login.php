<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../CSS/theme.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="../JS/validimLogin.js"></script>
</head>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt">
                <img src="../FOTO/liber.svg" alt="libraria">
</div>
            <form class="login100-form validate-form"id="login_form" method="POST" action="phpLogin.php">
                <span class="login100-form-title">
                   <h1> Mire se vini! </h1>
                </span>

                <div class="wrap-input100 validate-input" data-validate=" ss">
                    <input class="input100" id="username" type="text" name="username" placeholder="username:">
                    <span class="error_form" id="username_error_message"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password eshte i domosdoshem.">
                    <input class="input100" id="password" type="password" name="password" placeholder="Passwordi juaj:">
                    <span class="error_form" id="password_error_message"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                
                <div class="container-login100-form-btn">
                   <button class="login100-form-btn" type="submit" class="btn" name="login_user">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        Keni harruar 
                    </span>
                    <a class="txt2" href="password.php">
                        Username / Passwordin?
                    </a>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="rregjistrim.php">
                        Krijoni nje account anetaresie.
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>