<!DOCTYPE html>
<head>
    <title> Search</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <?php $link = mysqli_connect("localhost", "root", "", "library");
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    ?>
         
            <div class="row">
            
                       <?php $sqlquery="Select * from librari where Sasia > 0 LIMIT 6";
                        $result = mysqli_query($link, $sqlquery);
    
                        while ($row = mysqli_fetch_array($result)) { ?>
    
                <div class="col-sm-9 col-md-6">

                    <div class="properties">
                        <div id="fotodhepershkrim">
                            <div id="foto">
                                <img src="../FOTO/<?php echo $row['Foto']; ?>" />
                            </div>
                            <div>
                                <p> <?php echo $row['Titull']; ?></p>
                                <p> <?php echo $row['Autor']; ?></p>
                                <p> <?php echo $row['Cmimi']; ?></p>
                            </div>
                        </div>
    
                        <div class="butonat">
                            <button onclick="location.href = 'blerjethjeshte.php?Bli=<?php echo $row['Titull']; ?>'" name="Bli">Shto Ne Shporte</button> <br />
                            <button onclick="location.href = 'rezervimthjeshte.php?rezervo=<?php echo $row['Titull']; ?>'" name="rezervo">Rezervo</button> <br />
                            <button onclick="location.href = 'rezervimthjeshte.php?edit=<?php echo $row['Titull']; ?>'">Shto ne Wishlist</button> <br />
                        </div>
                    </div>
                </div>
                <?php 
                    } 
                ?>
            </div>
        </div>
      
</body>



</html>