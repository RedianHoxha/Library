<?php 

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_GET['del'])) {

    mysqli_query($link, "delete  FROM `useri` WHERE IdUser = '$_GET[del]'") or die(mysql_error());
    

header('location: Punonjes.php');
}