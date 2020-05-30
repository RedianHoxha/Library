<?php 

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_GET['del'])) {

    $delete = "delete  FROM `wishlist` WHERE ISBN = '$_GET[del]'";
    //echo $delete;
    mysqli_query($link,$delete ) or die(mysql_error());
    

header('location: shfaqwishlist.php');
}
else if (isset($_GET['delete']))
{
    $usename =$_GET['user'];
    $isbn =$_GET['delete']; 

    $updatetable = "UPDATE wishlist set shporta='' where username = '$usename' and shporta = 'Po' and ISBN = '$isbn' ";
     //echo $updatetable;
   mysqli_query($link,$updatetable );

   header('location: shporta.php');
}
?>