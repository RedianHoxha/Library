<html>
    <head>
    
     <title>My wish list</title>
    <link rel="stylesheet" type="text/css"  href="../CSS/style-wishlist.css">
    </head>
    <body>
    <h2>Shporta ime</h2>
        <table id="fixed-table" class="table features-table">
            <?php 
            
            session_start();
            //include('../PHP/session.php');
            $user=$_SESSION['user'];
            $link = mysqli_connect("localhost", "root", "", "library");
        
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }?>
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
                <?php $sqlquery="Select * from wishlist  where username  = '$user' and shporta = 'Po'";
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
        <button class="butoni-personalizuar"  onclick="location.href = 'fshingawishlist.php?user=<?php echo $user ?>&delete=<?php echo $row['ISBN']; ?>'" >Hiq </button> 
      </td>
        
    </tr>
                </tbody>
                <?php } ?>
            </table>
            <button class="butoni-personalizuar"  onclick="location.href = 'fshigjithshporten.php?del=<?php echo $user ?>'" >Hiq </button> 
    </body>
    </html>