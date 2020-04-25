<?php 

$servername = "localhost";
$user = 'root';
$password = '';
$database = 'library';

$conn = mysqli_connect($servername, $user, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $emri = $_POST['fname'];
    $mbiemri = $_POST['lname'];
    $email = $_POST['email'];
    $telefoni = $_POST['tel'];
    $adresa = $_POST['adresa'];



    $sql = 'Insert into  useri (Emer,Mbiemer,Email,Tel,Adresa,Username,Password,Roli) 
            values ($emri, $mbiemri,$email,$telefoni,$adresa,$emri+ " "+$mbiemri,$email,$emri);';

    mysqli_query($conn, $sql); 
?>