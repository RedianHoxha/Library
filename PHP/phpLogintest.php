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


   $rest = substr($passwordenkriptuar, 2, -2);

$ekzistonuseri = "select * from useri where Username = '$username' and Password = '$passwordenkriptuar'";
$resultuseri=mysqli_query($link, $ekzistonuseri);

        if(mysqli_num_rows($resultuseri)!=0)
        {
            $row = mysqli_fetch_array($resultuseri);

            //echo 'ketu';
        
            session_start();
            $rolilogusit = $row['Roli'];

            $_SESSION['user']= $username;

            
            if($rolilogusit != 'Vizitor')
            {
                    if($rolilogusit == 'Admin')
                    {
                        //echo $rolilogusit;
                        header('location: ../HTML/PunonjsiHome.php');
                    }
                    else
                    {
                        //echo $rolilogusit . '2';
                        header('location: ../HTML/punonjesthjeshtehome.php');
                    }
            
        
            }
            else{
            //echo 'ti nuk je admin';
                        $_SESSION['user']= $username;
                        header('location: ../HTML/homelexues.php');
            }
       }
       else
       {
        echo 'gabim passs';
       }
}

mysqli_close($link);


?>