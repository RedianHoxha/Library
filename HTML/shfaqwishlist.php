<?php 
            
            session_start();
            //include('../PHP/session.php');
            $user=$_SESSION['user'];
            $link = mysqli_connect("localhost", "root", "", "library");
        
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My wish list</title>
    <link rel="stylesheet" type="text/css"  href="../CSS/style-wishlist.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Edit</title>
    <style>
    h3{
      margin-bottom: 10px;
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
    <h2></h2>
    <h3 class="shadow-sm p-3 mb-5 bg-white rounded"><i class="fa fa-heart"></i> YOUR WISHLIST</h3>
    <table id="fixed-table" class="table features-table">
    <table class="table-fill">
    <thead>
      <tr>
        <th class="text-left">ISBN</th>
        <th class="text-left">Titull</th>
        <th class="text-left">Autor</th>
        <th class="text-left">Zhanri</th>
        <th class="text-left">Cmimi</th>
        <th class="text-left">Veprimi</th> 
      </tr>
    </thead>
                <?php $sqlquery="Select * from wishlist  where username  = '$user'";
                //echo $sqlquery;
                    $result=mysqli_query($link, $sqlquery);

                while ($row = mysqli_fetch_array($result)) { ?>
                <tbody class="table-hover">
      <tr>
        <td class="text-left"><?php echo $row['ISBN']; ?></td>
        <td class="text-left"><?php echo $row['Titull']; ?></td>
        <td class="text-left"><?php echo $row['Autor']; ?></td>
        <td class="text-left"><?php echo $row['Zhanri']; ?></td>
        <td class="text-left"><?php echo $row['Cmimi']; ?></td>
        <td class="text-left">
          <button class="butoni-personalizuar" onclick="location.href = 'blerje.php?Bli=<?php echo $row['Titull']; ?>'" name="Bli">Bli</button> 
          <button class="butoni-personalizuar"  onclick="location.href = 'rezervim.php?rezervo=<?php echo $row['Titull']; ?>'" name="rezervo">Rezervo</button> 
          <button class="butoni-personalizuar"  onclick="location.href = 'fshingawishlist.php?del=<?php echo $row['ISBN']; ?>'" >Hiq </button> 

      </td>
        
    </tr>
                </tbody>
                <?php } ?>
            </table>
    </div>
</div> 
</body>
</html>

    