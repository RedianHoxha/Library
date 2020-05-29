<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="../CSS/dhuroStyleSara.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.js" type="text/javascript"></script>
    <script src="../JS/dhurojavascript.js"></script>
    <meta charset="utf-8">

    <script>
        jQuery(document).ready(function (e) {
            jQuery('#mymodal').trigger('click');
        });
    </script>


    

    <title>Forme dhurimi</title>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div id="headerpage">
            <div class="nav">
                <div class="logo">
                    <ul>
                        <li>
                            <img src="../FOTO/logo.png" />
                        </li>
                    </ul>
                </div>
    
                <ul>
                    <li><a href="../HTML/index.php">Home</a></li>
                    <li><a href="../HTML/Rreth nesh.html">Rreth nesh</a></li>
                    <li>
                        <div class="menu">
                            <button id="dd">Libraria jonë</button>
    
                            <ul>
                                <li><a href="#">Autorët</a></li>
                                <li><a href="#">Zhanret</a></li>
                                <li><a href="#">Të dhuruar</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="../HTML/kontakti.html">Kontakti</a></li>
                    <!-- <li class="active"><a href="index.php">DHURO!</a></li> -->
                   
                </ul>
            </div>
    
            <div>
                <ul class="nav2">
                    <li><a href="../PHP/login.php">Identifikohu</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        

            <div id="bottompage">
                <div>
                    <form id="forma" method="POST" action="../PHP/rregjistroliberphp.php">
                        <div id="fullform">
                            <div id="pershendetje">
                                <h3>Ju lutem plotesoni të dhënat e kerkuara</h3>
                            </div>

                            <div id="person-form">

                                <div id="fullname">
                                    <p id="txt">First name
                                    <p><input type="text" id="fname" name="fname" placeholder="Redian"
                                            autocomplete="off">
                                    <p id="txt">Last name
                                    <p><input type="text" id="lname" name="lname" placeholder="Hoxha"
                                            autocomplete="off">
                                </div>
                                <div id="contact">
                                    <p>Email</p><input type="text" id="email" name="email" autocomplete="off"
                                        placeholder="hoxharedian@gmail.com">
                                    <p>Telefon</p><input type="text" id="nr" name="tel" placeholder="0685308860"
                                        autocomplete="off">
                                    <p>Adresa</p><input type="text" id="adress" name="adresa"
                                        placeholder="Ju lutem vendosni adresen" autocomplete="off">
                                    <input type="hidden" name="hiddenValue" id="test">
                                </div>
                            </div>
                            <div id="button-perfundim">
                                <button type="button" id="button-shto" class="btn btn-primary btn-lg"
                                    data-toggle="modal" data-target="#myModal" value="Shto">New</button>
                                <button type="submit" id="button-shto" class="btn btn-primary btn-lg"
                                    onclick="getTable()">Shto</button>
                            </div>

                            <div class="margin-top-10">
                                <table id="grid" name="tablegrid">
                                </table>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">New Book</h4>
                        </div>
                        <div class="rreg-form">
                            <div id="test">
                                <fieldset>
                                    <label for="isbn"> ISBN:</label><br>
                                    <input type='text' id="isbn" name='isbn' /></br>
                                    <label for="titull"> Titulli:</label>
                                    <br> <input type='text' id="titull" name='titull' /></br>
                                    <label for="autor"> Autori:</label>
                                    <br> <input type='text' id="autor" name='autor' /></br>
                                    <label for="pershkrim"> Pershkrim:</label>
                                    <br><textarea id="pershkrim" rows="4" cols="50" name="pershkrim"></textarea><br>
                                    <label for="zhanri"> Zgjidhni zhanrin e librit:</label><br>
                                    <select id="zhanri" name="zhanri">
                                        <option value="fantazi">Fantazi</option>
                                        <option value="filozofik">Filozofik</option>
                                        <option value="humor">Humor</option>
                                        <option value="aventure">Aventure</option>
                                        <option value="romance">Romance</option>
                                        <option value="mister">Mister</option>
                                        <option value="horror">Horror</option>
                                        <option value="historik">Historik</option>
                                        <option value="shkencor">Shkencor</option>
                                        <option value="motivues">Motivues</option>
                                        <option value="enciklopedi">Enciklopedi</option>
                                        <option value="fjalor">Fjalor</option>
                                        <option value="autobiografi">Autobiografi</option>
                                        <option value="biografi">Biografi</option>
                                    </select><br>
                                    <label for="cmim"> Cmimi:</label>
                                    <br><input type="number" id="cmim" name="cmim"><br><br>
                                </fieldset>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="Save()" class="btn btn-primary"
                                data-dismiss="modal">Add</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <h1 class="faleminderit">
          Faleminderit për kontributin tuaj. Do ju kontaktojmë së shpejti.
        </h1> -->
    </header>
</body>

</html>