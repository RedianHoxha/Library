<?php 
session_start();

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//echo $_GET['edit'];
if(isset($_GET['edit']))
{
    $username = $_POST['username'];
    $roli = $_POST['Roli'];


$sql = "update useri set Username = '$username', Roli = '$roli' WHERE IdUser = $_GET[edit]";
mysqli_query($link,$sql);
header('location: ../HTML/Punonjes.php');
}
else
{
    echo 'Error';
}
?>