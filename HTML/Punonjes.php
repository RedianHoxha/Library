<!DOCTYPE html>
<html lang="en">
<head>
    <title>Librat</title>
    <h2>This Table is About?</h2>
<link rel="stylesheet" type="text/css" href="crud_theme.css">
</head>



<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Punonjsit</title>
      <link rel="stylesheet" type="text/css" href="../CSS/crud_sofia.css">
  </head>
  <body>
      <div id="butoni">
      <button onClick="window.location='shtopunonjes.php';" >Shto Punonjes</button>
      <button onClick="window.location='PunonjsiHome.php';" >Ktheu</button>
      </div>
     <div id="foo">  
        <table id="fixed-table" class="table features-table">


        <?php $link = mysqli_connect("localhost", "root", "", "library");
        
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }?>
                <thead>
                    <tr>
                        <th>IdUseri</th>
                        <th>Emri</th>
                        <th>Mbiemri</th>
                        <th>Email</th>
                        <th>Tel</th>
                        <th>Adresa</th>
                        <th>Username</th>
                        <th>Roli</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                
                <?php $sqlquery="Select * from useri where Roli != 'Admin' and Roli !='Vizitor' and Roli !='Bleres' and Roli !='Dhurues'";
                    $result=mysqli_query($link, $sqlquery);

                while ($row = mysqli_fetch_array($result)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['IdUser']; ?></td>
                        <td><?php echo $row['Emer']; ?></td>
                        <td><?php echo $row['Mbiemer']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Tel']; ?></td>
                        <td><?php echo $row['Adresa']; ?></td>
                        <td><?php echo $row['Username']; ?></td>
                        <td><?php echo $row['Roli']; ?></td>
                        <td>
                            <a href="editopunonjes.php?edit=<?php echo $row['IdUser']; ?>" class="edit_btn" >Edit</a>
                        </td>
                        <td>
                            <a href="deleteuser.php?del=<?php echo $row['IdUser']; ?>" class="del_btn">Delete</a>
                        </td> 
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
  </body>
</html>