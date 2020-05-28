<?php 
        session_start();
        //include('../PHP/session.php');
        $user=$_SESSION['user'];
      ?>
<!DOCTYPE html>
<html style="background-image: url(https://www.ppt-backgrounds.net/uploads/autumn-frame-PPT.jpg);">

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

              $sqlquery="Select * from useri  where Username = '$user'";
              $result=mysqli_query($link, $sqlquery);
              $rowuseri = mysqli_fetch_array($result);

            }

        ?>
        <!-- onsubmit="return validateForm();"-->

        <form class="login100-form validate-form" action='procedimblerjeperdorus.php?Bli=<?php echo $row['Titull']; ?>' method='post'>

        <div style="max-width: 400px;">
        </div>
        <div style="padding-bottom: 30px;font-size : 35px; padding-bottom: 30px;
        font-size: 35px;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        position: absolute;
        top: 90px;
        left: 50%;
        margin-top: -50px;
        margin-left: -250px;
        width: 390px;
        height: 100px;
        "> 
        Ju jeni ne hapat e fundit per blerjen e librit.
        Nese deshironi te blini librin <b><?php echo $row['Titull']; ?></b> te shkruar nga <b><?php echo $row['Autor'];?></b> qe ju keni caktuar mjafton ta konfirmoni blerjen.
        Ky liber kushton <b><?php echo $row['Cmimi']; ?></b>.</div>
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
            <input type="text" id="data_28" placeholder=" EMER" name="emer" value="<?php echo $rowuseri['Emer']; ?>"  style="width: 210px; text-align: center; height: 40px; border-radius: 25px;" class="form-control" />
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
            <input type="text" id="data_29" placeholder=" MBIEMER" name="mbiemr" value="<?php echo $rowuseri['Mbiemer']; ?>"  style="width: 210px; height: 40px; text-align: center;border-radius: 25px;" class="form-control" />
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
            <input type="number"  placeholder=" Tel" name="tel" value="<?php echo $rowuseri['Tel']; ?>"  style="width: 210px; height: 40px;text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; border-radius: 25px;"
                class="form-control" />
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/pikaday.min.js" type="text/javascript"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/css/pikaday.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            new Pikaday({
                field: document.getElementById('data_17')
            });
        </script>
        <div style="padding-bottom: 18px; font-size: 20px;
        position: absolute;
        top: 318px;
        left: 8%;
        margin-top: -50px;
        margin-left: -50px;
        width: 268px;
        height: 100px;
        ">
            <input type="text" id="data_18" placeholder=" EMAIL" name="email"  value="<?php echo $rowuseri['Email']; ?>" style="width: 210px; height: 40px;text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; border-radius: 25px;"
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
            <input type="text" id="data_21" placeholder=" ADRESA" name="adresa"  value="<?php echo $rowuseri['Adresa']; ?>" style="width: 210px;text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; height: 40px; border-radius: 25px;"
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
            <input type="number"  placeholder=" Nr" name="sasia"  style="width: 210px; height: 40px;text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; border-radius: 25px;"
                class="form-control" />
        </div>
        <div style="padding-bottom: 18px; font-size: 20px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        position: absolute;
        top: 556px;
        left: 8%;
        margin-top: -50px;
        margin-left: 12px;
        width: 268px;
        height: 100px;">Instruksione!<br/>
            <textarea id="data_23" readonly name="data_23" style="max-width: 852px; background-color:chocolate; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin: 0px;
            width: 218px;
            height: 111px;
            border-radius: 25px; " rows="8" class="form-control">
        Para se te konfirmoni blerjen e librit tuaj ju lutem plotesoni te dhenat tuaja me siper!</textarea>
        </div>
        <div style="padding-bottom: 18px; font-size: 20px;
        position:fixed;
        top: 636px;
        left: 75%;
        margin-top: -51px;
        margin-left: -25px;
        width: 280px;
        height: 100px;
        border-radius: 25px; ">
        <!-- <input type="submit" name="rezervo" style="border-radius: 25px;width: 280px; background-color: chocolate; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;height: 70px;" value="KONFIRMO BLERJEN"/>
        </div> -->
        
        <button class="login100-form-btn" type="submit" class="btn" name="Bli" 
        style="border-radius: 25px;width: 280px; background-color: chocolate; font-family:'Lucida Sans', 'Lucida Sans Regular',
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
            if (isEmpty(document.getElementById('data_17').value.trim())) {
                alert('Datelindja is required!');
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
            if (!document.getElementById('data_22_0').checked && !document.getElementById('data_22_1').checked && !document.getElementById('data_22_2').checked) {
                alert('Sa libra deshironi te blini? is required!');
                return false;
            }
            if (isEmpty(document.getElementById('data_23').value.trim())) {
                alert('Jeni i sigurte? is required!');
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