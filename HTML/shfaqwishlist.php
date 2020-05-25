<html>
    <head>
<title>My wish list</title>
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
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ISBN</th>
                        <th>Titull</th>
                        <th>Autor</th>
                        <th>Pershkrim</th>
                        <th>Zhanri</th>
                        <th>Cmimi</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                
                <?php $sqlquery="Select * from wishlist  where username  = '$user'";
                //echo $sqlquery;
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
                        <td><?php echo $row['Cmimi']; ?></td>
                        <td>
                            <button onclick="location.href = 'blerje.php?Bli=<?php echo $row['Titull']; ?>'" name="Bli">Bli</button>
                        </td>
                        <td>
                        <button onclick="location.href = 'rezervim.php?rezervo=<?php echo $row['Titull']; ?>'" name="rezervo">Rezervo</button> <br />
                        </td> 
                        <td>
                        <button onclick="location.href = 'fshingawishlist.php?del=<?php echo $row['ISBN']; ?>'" >Hiq nga te preferuarat</button> <br />
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
    </body>
    </html>