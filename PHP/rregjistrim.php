<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../CSS/theme_rregjistrim.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="../JS/validimRegjistrim.js"></script>
</head>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt">
                <img src="../FOTO/liber_rregjistrim.svg" alt="libraria">
</div>
            <form class="login100-form " id="forme_regjistrimi" action="phpRegjistrim.php" method="POST">
                <span class="login100-form-title">
                 <h2> Faqe Anetaresie !</h2> 
                </span>
                <div class="wrap-input100 ">
                    <input class="input100" id="form_fname" type="text" name="emer"placeholder="Emri juaj:">
                    <span class="error_form" id="fname_error_message"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 ">
                    <input class="input100" id="form_lname" type="text" name="mbiemer" placeholder="Mbiemri juaj:">
                    <span class="error_form" id="lname_error_message"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 ">
                    <input class="input100" id="username" type="text" name="username" placeholder="Improvizoni username:">
                    <span class="error_form" id="username_error_message"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 " >
                    <input class="input100" id="form_email"type="email" name="email" placeholder="Vendosni emailin:">
                    <span class="error_form" id="email_error_message"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                  <div class="wrap-input100">
                    <input class="input100" id="form_address" type="text" name="adrese"  placeholder="Vendosni adresen:">
                    <span class="error_form" id="address_error_message"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100">
                    <input class="input100"id="form_password" type="password" name="pass1" placeholder="Passwordi i ri :">
                    <span class="error_form" id="pass1_error_message"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100">
                    <input class="input100" id="form_retype_password"type="password" name="pass2" placeholder="Rikonfirmim passwordi:">
                    <span class="error_form" id="pass2_error_message"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                
                <div class="container-login100-form-btn">
                <button class="login100-form-btn" type="submit" class="btn" name="">Register
                    </button>
                </div>
                <p>
  	            	Already a member? <a href="login.php">Sign in</a>
            	</p>
            </form>
        </div>
    </div>
</div>