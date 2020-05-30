<?php 
 
 $link = mysqli_connect("localhost", "root", "", "library");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_POST['reset'])) {

   $username= mysqli_real_escape_string($link,$_POST['username']);
   $password=mysqli_real_escape_string($link,$_POST['password']);
   $passwordd=mysqli_real_escape_string($link,$_POST['password2']);
   $passwordenkriptuar=mysqli_real_escape_string($link,$_POST['hidenpassword']);


   $sqluseri = "update useri set PassWord = '$passwordenkriptuar' where Username='$username'";
   if(mysqli_query($link, $sqluseri)){
        
    header('location:../PHP/login.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}


 ?>