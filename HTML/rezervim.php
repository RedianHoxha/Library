<?php 
        session_start();
        //include('../PHP/session.php');
        $user=$_SESSION['user'];
      ?>
<!DOCTYPE html>
<html style=" background-image: url(https://ae01.alicdn.com/kf/HTB1EZdXy4GYBuNjy0Fnq6x5lpXaM/Old-Grungy-Grey-Concrete-Backgrounds-polyester-or-Vinyl-cloth-High-quality-Computer-print-wall-photo-backdrop.jpg)">

</html>
<body>

<?php
        $link = mysqli_connect("localhost", "root", "", "library");
 
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
          if(isset($_GET['rezervo']))
            {
            $acc_query = mysqli_query($link, "SELECT * FROM `librari` WHERE Titull = '$_GET[rezervo]'") or die(mysql_error());
            $row = mysqli_fetch_array($acc_query);

            $sqlquery="Select * from useri  where Username = '$user'";
            $result=mysqli_query($link, $sqlquery);
            $rowuseri = mysqli_fetch_array($result);

            }

        ?>

    <form class="login100-form validate-form" action='Procedimrezervim.php?rezervo=<?php echo $row['Titull']; ?>' method='post'>



        <div style="max-width: 400px;">
        </div>
        <div style="padding-bottom: 30px;font-size : 35px; padding-bottom: 30px;
        font-size: 35px;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        position: absolute;
        top: 110px;
        left: 50%;
        margin-top: -50px;
        margin-left: -250px;
        width: 450px;
        height: 100px;
         "><b><?php echo $row['Titull']; ?></b> eshte titulli i librit qe ju sapo rezervuat.Autori i ketij libri eshte <b><?php echo $row['Autor'];?></b>
         Ky liber flet per :<?php echo $row['Pershkrim']; ?></div>
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
            <input type="text" id="data_28" placeholder=" EMER" name="emer"value="<?php echo $rowuseri['Emer']; ?>" style="width: 210px; text-align: center; height: 40px; border-radius: 25px;" class="form-control" />
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
            <input type="text" id="data_29" placeholder=" MBIEMER" name="mbiemer" value="<?php echo $rowuseri['Mbiemer']; ?>" style="width: 210px; height: 40px; text-align: center;border-radius: 25px;" class="form-control" />
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
            <input type="number"  placeholder=" Telefoni" name="tel"  value="<?php echo $rowuseri['Tel']; ?>" style="width: 210px; height: 40px;text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; border-radius: 25px;"
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
            <input type="text" id="data_18" placeholder=" EMAIL" name="email" value="<?php echo $rowuseri['Email']; ?>" style="width: 210px; height: 40px;text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; border-radius: 25px;"
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
            <input type="text" id="data_21" placeholder=" ADRESA" name="adresa" value="<?php echo $rowuseri['Adresa']; ?>" style="width: 210px;text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; height: 40px; border-radius: 25px;"
                class="form-control" />
        </div>


        <div style="padding-bottom: 18px; font-size: 20px;
        position: absolute;
        top: 463px;
        left: 8%;
        margin-top: -50px;
        margin-left: -50px;
        width: 268px;
        height: 100px;">Sa dite deshironi te rezervoni librin?</span><br/>
            <input type="number"  placeholder=" Nr" name="datakthimit"  style="width: 210px; height: 40px;text-align: center;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; border-radius: 25px;"
                class="form-control" />
        </div>
        <div style="position: absolute; left:10%; top:530px ; font-size: large;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Shenim!</div>
        <div style="padding-bottom: 18px; font-size: 20px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        position: absolute;
        top: 610px;
        left: 6%;
        margin-top: -50px;
        margin-left: 12px;
        width: 275px;
        height: 100px;">
            <textarea id="data_23" readonly name="data_23" style="max-width: 900px; background-color:#404040; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin: 0px;
            width: 80%;
            height: 70%;
            border-radius: 20px; " rows="13" class="form-control">
            Nuk lejohet me shume se dy jave rezervimi i nje libri!
            Nuk lejohet me shume se dy libra ne  nje rezervim!</textarea>
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
       
       <button class="login100-form-btn" type="submit" class="btn" name="rezervo" 
        style="border-radius: 25px;width: 280px; background-color: #404040;font-size:large; font-family:'Lucida Sans', 'Lucida Sans Regular',
         'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;height: 70px;"> Konfirmo  rezervimin </button> 

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