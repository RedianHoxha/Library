<?php 

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_POST['login_user'])) {
   $username= $_POST['username'];
   $password=$_POST['password'];
   $passwordenkriptuar=$_POST['hidenpassword'];

//    echo $passwordenkriptuar;
//    echo $password;

$sqlquery="Select * from useri where Usename='$username' and PassWord='$passwordenkriptuar'";
$result=mysqli_query($link, $sqlquery);

if(mysqli_num_rows($result)>0){
    
    session_start();
    $_SESSION['success'] = "You are now logged in";
    //echo "<script>console.log('Debug Objects: " . $username. "' );</script>";
    $_SESSION['user']= $username;
    header('location: ../HTML/homeperdorues.php');

} else{
    echo "ERROR:  " . mysqli_error($link);
}

 }
mysqli_close($link);

?>