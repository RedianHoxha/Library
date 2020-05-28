<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../CSS/theme_rregjistrim.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="../JS/validimRegjistrim.js"></script>
<script src="../JS/rregjistro.js"></script>
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

                    <?php 
                    if(@$_GET['Invalid']== true)
                    {
                        ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid']?>
                    <?php
                    }
                    ?>


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
                    <input class="input100" id="username" type="text" name="username" placeholder="Username:">
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
                <div class="wrap-input100 " >
                    <input class="input100" id="form_tel"type="number" name="tel" placeholder="Vendosni nr. cel:">
                    <span class="error_form" id="tel_error_message"></span>
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
                    <input class="input100"id="form_password" type="password" name="pass1" placeholder="Passwordi:">
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
                <input type="hidden" name="hidenpassword" id="hidenpassword">
                
                <div class="container-login100-form-btn">
                <button class="login100-form-btn" type="submit" onclick="enkripto()" class="btn" name="">Register</button>
                <!--<button class="login100-form-btn" type="submit" class="btn" name="" onclick ="enkripto()">test</button>-->
                    
                </div>
                <p>
  	            	Already a member? <a href="login.php">Sign in</a>
            	</p>
            </form>
        </div>
    </div>
</div>