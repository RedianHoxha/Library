<?php 
session_start();

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$isbn = $_POST['isbn'];
$titulli = $_POST['titull'];
$autor  = $_POST['autori'];
$pershkrim = $_POST['pershkrimi'];
$zhanri = $_POST['zhanri'];
$cmimi = $_POST['cmimi'];
$sasia = $_POST['sasia'];
$statusi = $_POST['statusi'];
$foto = $_POST['foto'];


if (isset($_POST['add'])) {

    $sqlquery="Select * from librari where ISBN='$isbn'";
    $result=mysqli_query($link, $sqlquery);

      if(mysqli_num_rows($result)>0)
        {

            $sqlqueriperliber = "Select * from librari where ISBN='$isbn' and Statusi = 'Blere'";
            $sasialibreveekzistues = mysqli_query($link, $sqlqueriperliber);
            $acc_fetch = mysqli_fetch_array($sasialibreveekzistues);
            $sasiaktuale = $acc_fetch['Sasia'];
        
            $sum =  $sasiaktuale + $sasia; 


            $sqlupdate = "update librari set Sasia = $sum where ISBN='$isbn'" ;
            mysqli_query($link, $sqlupdate);
            header('location: ../HTML/Libraria.php');
        }
else
    {
        $sqlshtoliberteri = "iNSERT INTO librari(ISBN, Titull, Autor, Pershkrim, Zhanri, Sasia, Statusi, Cmimi, Foto) 
        values('$isbn', '$titulli', '$autor', '$pershkrim', '$zhanri', '$sasia','$statusi', '$cmimi', '$foto')";
        mysqli_query($link, $sqlshtoliberteri);
        header('location: ../HTML/Libraria.php');
    }



}


?>