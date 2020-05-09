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
        <?php
        $link = mysqli_connect("localhost", "root", "", "library");
 
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
          if(isset($_GET['edit']))
            {
            $acc_query = mysqli_query($link, "SELECT * FROM `librari` WHERE IdLibri = '$_GET[edit]'") or die(mysql_error());
            $acc_fetch = mysqli_fetch_array($acc_query);
                      ?>
            <form action='../PHP/edit.php?edit=<?php echo $_GET['edit'] ?>' method='post'>
                <div id="test">
                    <fieldset>
                        <legend>Edito Librin!</legend><br>

                        <input type="hidden" name="id" value="<?php echo $acc_fetch['IdLibri']; ?>">

                        <label for="isbn">ISBN:</label><br> 
                        <input type='text' id="isbn" name="isbn" value="<?php echo $acc_fetch['ISBN'];?>"></br>
                        <label for="titull">Titulli:</label>
                        <br> <input type='text' id="titull" name="titull" value="<?php echo $acc_fetch['Titull']; ?>"></br>
                        <label for="autor">Autori:</label>
                        <br> <input type='text' id="autori" name="autori" value="<?php echo  $acc_fetch['Autor']; ?>"></br>
                       
                        <label for="zhanri">Zgjidhni zhanrin e librit:</label><br>
                                <select id="zhanri" name="zhanri" value="<?php echo  $acc_fetch['Zhanri']; ?>">
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
                                <br><input type="text" id="cmimi" name="cmimi" value="<?php echo  $acc_fetch['Cmimi']; ?>" ><br><br>
                                <input type="submit" value="Ndrysho!" />
                    </fieldset>
                </div>
            </form>
            <?php
            }
        ?>
        </div>
    </body>
</html>