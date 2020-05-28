
<?php 
 session_start();
 $user=$_SESSION['user'];

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_POST['Bli']))
 {
 
    $titull = $_GET['Bli'];

    // $emriblersit = $_POST['emer'];
    // $mbiemerblersi = $_POST['mbiemr'];
    // $telefoni = $_POST['tel'];
    // $emailblersi = $_POST['email'];
    // $adresblersi = $_POST['adresa'];
    $sasilibrash = $_POST['sasia'];
    

    $datablerjes = date("Y-m-d");

    
  //  $p1 = substr($emriblersit,0,4);
  //  $p2 = substr($mbiemerblersi,0,4);
  //  $username = $p1.$p2;
  $ekzistonuseri = "select * from useri where Username = '$user'";
  //echo $ekzistonuseri;
  $resultuseri=mysqli_query($link, $ekzistonuseri);
  $rowekzistus = mysqli_fetch_array($resultuseri);
  $iduser = $rowekzistus['IdUser'];
  $roli = $rowekzistus['Roli'];
 // echo $iduser;

    $sasailibrave = "select * from librari  where Titull = '$titull' and Statusi = 'Blere' and Sasia > 0";
   // echo $sasailibrave;
    $result=mysqli_query($link, $sasailibrave);


    if(mysqli_num_rows($result)>0)
    {
  
      //Behet zbritja e librave qe lexuesi do bleje
           $acc_fetch = mysqli_fetch_array($result);
           $idlibri =  $acc_fetch['IdLibri'];
           //echo $idlibri;
           $sasiaktuale = $acc_fetch['Sasia'];
           $diferenca = $sasiaktuale - $sasilibrash;

      
      //kontrollojme nese personi qe po blen tani ekziston ne databazes
          //  $ekzistonuseri = "select * from useri where Emer = '$emriblersit' and Mbiemer='$mbiemerblersi' and  Username = '$username' and Roli = 'Bleres'";
          //  $resultuseri=mysqli_query($link, $ekzistonuseri);


          //  if(mysqli_num_rows($resultuseri) == 0)
          //    {
            //   $sqlinsertuser = "insert into  useri (Emer, Mbiemer , Email, Tel , Adresa, Username, PassWord, Roli) 
            //            VALUES('$emriblersit','$mbiemerblersi', '$emailblersi', '$telefoni', '$adresblersi','$username','Bleres','Bleres')";
            //            echo $sqlinsertuser;
            //            mysqli_query($link, $sqlinsertuser);

                      
                      
            //            $sqlunseriri = "select * from useri where Emer = '$emriblersit' and Mbiemer='$mbiemerblersi' and  Username = '$username' and Roli = 'Bleres'";
            //            echo $sqlunseriri;
            //            $resultuseriri = mysqli_query($link, $sqlunseriri);
                       
            //            if(mysqli_num_rows($resultuseriri) != 0)
            //            {
            //             $row = mysqli_fetch_array($resultuseriri);
            //             $iduserri = $row['IdUser'];

            //             echo $iduserri;

            //             $sqlinsertekbli = " insert into bli (DateBlerje, IdLibri, Sasia ,IdBlersi)
            //             values ('$datablerjes','$idlibri', '$sasilibrash', '$iduserri')";
            //             echo $sqlinsertekbli;
            //              mysqli_query($link, $sqlinsertekbli);

                        
                              
            //              $gjejidpunee = "select * from bli where DateBlerje= '$datablerjes' and IdLibri= '$idlibri'and Sasia='$sasilibrash' and IdBlersi= '$iduserri'";
            //              echo $gjejidpunee;
            //              $rezultatblerjee = mysqli_query($link, $gjejidpunee);
            //            //echo $rezultatblerjee;
         
            //              if(mysqli_num_rows($rezultatblerjee) == 1)
            //              {
            //                $rowbli = mysqli_fetch_array($rezultatblerjee);
            //                $idpune = $rowbli['IdBlerje'];
            //                echo $idpune;
            //                $sqlshqyrto = "Insert into shqyrtuarnga (IdPunonjsi,IdPune,StatusPune) values ($iduserri,$idpune,'To Do')";
            //                echo  $sqlshqyrto;
            //                mysqli_query($link, $sqlshqyrto);
            //               }
                       
            //                      echo 'jemi ketu siper';
            //                   //header('location: ../HTML/test.php');
            //             }
            //           }
            //  else
            //  {
            //   $rowekzistus = mysqli_fetch_array($resultuseri);
            //   $iduser = $rowekzistus['IdUser'];

          

                $sqlinsertekbli = " insert into bli (DateBlerje, IdLibri, Sasia ,IdBlersi,statusi) values('$datablerjes','$idlibri', '$sasilibrash', ' $iduser','To Do')";
                 //echo  $sqlinsertekbli;
                mysqli_query($link, $sqlinsertekbli);
                //$last_idbli = mysqli_insert_id($link);

            //     $gjejidpunee = "select * from bli where DateBlerje= '$datablerjes' and IdLibri= '$idlibri'and Sasia='$sasilibrash' and IdBlersi= '$iduser'";
            //     echo $gjejidpunee;
            //     $rezultatblerjee = mysqli_query($link, $gjejidpunee);
            //   //echo $rezultatblerjee;

            //     if(mysqli_num_rows($rezultatblerjee) == 1)
            //     {
            //       $rowbli = mysqli_fetch_array($rezultatblerjee);
            //       $idpune = $rowbli['IdBlerje'];
            //       echo $idpune;
            //       $sqlshqyrto = "Insert into shqyrtuarnga (IdPunonjsi,IdPune,StatusPune) values ($iduser,$idpune,'To Do')";
            //       echo  $sqlshqyrto;
            //       mysqli_query($link, $sqlshqyrto);
            //      }
            // echo 'jemi ketu poshte';
            //     //header('location: ../HTML/test.php');
            //    /// echo 'useri ekziston thjesht u shtua rou ne tabele bli';
            //  }


                $sqlupdatelibrat = "update librari set Sasia = '$diferenca' where IdLibri = '$idlibri' ";
                mysqli_query($link, $sqlupdatelibrat);

                if($roli === 'Admin')
                {
                  header('location: ../HTML/homeadmin.php');

                }
                else if ($roli === 'Vizitor')
                {
                  header('location: ../HTML/homelexues.php');
                }
                else{
                 header('location: ../HTML/homeperdorues.php');
   
                }

    }
    else
    {


          $sasaillibrave = "select * from librari  where Titull = '$titull' and Statusi = 'Dhuruar'";
          //echo $sasaillibrave;
          $result=mysqli_query($link, $sasaillibrave);
      
          if(mysqli_num_rows($result)>0)
            {
              Echo 'fatkeqesisht ne librarine tone te gjith librat me titull '.  $titull. ' jane shitur por ju mund ta rezervoni nje te tille per ta lexuar deri sa ne te marrim ne librarine tone kete liber perseri';
            }
            else
            {
              echo 'Na vjen keq por ky liber na ka mbaruar Faleminderit';
            }
      }
  } 
      
?>