<?php 
session_start();

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$iduser = $_GET['editProfile'];

if(isset($_GET['editProfile']))
{
    $emri = mysqli_real_escape_string( $link,$_POST['emri']);
    $mbiemri =mysqli_real_escape_string( $link, $_POST['mbiemri']);
    $username= mysqli_real_escape_string( $link,$_POST['username']);
    $email =mysqli_real_escape_string( $link, $_POST['email']);
    $id = $_GET['editProfile'];

    $sql = "UPDATE  useri set Emer = ?, Mbiemer =?, Email =? 
    WHERE IdUser = ?;";

        $stmt = mysqli_stmt_init($link);

        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            echo 'error';
        }
        else
        {
            
            mysqli_stmt_bind_param($stmt,"sssi",$emri,$mbiemri,$email,$id);
            mysqli_stmt_execute($stmt);
            header('location: ../HTML/NefoeditProfile.php');

        }
    }
else
    {
        echo 'Error';
    }
?>

