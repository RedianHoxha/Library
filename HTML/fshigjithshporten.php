<?php 

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_GET['del'])) {
    $usename =$_GET['del'];

    $updatetable = "UPDATE wishlist set shporta='' where username = '$usename' and shporta = 'Po' ";
     //echo $updatetable;
   mysqli_query($link,$updatetable );
    

header('location: shporta.php');
}
?>