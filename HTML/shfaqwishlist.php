<html>
    <head>
    <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
<title>My wish list</title>
<link rel="stylesheet" type="text/css" href="style-wishlist.css">
    </head>
    <body>
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
        <th class="text-left">ID</th>
        <th class="text-left">ISBN</th>
        <th class="text-left">Titull</th>
        <th class="text-left">Autor</th>
        <th class="text-left">Pershkrim</th>
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
        <td class="text-left"><?php echo $row['IdLibri']; ?></td>
        <td class="text-left"><?php echo $row['ISBN']; ?></td>
        <td class="text-left"><?php echo $row['Titull']; ?></td>
        <td class="text-left"><?php echo $row['Autor']; ?></td>
        <td class="text-left"><?php echo $row['Pershkrim']; ?></td>
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
    </body>
    </html>