<?php 

session_start();

$link = mysqli_connect("localhost", "root", "", "library");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

    $fjalekyce = mysqli_real_escape_string($link,$_POST['fjalekyce']);

    $kerkolibra = "SELECT * from librari where Titull = ? or Autor = ? or Zhanri = ?;";
    $stmt = mysqli_stmt_init($link);
  
    if(!mysqli_stmt_prepare($stmt,$kerkolibra))
    {
        echo 'smund te behet lidhje';
    }
else
    {
        mysqli_stmt_bind_param($stmt,"sss",$fjalekyce,$fjalekyce,$fjalekyce);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result)!=0)
        {

            echo 'karezultat';

        }
        else
        {
            header('location:search.php?Invalid=Me kete fjale qe ju sapo kerkuar nuk rezulton asgje!Faleminderit');
        }
    }




?>