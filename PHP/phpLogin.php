<?php 

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_POST['login_user'])) {
   $username= $_POST['username'];
   $password=$_POST['password'];
$sqlquery="Select * from useri where Usename='$username' and PassWord='$password'";
$result=mysqli_query($link, $sqlquery);
if(mysqli_num_rows($result)>0){
    $_SESSION['success'] = "You are now logged in";
    header('location: ../HTML/index.php');
} else{
    echo "ERROR:  " . mysqli_error($link);
}
}
mysqli_close($link);

?>