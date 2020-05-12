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
    $isbn = $_POST['isbn'];
    $titulli = $_POST['titull'];
    $autor  = $_POST['autori'];
   
    $zhanri = $_POST['zhanri'];
    $cmimi = $_POST['cmimi'];

$sql = "update librari set ISBN = '$isbn', Titull = '$titulli', Autor = '$autor', Zhanri = '$zhanri', Cmimi = '$cmimi' WHERE IdLibri = $_GET[edit]";
mysqli_query($link,$sql);
header('location: ../HTML/Libraria.php');


}
else
{
    echo 'Error';
}
?>
