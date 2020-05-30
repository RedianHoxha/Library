<?php 

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_GET['del'])) {
    $iduser = $_GET['del'];
    $sql = "delete  FROM `useri` WHERE IdUser = '$iduser'";
   
//echo $sql;
    mysqli_query($link,$sql) or die(mysql_error());
    

header('location: Punonjes.php');
}