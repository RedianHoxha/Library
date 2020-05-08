<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Librat</title>
  </head>
  <body>
    <table>
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
        <?php } ?>
    </table>
  </body>
</html>