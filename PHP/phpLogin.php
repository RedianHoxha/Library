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


   $rest = substr($passwordenkriptuar, 1, -2);
   $rest.='"';
    $sqlquery="Select * from useri where Username=? and PassWord=?";
    $stmt = mysqli_stmt_init($link);

    if(!mysqli_stmt_prepare($stmt,$sqlquery))
        {
            echo 'error';
        }
    else
    {
        echo $rest;
        echo $passwordenkriptuar;

        //echo 'ketusiper';
        mysqli_stmt_bind_param($stmt,"ss",$username,$rest);
        mysqli_stmt_execute($stmt);
        //echo $stmt;
        $result = mysqli_stmt_get_result($stmt);
        $row =mysqli_fetch_assoc($result);

        //echo mysqli_num_rows($result);

        if(mysqli_num_rows($result)!=0)
        {
            //echo 'ketu';
            $pass= $row['PassWord'];
            //echo $pass;
            $rolilogusit = $row['Roli'];

            // if($pass == $rest)
            // {
                
        
                session_start();

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

            // }
            // else
            // {
            //         echo 'pass gabim';
            // }

        }
        else
        {
            header('location:login.php?Invalid=Username or PassWord is wrong!');
        }
    }
}

mysqli_close($link);


?>