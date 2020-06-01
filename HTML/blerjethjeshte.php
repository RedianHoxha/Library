
<!DOCTYPE html>
<html style="background-image: url(https://wallpaperaccess.com/full/1156778.jpg);">

</html>

<body>

<?php
        $link = mysqli_connect("localhost", "root", "", "library");
 
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
          if(isset($_GET['Bli']))
            {

              $query = mysqli_query($link, "SELECT * FROM `librari` WHERE Titull = '$_GET[Bli]'") or die(mysql_error());
              $row = mysqli_fetch_array($query);

            }

        ?>
        <!-- -->

        <form class="login100-form validate-form" onsubmit="return validateForm();" action='procedimblerjetest.php?Bli=<?php echo $row['Titull']; ?>' method='post'>

        <div style="max-width: 400px;">
        </div>
        <div style="padding-bottom: 30px;font-size : 35px; padding-bottom: 30px;
        font-size: 35px;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        position: absolute;
        top: 125px;
        left: 50%;
        margin-top: -50px;
        margin-left: -250px;
        width: 630px;
        height: 100px;
        
        
        "> 
        Ju jeni ne hapat e fundit per blerjen e librit.
        Nese deshironi te blini librin <b><?php echo $row['Titull']; ?></b> te shkruar nga <b><?php echo $row['Autor'];?></b>  mjafton ta konfirmoni blerjen duke plotesuar te dhenat si me poshte:
       Info: Ky liber kushton <b><?php echo $row['Cmimi']; ?></b>.</div>
        <p style="max-width : 450px; font-size : 12px;"></p>
        <div style="padding-bottom: 18px; padding-bottom: 30px;
        font-size: 20px;
        position: absolute;
        top: 113px;
        left: 8%;
        margin-top: -50px;
        margin-left: -50px;
        width: 268px;
        height: 100px;
        ">
            <input type="text" id="data_28" placeholder=" EMER" name="emer" autocomplete="off"   style="width: 210px; text-align: center; height: 40px; border-radius: 25px;" class="form-control" />
        </div>
        <div style="padding-bottom: 18px; padding-bottom: 30px;
        font-size: 20px;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        position: absolute;
        top: 181px;
        left: 8%;
        margin-top: -50px;
        margin-left: -50px;
        width: 268px;
        height: 100px;">
            <input type="text" id="data_29" placeholder=" MBIEMER" name="mbiemr"   autocomplete="off" style="width: 210px; height: 40px; text-align: center;border-radius: 25px;" class="form-control" />
        </div>
        <div style="padding-bottom: 18px; font-size: 20px;
        position: absolute;
        top: 250px;
        left: 8%;
        margin-top: -50px;
        margin-left: -50px;
        width: 268px;
        height: 100px;
        ">
            <input type="number"  id ="data_50" placeholder=" Tel" name="tel"   autocomplete="off"style="width: 210px; height: 40px;text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; border-radius: 25px;"
                class="form-control" />
        </div>
        
        <div style="padding-bottom: 18px; font-size: 20px;
        position: absolute;
        top: 318px;
        left: 8%;
        margin-top: -50px;
        margin-left: -50px;
        width: 268px;
        height: 100px;
        ">
            <input type="text" id="data_18" placeholder=" EMAIL" name="email"    autocomplete="off" style="width: 210px; height: 40px;text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; border-radius: 25px;"
                class="form-control" />
        </div>
        
        <div style="padding-bottom: 18px; font-size: 20px;
        position: absolute;
        top: 390px;
        left: 8%;
        margin-top: -50px;
        margin-left: -50px;
        width: 268px;
        height: 100px;
        ">
            <input type="text" id="data_21" placeholder=" ADRESA" name="adresa"    autocomplete="off"  style="width: 210px;text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; height: 40px; border-radius: 25px;"
                class="form-control" />
        </div>
        <div style="padding-bottom: 18px; font-size: 20px;
        position: absolute;
        top: 463px;
        left: 8%;
        margin-top: -50px;
        margin-left: -50px;
        width: 268px;
        height: 100px;">Sa libra deshironi te blini?</span><br/>
            <input type="number" id="data_51"  placeholder=" Nr" name="sasia"      autocomplete="off" style="width: 210px; height: 40px;text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; border-radius: 25px;"
                class="form-control" />
        </div>
        <div style="left: 10%; top: 510px ; position:absolute; font-size: 20px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> Instruksione </div> 
        <div style="padding-bottom: 18px; font-size: 20px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        position: absolute;
        top: 589px;
        left: 5%;
        margin-top: -50px;
        margin-left: 12px;
        width: 268px;
        height: 100px;">  
        
         
            <textarea id="data_23" readonly name="data_23" style="max-width: 852px; background-color:#404040 ; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin: 0px;
            width: 200px;
            height: 85px;
            border-radius: 25px; " rows="8" class="form-control">
        Para se te konfirmoni blerjen e librit tuaj ju lutem kushojini vemendje te dhenave me siper neqoftese jane te sakta. Faleminderit !</textarea>
        </div>
        <div style="padding-bottom: 18px; font-size: 20px;
        position:fixed;
        top: 600px;
        left: 75%;
        margin-top: -51px;
        margin-left: -25px;
        width: 280px;
        height: 100px;
        border-radius: 25px; ">
       
        
        <button class="login100-form-btn" type="submit" class="btn" name="Bli" 
        style="border-radius: 25px;width: 280px; background-color: #404040; font-size:large ; font-family:'Lucida Sans', 'Lucida Sans Regular',
         'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;height: 70px;"> Konfirmo Blerjen  </button> 

    </form>

    <script type="text/javascript">
        function validateForm() {
            if (isEmpty(document.getElementById('data_28').value.trim())) {
                alert('Emër is required!');
                return false;
            }
            if (isEmpty(document.getElementById('data_29').value.trim())) {
                alert('Mbiemër is required!');
                return false;
            }
            if (isEmpty(document.getElementById('data_50').value.trim())) {
                alert('Tel is required!');
                return false;
            }
            if (isEmpty(document.getElementById('data_18').value.trim())) {
                alert('Email is required!');
                return false;
            }
            if (!validateEmail(document.getElementById('data_18').value.trim())) {
                alert('Email must be a valid email address!');
                return false;
            }
            if (isEmpty(document.getElementById('data_21').value.trim())) {
                alert('Adresa is required!');
                return false;
            }
            if (isEmpty(document.getElementById('data_51').value.trim())) {
                alert('Nr is required!');
                return false;
            }
            
            return true;
        }

        function isEmpty(str) {
            return (str.length === 0 || !str.trim());
        }

        function validateEmail(email) {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
            return isEmpty(email) || re.test(email);
        }
    </script>
</body>


</html>