<?php 
        session_start();
        //include('../PHP/session.php');
        $user=$_SESSION['user'];

        $link = mysqli_connect("localhost", "root", "", "library");
 
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
        $ekzistonuseri = "select * from useri where Username = '$user'";
        //echo $ekzistonuseri;
        $resultuseri=mysqli_query($link, $ekzistonuseri);
        $rowekzistus = mysqli_fetch_array($resultuseri);
        $roli = $rowekzistus['Roli'];
        $destinacioni;
        $destinacionhome;
        
        if($roli === 'Admin')
        { 
            $destinacioni = "PunonjsiHome.php";
            $destinacionhome = "homeadmin.php";
        }
        else{
            $destinacioni = "punonjesthjeshtehome.php";
            $destinacionhome = "homeperdorues.php";
        }
      ?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../CSS/styleSara.css" />

    <title>Kontakti</title>
</head>

<body>
    <header>
        <div class="nav">
            <div class="logo">
                <ul>
                    <li>
                        <img src="../FOTO/logo.png" /></li>
            </div>
            <ul>
                <li><a href=<?php echo $destinacionhome?>>Home</a></li>
                <li><a href="Rrethnesh.php">Rreth nesh</a></li>
                <li><a href="searchtest.php">Libraria</a> </li>

                <li class="active"><a href="#">Kontakti</a></li>
                <li><a href="dhuro.php">DHURO!</a></li>
            </ul>
        </div>
        <div class="nav2">
            <ul>
                <li><a href="NefoProfile.php"><?php echo $user ?></a></li>
                <li><a href=<?php echo $destinacioni?>>Work Page</a></li>
                <li><a href="../PHP/logout.php">Dil</a></li>
            </ul>
        </div>
        <div class="contact">
            <h1>Mund të na kontaktoni në: </h1>
            <ul>
                <li><a href="https://www.facebook.com"><img src="../FOTO/fb.png"></a></li> <br><bR>
                <li><a href="https://www.instagram.com"><img src="../FOTO/insta.png" width="10px"></a></li> <br><br>
                <li> E-mail: library@info.al </li> <br><br>
                <li> +355 67 61 622 </li>
                
            </ul>
        </div>