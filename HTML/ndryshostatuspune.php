

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
            <form class="login100-form " id="forme_regjistrimi" action="ndryshostatus.php" method="POST">
                <span class="login100-form-title">
                 <h2>Procedo Punen</h2> 
                </span>
                <?php 
                if(isset($_GET['ndrysho']))
            {
                session_start();
                $user=$_SESSION['user'];
                $pune = $_GET['ndrysho'];
                $tippune = $_GET['pune'];
            }
            ?>


                <div class="wrap-input100">
                    <p style="color: red">Id e punes</p>
                    <input class="input100" id="form_retype_password"  name="id" value= "<?php echo $pune?>">
                    <span class="error_form" id="pass2_error_message"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                
                <p style="color: red">Tipi i punes</p>
                <div class="wrap-input100">
                    <input class="input100" id="tip_pune" type="text" name="tip_pune" value= "<?php echo $tippune ?>" >
                    <span class="error_form" id="address_error_message"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="box">
                    <p style ="color :red">Statusi i ri i punes</p>
                        <select class="form-control" name="statusipunes">
                            <option selected="true" disabled="disabled">To Do </option>                 
                         <option >In Progres</option>
                          <option>Done</option>
                        </select>
                      </div>
                      <div class="container-login100-form-btn">
                <button class="login100-form-btn" type="submit" class="btn"  name = "ndrysho">Ndrysho</button>
                
            </form>
        </div>
    </div>
</div>