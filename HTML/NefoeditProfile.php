<?php 
        session_start();
        //include('../PHP/session.php');
        $user=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Edit</title>
    <style>
    #edit{
      background-image: url("../FOTO/marble.jpg");
    }
    .profile h4{
      margin-bottom: 6px;
    }
    .form-group{
      margin-right: 70px;
    }
    </style>
</head>
<body>
<div class="container-fluid">
  <div  class="row">
    <div id="dhashb"class="col-sm-4 position-relative ">
       <?php include 'dashboard.php' ?>
    </div>
    <div class="col-sm-8">
     <div class="profile">
     <h3><i class="fa fa-user-o"></i> YOUR PROFILE</h3>
       <h4>Pershendetje, ketu mund te beni ndryshimet ne lidhje me te dhenat tuaja!</h4>
     </div>
     <?php
        $link = mysqli_connect("localhost", "root", "", "library");
 
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
          if(isset($_GET['edit']))
            {
            $acc_query = mysqli_query($link, "SELECT * FROM `useri` WHERE Usename = 'nefotatari'");
            if(mysqli_num_rows($acc_query)>0){
            //$acc_fetch = mysqli_fetch_array($acc_query);
            echo 'ekziston';
            }
            else{
              echo 'nuk ekziston';
            }
          }
      ?>
     <div class="form-group">
       <form class="h5 py-4">
       <label  for="emri">Emri:</label><br>
       <input class="form-control" type="text" id="emri" name="emri"  value="<?php echo $user ?>" ><br>
       <label for="mbiemri">Mbiemri:</label><br>
       <input class="form-control" type="text" id="mbiemri" name="mbiemri"value="<?php echo $acc_fetch['Mbiemer']; ?>"><br>
       <label for="username">Username:</label><br>
       <input class="form-control" type="text" id="username" name="username"value="<?php echo $acc_fetch['Usename']; ?>"><br>
        <label for="email">Emaili :</label><br>
        <input class="form-control" type="email" id="email" name="email"value="<?php echo $acc_fetch['Email']; ?>"><br>
        <button type="button" class="btn btn-secondary btn-lg btn-block">Update</button>
        <?php echo $acc_fetch ?>
        </form>
    </div>
    </div>
</div> 
</body>
</html>
