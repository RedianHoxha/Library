<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
    <style>
       
    </style>
</head>
<body>
<div class="container-fluid">
  <div  class="row">
    <div class="col-sm-4 position-relative ">
       <?php include 'dashboard.php' ?>
    </div>
    <div class="col-sm-8">
     <div>
       <h2>YOUR PROFILE</h2>
       <p>Pershendetje, ketu mund te beni ndryshimet ne lidhje me te dhenat tuaja!</p>
     </div>
     <div>
       <h1>Your details</h1>
       <label for="emri">Emri:</label><br>
       <input type="text" id="emri" name="emri"><br>
       <label for="mbiemri">Mbiemri:</label><br>
       <input type="text" id="mbiemri" name="mbiemri"><br>
       <label for="username">Username:</label><br>
       <input type="text" id="username" name="username"><br>
     </div>
     <div>
     <button type="submit" class="">Update Details</button>
     </div>
     <hr>
     <div>
        <h1>Your email</h1>
        <p>To change your registered email address, please enter your new address below.</p>
        <label for="email">Emaili i tanishem:</label><br>
        <input type="email" id="email" name="email">
        <label for="new_email">Emaili i ri:</label><br>
        <input type="email" id="new_email" name="new_email">
        <label for="conf_email">Konfirmo emailin e ri:</label><br>
        <input type="email" id="conf_email" name="conf_email">
     </div>
     <div>
      <button type="submit" class="">Update Email</button>
      </div>
      <hr>
   <div>
        <h1>Your password</h1>
        <p>To change your password, please enter your existing password and follow the prompts.
        Passwords must be at least 10 characters in length. We recommend that you use a mixture of lower and upper case letters, numbers and special characters.</p>
        <label for="pass1">Current password:</label><br>
        <input type="password" id="pass1" name="pass1">
        <label for="pass2">New password:</label><br>
        <input type="password" id="pass2" name="pass2">
        <label for="pass3">Current password:</label><br>
        <input type="password" id="pass3" name="pass3">
    </div>
    <div>
      <button type="submit" class="">Update Password</button>
    </div>
</div> 
</body>
</html>
