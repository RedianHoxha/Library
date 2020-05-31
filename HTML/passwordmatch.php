<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="../JS/validimLogin.js"></script>
<script src="../JS/logohu.js"></script>
</head>
<body style=" background-color:lightcyan">
<form class="pure-form" id="login_form" method="POST" action="../HTML/nderropass.php">
<fieldset style=" background-color: cornsilk; width: 500px; position: absolute; top: 30%; height: 300px; left: 30%; box-shadow: 3px 3px blueviolet;">
            <legend style="font-style: italic; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Rivendosja e password-it te ri.</legend>


                <input type="text" placeholder="Username"  autocomplete="off" style="height: 37px; border-radius: 25px; text-align: center; font-style: italic; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; top: 44px; left: 36%; position: absolute;"
                name="username" id="username" >

                <input type="password" placeholder="Password" style="height: 37px; border-radius: 25px; text-align: center; font-style: italic; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serifposition; position: absolute; top: 107px; left:36%;"
                id="password"  name="password" required>


                <input type="password" placeholder="Confirm Password" style="height: 37px; border-radius: 25px; ; text-align: center; font-style: italic; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; position: absolute; top: 177px; left: 36%;"
                id="password2" name="password2" required>


                <input type="hidden" name="hidenpassword" id="hidenpassword">
              
                   <button  class="pure-button pure-button-primary" style="height: 37px; border-radius: 25px; font-style: italic; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; left: 45%; top: 248px; position:absolute;"
                   name="reset" type="submit" class="btn"  onclick="dekripto()"> Login </button> 
               
                
                </fieldset>
                <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("password2");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
            </form>
    </body>
    </html>
 