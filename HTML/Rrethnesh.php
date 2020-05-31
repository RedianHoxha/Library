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
    <style>
        #map{
             width: 400px;
    height: 320px;
        }
    </style>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqRQUzG8s_7YAqkbG7nxTRD41eul1dMwA&callback=initMap">
    </script>
</head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../CSS/styleSara.css" />

    <title>Rreth nesh</title>
    <script>
        function initMap() {

            var Libraria = { lat: 41.3194, lng: 19.8172 };

            var map = new google.maps.Map(
                document.getElementById('map'), { zoom: 17, center: Libraria });

            var marker = new google.maps.Marker({
                position: Libraria,
                map: map,
                animation: google.maps.Animation.DROP
            });



            var infowindow = new google.maps.InfoWindow({
                content: "<h4> Së shpejti: </h4>",
                maxWidth: 100,

            });

            google.maps.event.addListener(marker, 'mouseover', function () {
                infowindow.open(map, marker);

            });
            google.maps.event.addListener(marker, 'mouseout', function () {
                infowindow.close();

            });
            marker.addListener('dblclick', function () {
                google.maps.event.clearListeners(marker, 'mouseout');

            });
            google.maps.event.addListener(infowindow, 'closeclick', function () {
                google.maps.event.addListener(marker, 'mouseout');

            });

        }
    </script>
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
                <li class="active"><a href="#">Rreth nesh</a></li>
                <li><a href="searchtest.php">Libraria</a> </li>

                <li><a href="kontakti.php">Kontakti</a></li>
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
        <div id="map" ></div>

        </div>
        <div class="about">
            <h1>Doni të dini për ne?</h1> <br>
            <h4>Në këto 25 vjet tregu i botimeve ka shënuar hapa të jashtëzakonshme, duke e pasuruar ndjeshëm botën intelektuale dhe shpirtërore. Por, kjo industri vuan rëndë pasojat e keq-menaxhimit dhe marketingun pa standarde të librit.
            Në një situatë të tillë, vjen si ofertë serioze dhe mundësi zgjidhje edhe libraria.al, platforma më e re në tregun e publikimeve, pjesë e kompanisë NetTrade Albania, e cila ushtron aktivitetin e shitjeve online që prej vitit 2012. 
            Së shpejti dhe me një ambient tonin...
        </h4>
        </div>
    </header>
    </body>
</html>