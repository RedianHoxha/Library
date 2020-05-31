<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/17c7570040.js" crossorigin="anonymous"></script>
        <style>
            html, body {
                height: 100%;
            }
            .nav-mask {
                width: 350px;
            }
            .side-nav {
                background-color:#a6a2a2;
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                width: 350px;
            }
            .nav-content {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                height: 100%;
            }
            .test {
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .buttonconatiner{
                background-color:rgb(108, 117, 126);
                margin-bottom: 10%;
                height: 10%;
                width: 75%;
                border-radius: 25px;
            }
            .button_text{
                text-align: center;
                color:white;
                padding-top: 6%;
                font-size: 130%;
            }
            .example_e{
                color: white;
                font-size: 100%;
            }
            /* body{
                background-image: url("download.jpg");
            } */
        </style>
    </head>
    <body>
        <div style="display:flex;">
            <div class="nav-mask"></div>
            <div class="side-nav ">
                <div class="nav-content ">
                    <div class="buttonconatiner">
                        <div class="button_text " ><a class="example_e" href="../HTML/NefoeditProfile.php" name="edit" ><i class="fa fa-pencil"> Profili juaj/modifiko!</i></a> </div>
                    </div>
                    <div class="buttonconatiner">
                        <div class="button_text" ><a class="example_e" href="shfaqwishlist.php" rel="nofollow noopener"><i class="fa fa-heart"> Te preferuarat!</i></a></div><br>
                    </div>
                    <div class="buttonconatiner">
                        <div class="button_text" ><a class="example_e" href="shporta.php" rel="nofollow noopener"><i class="fa fa-shopping-cart"></i> Shporta!</i></a></div><br>
                    </div>
                    <div class="buttonconatiner">
                        <div class="button_text" ><a class="example_e" href="rezervime.php" rel="nofollow noopener"><i class="fa fa-shopping-cart"></i> Rezervimet tuaja!</i></a></div><br>
                    </div>
                </div>
            </div>
            <div class="test">
                
            </div>
        </div>
    </body>
</html>