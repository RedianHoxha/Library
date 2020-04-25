
<?php 

$servername = "localhost";
$user = 'root';
$password = '';
$database = 'library';

$conn = mysqli_connect($servername, $user, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $emri = $_POST['fname'];
    $mbiemri = $_POST['lname'];
    $email = $_POST['email'];
    $telefoni = $_POST['number'];
    $adresa = $_POST['adress'];
    $pass = $_POST['pass'];
    $passconfirm = $_POST['passconf'];


    echo  $emri;
    echo  $mbiemri;
    echo  $email;
    echo  $telefoni;
    echo  $adresa;
    echo  $pass;
    echo  $passconfirm;




    // $sql = 'Insert into  useri (Emer,Mbiemer,Email,Tel,Adresa,Username,Password,Roli) 
    //         values ($emri, $mbiemri,$email,$telefoni,$adresa,$emri+ " "+$mbiemri,$email,$emri);';

    // mysqli_query($conn, $sql); 
?>






<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="theme_rr.css">
</head>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt">
                <img src="liber.svg" alt="libraria">
</div>
            <form class="login100-form validate-form" action="#" method="POST">
                <span class="login100-form-title">
                 <h2> Faqe Anetaresie !</h2> 
                </span>
                <div class="wrap-input100 validate-input" data-validate=" ss">
                    <input class="input100" type="text" name="fname" placeholder="Emri juaj:">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate=" dd">
                    <input class="input100" type="text" name="lname" placeholder="Mbiemri:">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate=" Prsh: ex@abc.xyz">
                    <input class="input100" type="text" name="adress" placeholder="Adresa juaj:">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate=" Prsh: ex@abc.xyz">
                    <input class="input100" type="number" name="number" placeholder="Numri i celularit:">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate=" Prsh: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Vendosni emailin:">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password eshte i domosdoshem.">
                    <input class="input100" type="password" name="pass" placeholder="Passwordi i ri :">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password eshte i domosdoshem.">
                    <input class="input100" type="password" name="passconf" placeholder="Rikonfirmim passwordi:">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                
                <div class="container-login100-form-btn">
                <button type="submit" id="button-shto" class="login100-form-btn" onclick="">Regjistrohu !</button>
                    <!-- <button class="login100-form-btn">
                        Regjistrohu !
                    </button> -->
                </div>

                

                
            </form>
        </div>
    </div>
</div>