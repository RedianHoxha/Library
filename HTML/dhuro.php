<?php ?>
<!DOCTYPE html>

<html>
    <head>
        <link  href="../CSS/FormaDhurimeStilizime.css" rel="stylesheet" type="text/css">
        
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
        <title>Dhuro</title>
        <script>
            jQuery(document).ready(function(e) {
                jQuery('#mymodal').trigger('click');
            });
        </script>
    </head>
    <body>
        <div id="full-page">
            <div id="back">
            <button type="button" class="btn btn-primary btn-outline-info btn-info" onclick="location.href = 'homeperdorues.php';">Kthehu ne Home</button>
            </div>
            <div id="fq">
                <form method="POST" action="../PHP/rregjistroliberphp.php" id="formadhurimit">    
                
                    <div id="top-page">
                        <div id="top-page-pershendetje" >
                            <p> Ju lutem plotesoni te dhenat e kerkuara</p>
                            
                            </div>
                
                                <!-- <div id="person-form">
                                
                                        <div id="fullname">
                                            <p id="txt">First name<p><input type="text" id="fname" name="fname" placeholder="Redian" autocomplete="off">
                                            <p id="txt">Last name<p><input type="text" id="lname" name="lname" placeholder="Hoxha" autocomplete="off">
                                        </div>
                                        <div id="contact">
                                            <p>Email</p><input type="text" id="email" name="email" autocomplete="off" placeholder="hoxharedian@gmail.com">
                                            <p>Telefon</p><input type="text" id="nr" name="tel" placeholder="0685308860" autocomplete="off">
                                            <p>Adresa</p><input type="text" id="adress"  name="adresa" placeholder="Ju lutem vendosni adresen" autocomplete="off">
                                            <input type="hidden" name="hiddenValue" id="test">
                                        </div>  
                                </div> -->
                                <div id="fullname">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="fname" name="fname">First Name</span>
                                        </div>
                                    <input type="text" class="form-control" id="fname" name="fname">
                                    </div>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="lname" name="lname">Last Name</span>
                                        </div>
                                        <input type="text" class="form-control" id="lname" name="lname">
                                    </div>
                                </div>  

                                <div id="contact">
                                       <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="email" name="email">Email</span>
                                            </div>
                                            <input type="text" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="tel" name="tel">Telephone</span>
                                            </div>
                                            <input type="text" class="form-control" id="tel" name="tel">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="adresa" name="adresa">Adresa</span>
                                            </div>
                                            <input type="text" class="form-control" id="adresa" name="adresa">
                                        </div>
                                        <input type="hidden" name="hiddenValue" id="test">
                                        
                                </div>
                            </div>
                            <div id="bottom-page">
                                <div id="liber-form">
                                    <div class="margin-top-10">
                                        <table id="grid" name="tablegrid">
                                        </table>
                                    </div>
                                </div>
                                <div id="button-perfundim">   
                                    <button type="button"  class="btn btn-primary btn-outline-info btn-info" data-toggle="modal" data-target="#myModal" value="Shto">New</button>   
                                    <button type="submit"  class= "btn btn-primary btn-outline-info btn-info" onclick="getTable()">Shto</button>
                                    <!--<button type="button" id="button-shto" class="btn btn-primary btn-lg" onclick="enkripto('redi')" value="Shto">test</button>   
                                    -->
                                </div>
                
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">New Book</h4>
                                </div>
                                <div class="rreg-form">
                                    <div id="test">
                                        <fieldset>
                                            <label for="isbn">ISBN:</label><br> 
                                            <input type='text' id="isbn" name='isbn'/></br>
                                            <label for="titull">Titulli:</label>
                                            <br> <input type='text' id="titull" name='titull'/></br>
                                            <label for="autor">Autori:</label>
                                            <br> <input type='text'  id="autor" name='autor'/></br>
                                            <label for="pershkrim">Pershkrim:</label>
                                            <br><textarea id="pershkrim" rows="4" cols="50" name="pershkrim"></textarea><br>
                                            <label for="zhanri">Zgjidhni zhanrin e librit:</label><br>
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
                                                    <label for="cmim">Cmim:</label>
                                                    <br><input type="number" id="cmim" name="cmim"><br><br>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" onclick="Save()" class="btn btn-primary"  data-dismiss="modal">Add</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>