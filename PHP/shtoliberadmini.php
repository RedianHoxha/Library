<!DOCTYPE html>
<html>
    <head>
        <title>Library Profile</title>
        <meta charset="utf-8">
    <link  href="../CSS/Libri.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="regj-form">
            <form action='shtolibenedbngaandmini.php' method='post'>
                <div id="test">
                    <fieldset>
                        <legend>Regjistro liber!</legend><br>

                        

                        <label for="isbn">ISBN:</label>
                        <input type='text' id="isbn" name="isbn" value=""></br></br>
                        <label for="titull">Titulli:</label>
                        <input type='text' id="titull" name="titull" value=""></br></br>
                        <label for="autor">Autori:</label>
                        <input type='text' id="autori" name="autori" value=""></br></br>
                        <label for="pershkrim">Pershkrim:</label>
                        <textarea id="pershkrim"  name="pershkrimi" rows="4" cols="50" value=""></textarea><br>
                        <label for="zhanri">Zgjidhni zhanrin e librit:</label><br>
                                <select id="zhanri" name="zhanri" value="">
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
                                </select><br></br>
                                <label for="cmim">Cmim:</label>
                                <input type="number" id="cmim" name="cmimi" value=""><br></br>
                                <label for="cmim">Sasia:</label>
                                <input type="number" id="sasia" name="sasia" value=""><br></br>
                                <label for="cmim">Statusi:</label>
                                <input type="text" id="sasia" name="statusi" value="Blere"><br></br>
                                <div> 
                                     <form action="upload.php" method="post" enctype="multipart/form-data"> 
                                     <label for="cmim">Kopertina:</label>
                                       <div> 
                                            <input id="loginInput" type="file" name="foto" id="fileToUpload">
                                        </div>
                                </div>   
                                   
                  
                                <button class="login100-form-btn" type="submit" class="btn" name="add" > Shto </button> 
                    </fieldset>
                </div>
          
            </form>
        </div>
    </body>
</html>