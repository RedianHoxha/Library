<?php 

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_POST['login_user'])) {
   $username= mysqli_real_escape_string($link,$_POST['username']);
   $password=mysqli_real_escape_string($link,$_POST['password']);
   $passwordenkriptuar=mysqli_real_escape_string($link,$_POST['hidenpassword']);

//    echo $passwordenkriptuar;
//    echo $password;

$sqlquery="Select * from useri where Username='$username' and PassWord='$passwordenkriptuar'";
$result=mysqli_query($link, $sqlquery);

if(mysqli_num_rows($result)>0){
    
    session_start();
    $row = mysqli_fetch_array($result);
    $rolilogusit = $row['Roli'];
    //echo $rolilogusit;
    //$_SESSION['success'] = "You are now logged in";
    //echo "<script>console.log('Debug Objects: " . $username. "' );</script>";
    if($rolilogusit != 'Vizitor'){
        $_SESSION['user']= $username;
        if($rolilogusit == 'Admin')
        {
            header('location: ../HTML/PunonjsiHome.php');
        }
        else
        {
            header('location: ../HTML/punonjesthjeshtehome.php');
        }
        
       // echo $rolilogusit;
    }
    else{
        //echo 'ti nuk je admin';
        $_SESSION['user']= $username;
        header('location: ../HTML/homelexues.php');
    }
  
    //
//echo $username;
} else{
    echo "ERROR:  " . mysqli_error($link);
}

 }
mysqli_close($link);

?>