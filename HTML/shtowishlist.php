<?php 
        session_start();
        //include('../PHP/session.php');
        $user=$_SESSION['user'];
    
        $link = mysqli_connect("localhost", "root", "", "library");
 
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        if (isset($_GET['wishlist']))
        {
            $idlibri = $_GET['wishlist'];
            // echo $idlibri .'   '.$user;
            $merrvleratlibrit = "select * from librari where IdLibri = '$idlibri'";
            echo $merrvleratlibrit;
            $rezultatkthyer=mysqli_query($link, $merrvleratlibrit);
                        
            if(mysqli_num_rows($rezultatkthyer) != 0)
            {
                $row = mysqli_fetch_array($rezultatkthyer);

                $isbn = $row['ISBN'];
                //echo $isbn;
                $titull = $row['Titull'];
                $autor = $row['Autor'];
                $pershkrim = $row['Pershkrim'];
                $zhanri = $row['Zhanri'];
                $sasia = $row['Sasia'];
                $status = $row['Statusi'];
                $cmimi = $row['Cmimi'];

                $kontrollonqseshtemepare = "select * from wishlist where IdLibri = '$idlibri' and username = '$user'";
                //echo $kontrollonqseshtemepare;
                $rezultlibri=mysqli_query($link, $kontrollonqseshtemepare);

                if(mysqli_num_rows($rezultlibri) == 0)
                {
                    
                    $sql = "insert into wishlist (IdLibri,ISBN,Titull,Autor,Pershkrim,Zhanri,Sasia,Statusi,Cmimi,username)
                     values ('$idlibri','$isbn','$titull','$autor','$pershkrim','$zhanri','$sasia ','$status','$cmimi','$user')";
                     //echo $sql;
                    mysqli_query($link,$sql);

                }


            $sqlroliuserit = "select *from useri where Username = '$user'";
            echo $sqlroliuserit;
            $rezultat = mysqli_query($link,$sqlroliuserit);

            if(mysqli_num_rows($rezultat) != 0)
            {
                $row = mysqli_fetch_array($rezultat);
                $roliuserit = $row['Roli'];

                echo $roliuserit;
                if($roliuserit == 'Admin')
                {
                    //echo 'siper';
                    header('location: homeperdorues.php');
                }
                else
                {
                    //echo 'poshte';
                    header('location: homelexues.php');
                }
            }
            

        }
        else
        {
                echo 'jemi ketu poshte';
        }
          
    }
?>