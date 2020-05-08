<?php 
session_start();

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_GET['edit'])) {
    // $id = $_SESSION['idlib'];
    $update = true;

    $sql="SELECT * FROM librari WHERE IdLibri= $_GET['edit']";
    echo $sql;
    $result=mysqli_query($link, $sql);

    if (count($result) == 1 ) {
        $row = mysqli_fetch_array($record);

        $idlibri = $row['IdLibri']; 
        $isbn = $row['ISBN']; 
        $titulli = $row['Titull']; 
        $autor = $row['Autor']; 
        $pershkrim = $row['Pershkrim']; 
        $zhanri = $row['Zhanri'];
        $sasia = $row['Sasia']; 
        $statusi = $row['Statusi']; 
        $cmimi = $row['Cmimi']; 
        $foto = $row['Foto'];

        echo $titulli;
    }
}