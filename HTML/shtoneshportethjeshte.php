<?php 
            
            session_start();
            //include('../PHP/session.php');
            $user=$_SESSION['user'];
            $link = mysqli_connect("localhost", "root", "", "library");
        
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        //echo 'hi';
    if (isset($_GET['Bli']))
    {
    
        $titull =$_GET['Bli'];
        $isbn  = $_GET['isbn'];
       // echo $user;
        $ekzton = "SELECT * from shporta where Titull = '$titull' and username = '$user'";
        $result=mysqli_query($link, $ekzton);
        if(mysqli_num_rows($result)>0)
        {
        //     $updatetable = "UPDATE wishlist set shporta='Po' where username = '$user' and Titull ='$titull'";
        //   //  echo $updatetable;
        //   mysqli_query($link,$updatetable );
        header('location:searchtest.php');
        //echo 'sbejme gje';

        }
        else
        {
            $merrliber = "SELECT * from librari where ISBN = '$isbn'  and  Titull = '$titull'";
            $result=mysqli_query($link, $merrliber);
            if(mysqli_num_rows($result)>0)
            {
                $row = mysqli_fetch_array($result);

                $idlibri =$row['IdLibri'];
                $autor =$row['Autor'];
                $pershkrim = $row['Pershkrim'];
                $zhanri =$row['Zhanri'];
                $sasia = $row['Sasia'];
                $statusi = $row['Statusi'];
                $cmimi = $row['Cmimi'];
                $shporta = 'Po';

                $shtolibernshporte = "INSERT into shporta (IdLibri,ISBN,Titull,Autor,Pershkrim,Zhanri,Sasia,Statusi,Cmimi,username)
                VALUES ('$idlibri','$isbn', '$titull','$autor','$pershkrim','$zhanri','$sasia','$statusi','$cmimi','$user')";
               // echo $shtolibernshporte;

                mysqli_query($link, $shtolibernshporte);
               header('location:searchtest.php');
            }
            else
            {
                echo 'Ky liber nuk eshte ne librar';

            }

        }


    }
 ?>