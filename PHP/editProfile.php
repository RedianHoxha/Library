<?php 
session_start();

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo $_GET['edit'];
if(isset($_GET['edit']))
{
    $emer = $_POST['emer'];
    $mbiemer = $_POST['mbiemer'];
    $username  = $_POST['username'];
    $email= $_GET['email'];

$sql = "update useri set Emer = '$emer', Mbiemer = '$mbiemer', Usename = '$username', Email = '$email' WHERE IdUser = $_GET[edit]";
mysqli_query($link,$sql);
header('location: ../HTML/NefoeditProfile.php');

}
else
{
    echo 'Error';
}
?>
