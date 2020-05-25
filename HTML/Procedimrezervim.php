<?php 
 session_start();
    $user=$_SESSION['user'];
    $link = mysqli_connect("localhost", "root", "", "library");
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    if (isset($_POST['rezervo']))
     {
        $titulllibri = $_GET['rezervo'];
        // $emriblersit = $_POST['emer'];
        // $mbiemerblersi = $_POST['mbiemer'];
        // $telefoni = $_POST['tel'];
        // $emailblersi = $_POST['email'];
        // $adresblersi = $_POST['adresa'];
        $datakthimit = $_POST['datakthimit'];
        $datasotme = date("Y-m-d");
        // $sasailibrave = "select * from librari  where IdLibri = '$idlibri' and Statusi = 'Blere";
        // $result=mysqli_query($link, $sasailibrave);  
        $ekzistonuseri = "select * from useri where Username = '$user'";
       // echo $ekzistonuseri;
        $resultuseri=mysqli_query($link, $ekzistonuseri);
        $rowekzistus = mysqli_fetch_array($resultuseri);
        $iduser = $rowekzistus['IdUser'];
       // echo $iduser;


        $sasailibrave = "select * from librari  where Titull = '$titulllibri'";
        //echo $sasailibrave;
        $result=mysqli_query($link, $sasailibrave);
        if(mysqli_num_rows($result)>0)
        {
            $acc_fetch = mysqli_fetch_array($result);
            $idlibri =  $acc_fetch['IdLibri'];
            $sasiaktuale = $acc_fetch['Sasia'];
            $sasiaktuale --;

            
            $sqlinsertekrezervo = " insert into rezervo (DatRezervimi, Kohezgjatja, IdLibri ,IdLexusi)
            values ('$datasotme','$datakthimit', '$idlibri', '$iduser')";
            //echo $sqlinsertekrezervo;
            mysqli_query($link, $sqlinsertekrezervo);

            $sqlupdatelibrat = "update librari set Sasia = '$sasiaktuale' where IdLibri = '$idlibri' ";
            //echo $sqlupdatelibrat;
             mysqli_query($link, $sqlupdatelibrat);
             header('location: ../HTML/homeperdorues.php');
        }
        // else {
        //     echo 'jemi ne fund';
        // }

        


     }
?>