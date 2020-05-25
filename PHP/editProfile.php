<?php 
session_start();

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$iduser = $_GET['editProfile'];

if(isset($_GET['editProfile']))
{
    $emer = $_POST['emri'];
    $mbiemer = $_POST['mbiemri'];
    $username  = $_POST['username'];
    $email= $_POST['email'];

    // echo $email;
    // echo $emer;
    // echo $username;
    // echo $email;
    $sql = "update useri set Emer = '$emer', Mbiemer = '$mbiemer', Username = '$username', Email = '$email' WHERE IdUser = $_GET[editProfile]";


mysqli_query($link,$sql);
header('location: ../HTML/NefoeditProfile.php');


}
else
{
    echo 'Error';
}
?>
