<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../CSS/theme_ShtoPunonjes.css">

</head>
<div class="limiter">
    <div class="container-login100">
        <div class="wraper">
          
            <form class="login100-form validate-form" action='editopunonjesquery.php?edit=<?php echo $_GET['edit'] ?>' method='post'>
                
                <?php
                    $link = mysqli_connect("localhost", "root", "", "library");
            
                    // Check connection
                    if($link === false){
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
                    if(isset($_GET['edit']))
                        {
                        $acc_query = mysqli_query($link, "SELECT * FROM `useri` WHERE IdUser = '$_GET[edit]'") or die(mysql_error());
                        $acc_fetch = mysqli_fetch_array($acc_query);
                    ?>

                <span class="login100-form-title">
                 <h2> <?php echo  $acc_fetch['Emer']; ?>  <?php echo  $acc_fetch['Mbiemer']; ?></h2> 
                </span>

                <div class="wrap-input100 validate-input" data-validate="Username">
                    <input class="input100" type="username" name="username" value="<?php echo  $acc_fetch['Username']; ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                  
                    <div class="box">
                        <select class="form-control" name="Roli">
                            <option selected="true" disabled="disabled" value="<?php echo  $acc_fetch['Roli']; ?>">Roli </option>                 
                         <option >Administrues Personeli</option>
                          <option>Menaxhues librash</option>
                          <option>Programues</option>
                          <option>Postier</option>
                          <option>Mardhenie me publikun</option>
                        </select>
                      </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Save!
                    </button>
                </div>

                <?php
            }
        ?>

                
            </form>
        </div>
    </div>
</div>