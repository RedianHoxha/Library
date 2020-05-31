
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../CSS/styleSara.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        button {
            text-decoration: none;
            color: #fff;
            padding: 5px 20px;
            border: 1px solid transparent;
            border-radius: 5px;
            background-color: rgb(68, 173, 206);
            transition: 0.6s ease;
            cursor: pointer;
            margin-top: 2%;
        }

         .container {
           
            
            width: 100%;
            text-align: center;
           
        } 

        #background{
            background-image: url("../FOTO/home2.jpg");
        }

        .left {
            float: left;
            width: 100px;
            box-shadow: 1px 2px 20px 0px rgb(179, 123, 235);
        }

        .center {
            display: inline-block;
            margin: 0 auto;
            width: 100px;
            box-shadow: 1px 2px 20px 0px rgb(179, 123, 235);
        }

        .right {
            float: right;
            width: 100px;
            box-shadow: 1px 2px 20px 0px rgb(179, 123, 235);
        }

        .miresevini {
            background-color: rgb(68, 173, 206);
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 5em;
            padding: 14px;
            box-shadow: 1px 2px 20px 0px rgb(179, 123, 235);
        }

        #fotodhepershkrim{
            display: inline-flex;
            height: 100%;
        }
        #foto{
         margin-top: 9%;
         width: 80%;
         height: 50%;
         
        }
        .col-md-4{
        margin-top: 5%;
        padding: 5%;
        background-color:white;
        box-shadow: 1px 2px 20px 0px rgb(179, 123, 235);
    }

p{
    text-align:center;

}
    </style>

    <title>HomePage</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav">
                <div class="logo">
                    <ul>
                        <li>
                            <img src="../FOTO/logo.png" />
                        </li>
                    </ul>
                </div>

                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="Rreth nesh.html">Rreth nesh</a></li>
                    <li>
                        <div class="menu">
                            <button id="dd">Libraria jonë</button>

                            <ul>
                                <li><a href="#">Autoret</a></li>
                                <li><a href="#">Zhanret</a></li>
                                <li><a href="#">Te dhuruar</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="kontakti.html">Kontakti</a></li>
                    <li><a href="dhurovizitor.php">DHURO!</a></li>
                </ul>
            </div>
            <div class="nav2">
                <ul>
                    <!-- <li><a href="shportaavizitor.php">Shporta</a></li> -->
                    <li><a href="../PHP/login.php">Identifikohu</a></li>
                </ul>
            </div>
            <div class="title">
                <h1>Çfarë do lexoni?</h1>
            </div>
            <div class="search">
                <a href="search.php">Kërko</a>
            </div>
        </nav>
        <div class="miresevini">
            <h1>
                <center>Mirësevini në Librarinë tonë. EKSPLORO!</center>
            </h1>
        </div>
    </header>

    <?php $link = mysqli_connect("localhost", "root", "", "library");
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    ?>
<div id="background">
    <div class="container">

        <div class="row">
        
                   <?php $sqlquery="Select * from librari where Sasia > 0 LIMIT 6";
                    $result = mysqli_query($link, $sqlquery);

                    while ($row = mysqli_fetch_array($result)) { ?>

            <div class="col-md-4">
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
                        <button onclick="location.href = 'blerjethjeshte.php?Bli=<?php echo $row['Titull']; ?>'" name="Bli">Bli</button> <br />
                        <!--para se te bej rezervim ai suhet te rregjistrohet-->
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
</div>
    
            <!-- <div class="col-md-4">
                <div class="properties">
                    <div id="fotodhepershkrim">
                        <div id="foto">
                            <img src="../FOTO/kadare.jpg" />
                        </div>
                        <div>
                            <input type="text" id="titulli" placeholder="Ketu do jet titulli i librit" /><br />
                            <input type="text" id="autori" placeholder="ketu do jet autori i librit" /><br />
                            <input type="text" id="cmimi" placeholder="ketu do jet cmimi i librit" /> <br />
                        </div>
                    </div>

                    <div class="butonat">
                        <button onclick="">Bli</button> <br />
                        <button onclick="">Rezervo</button> <br />
                        <button onclick="">Shto ne Wishlist</button> <br />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="properties">
                    <div id="fotodhepershkrim">
                        <div id="foto">
                            <img src="../FOTO/kadare.jpg" />
                        </div>
                        <div>
                            <input type="text" id="titulli" placeholder="Ketu do jet titulli i librit" /><br />
                            <input type="text" id="autori" placeholder="ketu do jet autori i librit" /><br />
                            <input type="text" id="cmimi" placeholder="ketu do jet cmimi i librit" /> <br />
                        </div>
                    </div>

                    <div class="butonat">
                        <button onclick="">Bli</button> <br />
                        <button onclick="">Rezervo</button> <br />
                        <button onclick="">Shto ne Wishlist</button> <br />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="properties">
                    <div id="fotodhepershkrim">
                        <div id="foto">
                            <img src="../FOTO/kadare.jpg" />
                        </div>
                        <div>
                            <input type="text" id="titulli" placeholder="Ketu do jet titulli i librit" /><br />
                            <input type="text" id="autori" placeholder="ketu do jet autori i librit" /><br />
                            <input type="text" id="cmimi" placeholder="ketu do jet cmimi i librit" /> <br />
                        </div>
                    </div>

                    <div class="butonat">
                        <button onclick="">Bli</button> <br />
                        <button onclick="">Rezervo</button> <br />
                        <button onclick="">Shto ne Wishlist</button> <br />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="properties">
                    <div id="fotodhepershkrim">
                        <div id="foto">
                            <img src="../FOTO/kadare.jpg" />
                        </div>
                        <div>
                            <input type="text" id="titulli" placeholder="Ketu do jet titulli i librit" /><br />
                            <input type="text" id="autori" placeholder="ketu do jet autori i librit" /><br />
                            <input type="text" id="cmimi" placeholder="ketu do jet cmimi i librit" /> <br />
                        </div>
                    </div>

                    <div class="butonat">
                        <button onclick="">Bli</button> <br />
                        <button onclick="">Rezervo</button> <br />
                        <button onclick="">Shto ne Wishlist</button> <br />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="properties">
                    <div id="fotodhepershkrim">
                        <div id="foto">
                            <img src="../FOTO/kadare.jpg" />
                        </div>
                        <div>
                            <input type="text" id="titulli" placeholder="Ketu do jet titulli i librit" /><br />
                            <input type="text" id="autori" placeholder="ketu do jet autori i librit" /><br />
                            <input type="text" id="cmimi" placeholder="ketu do jet cmimi i librit" /> <br />
                        </div>
                    </div>

                    <div class="butonat">
                        <button onclick="">Bli</button> <br />
                        <button onclick="">Rezervo</button> <br />
                        <button onclick="">Shto ne Wishlist</button> <br />
                    </div>
                </div>
            </div> -->
        </div>
    </div>


</body>

</html>