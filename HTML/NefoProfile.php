<?php 
        session_start();
        //include('../PHP/session.php');
        $user=$_SESSION['user'];
        
        $link = mysqli_connect("localhost", "root", "", "library");
        
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sqlquery="Select * from useri  where Username = '$user'";
                   $result=mysqli_query($link, $sqlquery);
                   $row = mysqli_fetch_array($result)
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Library Profile</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link  href="../CSS/NefoProlifiStilizime.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body class="body-example">
        <div class="slide-right">
        <h2>Miresevini ne profilin tuaj <i><?php echo $row['Emer']; ?> </i>!</h2>
        </div>
        <div class="buttons">
        <div class="button_cont" align="center"><a class="example_e" href="NefoeditProfile.php"  rel="nofollow noopener">Edit your profile!</a></div><br>
        <div class="button_cont" align="center"><a class="example_e" href="shfaqwishlist.php"  rel="nofollow noopener">Te preferuarat🤍</a></div><br>
        <div class="button_cont" align="center"><a class="example_e" href="shporta.php"  rel="nofollow noopener">Shporta</a></div><br>
        <div class="button_cont" align="center"><a class="example_e" href="../PHP/logout.php" rel="nofollow noopener"> Shkycu!</a></div><br>
       </div>
    </body>
</html>