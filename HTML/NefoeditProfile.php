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
    .profile h4{
      margin-bottom: 6px;
    }
    .form-group{
      margin-right: 70px;
    }
    .test {
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
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
         <?php $link = mysqli_connect("localhost", "root", "", "library");
        
         // Check connection
         if($link === false){
             die("ERROR: Could not connect. " . mysqli_connect_error());
         }
         $sqlquery="Select * from useri  where Username = '$user'";
                    $result=mysqli_query($link, $sqlquery);
                    $row = mysqli_fetch_array($result)
         ?>
    
     <div class="form-group test">
        <form class="h5 py-4"action='../PHP/editProfile.php?editProfile=<?php echo $row['IdUser'] ?>' method='post'>
          <label  for="emri">Emri:</label><br>
          <input class="form-control" type="text" id="emri" name="emri"  value="<?php echo $row['Emer']; ?>" ><br>
          <label for="mbiemri">Mbiemri:</label><br>
          <input class="form-control" type="text" id="mbiemri" name="mbiemri"value="<?php echo $row['Mbiemer']; ?>"><br>
          <label for="username">Username:</label><br>
          <input class="form-control" type="text" id="username" name="username"value="<?php echo $row['Username']; ?>"><br>
            <label for="email">Emaili :</label><br>
            <input class="form-control" type="email" id="email" name="email"value="<?php echo $row['Email']; ?>"><br>
            <button type="submit" class="btn btn-secondary btn-lg btn-block" name="update">Update</button>
        </form>
     </div>
    </div>
</div> 
</body>
</html>
