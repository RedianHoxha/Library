<?php 
    $link = mysqli_connect("localhost", "root", "", "library");
 
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    if (isset($_POST['rezervo']))
     {
        $idlibri = $_GET['rezervo'];
        $emriblersit = $_POST['emer'];
        $mbiemerblersi = $_POST['mbiemer'];
        $telefoni = $_POST['tel'];
        $emailblersi = $_POST['email'];
        $adresblersi = $_POST['adresa'];
        $datakthimit = $_POST['datakthimit'];

        $sasailibrave = "select * from librari  where IdLibri = '$idlibri' and Statusi = 'Blere";
        $result=mysqli_query($link, $sasailibrave);  
        
        


     }
?>