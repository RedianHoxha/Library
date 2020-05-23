
<?php 


$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_POST['Bli']))
 {
 
    $titull = $_GET['Bli'];

    $emriblersit = $_POST['emer'];
    $mbiemerblersi = $_POST['mbiemr'];
    $telefoni = $_POST['tel'];
    $emailblersi = $_POST['email'];
    $adresblersi = $_POST['adresa'];
    $sasilibrash = $_POST['sasia'];
    

    $datablerjes = date("Y-m-d");

    
$p1 = substr($emriblersit,0,4);
$p2 = substr($mbiemerblersi,0,4);
$username = $p1.$p2;

    $sasailibrave = "select * from librari  where Titull = '$titull' and Statusi = 'Blere'";
    $result=mysqli_query($link, $sasailibrave);


    if(mysqli_num_rows($result)>0)
    {
      //Behet zbritja e librave qe lexuesi do bleje
           $acc_fetch = mysqli_fetch_array($result);
           $idlibri =  $acc_fetch['IdLibri'];
           $sasiaktuale = $acc_fetch['Sasia'];
           $diferenca = $sasiaktuale - $sasilibrash;
      
      //kontrollojme nese personi qe po blen tani ekziston ne databazes
           $ekzistonuseri = "select * from useri where Emer = '$emriblersit' and Mbiemer='$mbiemerblersi' and  Username = '$username' and Roli = 'Bleres'";
           $resultuseri=mysqli_query($link, $ekzistonuseri);


           if(mysqli_num_rows($resultuseri) == 0)
             {
              $sqlinsertuser = "insert into  useri (Emer, Mbiemer , Email, Tel , Adresa, Username, PassWord, Roli) 
                       VALUES('$emriblersit','$mbiemerblersi', '$emailblersi', '$telefoni', '$adresblersi','$username','Bleres','Bleres')";
                       mysqli_query($link, $sqlinsertuser);
                      
                       $sqlunseriri = "select * from useri where Emer = '$emriblersit' and Mbiemer='$mbiemerblersi' and  Username = '$username' and Roli = 'Bleres'";
                       $resultuseriri=mysqli_query($link, $sqlunseriri);
                       
                       if($resultuseriri>0)
                       {
                        $row = mysqli_fetch_array($resultuseriri);
                        $iduserri = $row['IdUser'];
                        $sqlinsertekbli = " insert into bli (DateBlerje, IdLibri, Sasia ,IdBlersi)
                        values ('$datablerjes','$idlibri', '$sasilibrash', ' $iduserri')";
                         mysqli_query($link, $sqlinsertekbli);
                         header('location: ../HTML/index.php');
                        // echo 'u shtua user i ri dhe row i ri ne bli';

                       }
                       else{
                         echo 'ky user nuk gjendet';
                       }
             }
             else
             {
              $rowekzistus = mysqli_fetch_array($resultuseri);
              $iduser = $rowekzistus['IdUser'];

                $sqlinsertekbli = " insert into bli (DateBlerje, IdLibri, Sasia ,IdBlersi) values ('$datablerjes','$idlibri', '$sasilibrash', ' $iduser')";
                mysqli_query($link, $sqlinsertekbli);
                header('location: ../HTML/index.php');
               /// echo 'useri ekziston thjesht u shtua rou ne tabele bli';
             }


                $sqlupdatelibrat = "update librari set Sasia = '$diferenca' where IdLibri = '$idlibri' ";
                mysqli_query($link, $sqlupdatelibrat);
                
              //echo 'tablea librari u updetua';

    }
    else
    {


          $sasaillibrave = "select * from librari  where Titull = '$titull' and Statusi = 'Dhuruar'";
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