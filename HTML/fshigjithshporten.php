<?php 

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_GET['del'])) {
    $usename =$_GET['del'];

    $fshishporten  = "DELETE from shporta  where username = '$usename'";
     //echo $updatetable;
   mysqli_query($link,$fshishporten );
    

header('location: shporta.php');
}
?>