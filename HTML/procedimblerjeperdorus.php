
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
    $sasilibrash = $_POST['sasia'];
    

    $datablerjes = date("Y-m-d");

  $ekzistonuseri = "select * from useri where Username = '$user'";
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
           $sasiaktuale = $acc_fetch['Sasia'];
           $diferenca = $sasiaktuale - $sasilibrash;



                $sqlinsertekbli = " insert into bli (DateBlerje, IdLibri, Sasia ,IdBlersi,statusi) values('$datablerjes','$idlibri', '$sasilibrash', ' $iduser','To Do')";
                 //echo  $sqlinsertekbli;
                mysqli_query($link, $sqlinsertekbli);

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