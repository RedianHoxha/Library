<?php 
             session_start();
             //include('../PHP/session.php');
             $user=$_SESSION['user'];

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ekzistonuseri = "select * from useri where Username = '$user'";
//echo $ekzistonuseri;
$resultuseri=mysqli_query($link, $ekzistonuseri);
$rowekzistus = mysqli_fetch_array($resultuseri);
$roli = $rowekzistus['Roli'];


if (isset($_POST['ndrysho']))
 {
     $idpune = $_POST['id'];
     $statusiri = $_POST['statusipunes'];
     $tipipunes = $_POST['tip_pune'];

     $sqlekzistonpune = "select * from shqyrtopune where idpune ='$idpune' and TipiPunes ='$tipipunes' and userpunonjsi = '$user'";
     //echo $sqlekzistonpune;
     $result = mysqli_query($link, $sqlekzistonpune);
     //echo mysqli_num_rows($result);
     if(mysqli_num_rows($result) == 0)
     {


        //echo 'ushtua i ri';
        $sqlinser = "insert into shqyrtopune (idpune,userpunonjsi,statusi,TipiPunes) values ('$idpune','$user','$statusiri','$tipipunes')";
           //echo $sqlinser;
         mysqli_query($link,$sqlinser);
     }
     else 
     {
         //echo 'update';
         $sqlupdatetable = "update  shqyrtopune set statusi =  '$statusiri' where idpune ='$idpune' and TipiPunes ='$tipipunes' and userpunonjsi = '$user'";
         //echo $sqlupdatetable;
         mysqli_query($link,$sqlupdatetable);
     }


    if($tipipunes === 'blerje')
    {
      // echo 'blerje'; 
    $sqlupdeto = "update bli set statusi = '$statusiri' where IdBlerje = '$idpune'";
    //echo $sqlupdeto;
    mysqli_query($link,$sqlupdeto);

    }
    else if($tipipunes === 'rezervim')
    {
       // echo 'rezervim';
        $sqlupdetorezervo = "update rezervo set statusi = '$statusiri' where IdRezervimi = '$idpune'";
        //echo $sqlupdetorezervo;
        mysqli_query($link,$sqlupdetorezervo);

    }

    
    if($roli === 'Admin')
    { 
        header('location:PunonjsiHome.php');
    }
    else{
      header('location: ../HTML/punonjesthjeshtehome.php');
    }

 }
?>