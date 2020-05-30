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
      <title>Librat</title>
      <link rel="stylesheet" type="text/css" href="../CSS/crud_sofia.css">
  </head>
  <body>
      <div id="butoni">
      <button onClick="window.location='../PHP/shtoliberadmini.php';" >Shto Liber</button>
      <button onClick="window.location='PunonjsiHome.php';" >Ktheu ne Home</button>
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
                        <th>ID</th>
                        <th>ISBN</th>
                        <th>Titull</th>
                        <th>Autor</th>
                        <th>Pershkrim</th>
                        <th>Zhanri</th>
                        <th>Sasia</th>
                        <th>Status</th>
                        <th>Cmimi</th>
                        <th>Foto</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                
                <?php $sqlquery="Select * from librari";
                    $result=mysqli_query($link, $sqlquery);

                while ($row = mysqli_fetch_array($result)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['IdLibri']; ?></td>
                        <td><?php echo $row['ISBN']; ?></td>
                        <td><?php echo $row['Titull']; ?></td>
                        <td><?php echo $row['Autor']; ?></td>
                        <td><?php echo $row['Pershkrim']; ?></td>
                        <td><?php echo $row['Zhanri']; ?></td>
                        <td><?php echo $row['Sasia']; ?></td>
                        <td><?php echo $row['Statusi']; ?></td>
                        <td><?php echo $row['Cmimi']; ?></td>
                        <td><?php echo $row['Foto']; ?></td>
                        <td>
                            <a href="formarregjistrimlibri.php?edit=<?php echo $row['IdLibri']; ?>" class="edit_btn" >Edit</a>
                        </td>
                        <td>
                            <a href="delete.php?del=<?php echo $row['IdLibri']; ?>" class="del_btn">Delete</a>
                        </td> 
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
  </body>
</html>