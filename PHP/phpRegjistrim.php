<?php 

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
    $emri = $_POST['emer'];
    $mbiemri = $_POST['mbiemer'];
    $username= $_POST['username'];
    $email = $_POST['email'];
    //$telefoni = $_POST['tel'];
    $adresa = $_POST['adrese'];
   $password=$_POST['pass1'];
   $reset_password=$_POST['pass2'];

$sql = "INSERT INTO useri (Emer,Mbiemer,Email,Tel,Adresa,Usename,PassWord,Roli)
VALUES('$emri','$mbiemri', '$email',11234567 , '$adresa','$username','$password','$mbiemri')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);

?>