<!DOCTYPE html>
<head>
    <title> Search</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    
<div>
        <div id ="control">
            <form id="forma" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="text"  name= "fjalekyce" placeholder="Kërko" />
                    <input type="submit" name="submit" value="Kerko"><br>
            </form>
        </div>
        <div id= "fushalibrave">
    <?php $link = mysqli_connect("localhost", "root", "", "library");
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    if(isset($_POST['submit'])) 
        { 
            $name = $_POST['fjalekyce'];
           


            if($name == '')
            {  
                $sqlquery = "Select * from librari where Sasia > 0 LIMIT 6";
                $result = mysqli_query($link, $sqlquery);

                while ($row = mysqli_fetch_array($result)) 
                {
                ?>

                <div class="row">
                    <div class="col-6">
                        <div class="properties">
                            <div id="fotodhepershkrim">
                                <div id="foto" style="width:20%;height:30%">
                                    <img src="../FOTO/<?php echo $row['Foto']; ?>" />
                                </div>
                                <div>
                                    <p> <?php echo $row['Titull']; ?></p>
                                    <p> <?php echo $row['Autor']; ?></p>
                                    <p> <?php echo $row['Cmimi']; ?></p>
                                </div>
                            </div>

                            <div class="butonat">
                                
                            <button onclick="location.href ='blerjethjeshte.php?Bli=<?php echo $row['Titull'];?>'"  type="submit" class="btn" name="Bli">Shto Ne Shporte</button> <br />
                            </div>
                        </div>
                    </div>
                </div>
             <?php  
                }

            }
            else
            {
                    $kerkolibra = "SELECT * from librari where Titull = ? or Autor = ? or Zhanri = ?;";
                    $stmt = mysqli_stmt_init($link);

                    if(!mysqli_stmt_prepare($stmt,$kerkolibra))
                        {
                            echo 'smund te behet lidhje';
                        }
                    else
                        {
                            mysqli_stmt_bind_param($stmt,"sss",$name,$name,$name);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                    
                            if(mysqli_num_rows($result)!=0)
                            {

                               while ($row = mysqli_fetch_array($result))
                               {
                                ?>
                                <div class="row">
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
                                            <button onclick="location.href ='blerjethjeshte.php?Bli=<?php echo $row['Titull'];?>'"  type="submit" class="btn" name="Bli">Shto Ne Shporte</button> <br />
                                            </div>
                                        </div>
                                    </div>
                               </div>
                              <?php  

                               }
                                
                    
                            }
                            else
                            {
                                header('location:search.php?Invalid=Me kete fjale qe ju sapo kerkuar nuk rezulton asgje!Faleminderit');
                            }
                        }

            }


        }

    ?>



                    <?php 
                    if(@$_GET['Invalid']== true)
                    {
                    ?>
                        <div class="alert-light py-3"><?php echo $_GET['Invalid']?>
                    <?php
                    }
                    ?>     

                    

     </div>
</body>
</html>