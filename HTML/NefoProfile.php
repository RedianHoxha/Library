<?php 
        session_start();
        //include('../PHP/session.php');
        $user=$_SESSION['user'];
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
        <h2>Miresevini ne profilin tuaj!</h2><br>
        </div>
        <div class="button_cont" align="center"><a class="example_e" href="../HTML/NefoeditProfile.php"  rel="nofollow noopener">Edit your profile!</a></div><br>
        <div class="button_cont" align="center"><a class="example_e" href="add-website-here"  rel="nofollow noopener">Your Orders!</a></div><br>
        <div class="button_cont" align="center"><a class="example_e" href="add-website-here"  rel="nofollow noopener">Wish List🤍</a></div><br>
        <div class="button_cont" align="center"><a class="example_e" href="../HTML/AddressBook.php" rel="nofollow noopener">Address!</a></div><br>
    </body>
</html>