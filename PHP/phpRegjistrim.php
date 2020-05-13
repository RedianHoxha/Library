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
    $tel=$_POST['tel'];
    $adresa = $_POST['adrese'];
   $password=$_POST['pass1'];
   $reset_password=$_POST['pass2'];
    $roli = "Vizitor";
   $passwordenkriptuar=$_POST['hidenpassword'];

    

   $sqlusername= "select * from useri where Usename='$username'";
   $result=mysqli_query($link, $sqlusername);

   if(mysqli_num_rows($result)==0){

    $sql = "INSERT INTO useri (Emer,Mbiemer,Email,Tel,Adresa,Usename,PassWord,Roli)
    VALUES('$emri','$mbiemri', '$email',$tel , '$adresa','$username','$passwordenkriptuar','$roli')";
    if(mysqli_query($link, $sql)){
        
        header('location:login.php');
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
else{
    header('location:rregjistrim.php?Invalid=Please enter another Username!');
}

 
mysqli_close($link);

?>