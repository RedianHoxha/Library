<?php 
        session_start();
        //include('../PHP/session.php');
        $user=$_SESSION['user'];

        $link = mysqli_connect("localhost", "root", "", "library");
 
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
        $ekzistonuseri = "select * from useri where Username = '$user'";
        //echo $ekzistonuseri;
        $resultuseri=mysqli_query($link, $ekzistonuseri);
        $rowekzistus = mysqli_fetch_array($resultuseri);
        $roli = $rowekzistus['Roli'];
        
        $destinacionhome;
        $destinacionrreth;
        $kontakt;
        
        if($roli === 'Admin')
        { 
            $destinacionhome = "homeadmin.php";
            $destinacionrreth= "Rrethnesh.php";
            $kontakt ="kontakti.php";
        }
        else if($roli=== 'Vizitor'){
            $destinacionhome = "homelexues.php";
            $destinacionrreth= "Rrethneshlexues.php";
            $kontakt ="kontaktilexues.php";
        }
        else
        {   
            $destinacionhome = "homeperdorues.php";
            $destinacionrreth= "Rrethnesh.php";
            $kontakt ="kontakti.php";
        }
      ?>

<!DOCTYPE html>
<head>
    <title> Search</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/styleSara.css" />


    <style>


#control
{
  position: absolute;
top: 18.4%;
left: 50%;
transform: translate(-50%, -50%);
}

.kerko {
    background: linear-gradient(90deg,white,#ffd6f0);
/* border: none; */
width: 100px;
color: rgb(51, 51, 51);;
font-size: unset;
/* font-weight: bolder; */
/* margin: 5px; */
/* padding: 2%; */
/* border-radius: 5px; */
cursor: pointer;
}

.kerko:hover {
    background: linear-gradient(90deg,#ffd6f0,white);
  /* box-shadow: 0 0 10px violet, 0 0 40px purple, 0 0 10px violet; */
  /* background-color: violet;
  color: white; */
  transition: 0.6s ease;
}
.row{
  margin: 100px;
  /* padding: %; */
  height: 140px;
  background-color:  rgba(255, 255, 255, 0.7);
  
  width: 600px;
  /* border: solid; */
  border-color: #ffd6f0;
   border-radius: 10px;
  

}

body{
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
url("../FOTO/home2.jpg");

height: 100vh;
background-size: cover;
background-position: top;
margin-top: -10px;
}

.btn{
 background: linear-gradient(90deg,white,#ffd6f0);
border: none;
color: rgb(51, 51, 51);;
font-size: unset;
/* font-weight: bolder; */
/* margin: 5px; */
padding: 2%;
border-radius: 5px;
cursor: pointer;
}

.control{
padding: 10px;
}


.btn:hover{
  background: linear-gradient(90deg,#ffd6f0,white);
  /* box-shadow: 0 0 10px violet, 0 0 40px purple, 0 0 10px violet; */
  /* background-color: violet;
  color: white; */
  transition: 0.6s ease;
}

.foto{
  width:1000px;
  height:100px;
}



</style>


</head>
<body>
<header>
        <div class="nav">
            <div class="logo">
                <ul>
                    <li>
                        <img src="../FOTO/logo.png" /></li>
            </div>
            <ul>
                <li><a href=<?php echo $destinacionhome?>>Home</a></li>
                <li><a href=<?php echo $destinacionrreth?>>Rreth nesh</a></li>
                <li><a href=<?php echo $kontakt?>>Kontakti</a></li>
            </ul>
        </div>
        <div class="nav22" style=" float: right;margin-left: 5px;margin-top: 20px;">
            <ul>           
             <li><a href="NefoProfile.php"><?php echo $user ?></a></li>
            <li><a href="../PHP/logout.php">Dil</a></li>
            </ul>
        </div>
<div>


    
<div>
        <div id ="control">
            <form id="forma" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="text"  name= "fjalekyce" placeholder="Kërko" />
                    <input  class="kerko" type="submit" name="submit" value="Kerko"><br>
            </form>
        </div>
        <div id= "fushalibrave">
    <?php 

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
                                
                            <button onclick="location.href ='shtoneshportethjeshte.php?user=<?php Echo $user?>&isbn=<?php echo $row['ISBN'];?>&Bli=<?php echo $row['Titull']; ?>'" type="submit" class="btn" name="Bli">Shto Ne Shporte</button> <br />
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
                                            <button onclick="location.href ='shtoneshportethjeshte.php?user = <?php Echo $user?>&isbn=<?php echo $row['ISBN'];?>&Bli=<?php echo $row['Titull']; ?>'" type="submit" class="btn" name="Bli">Shto Ne Shporte</button> <br />
                                            </div>
                                        </div>
                                    </div>
                               </div>
                              <?php  

                               }
                                
                    
                            }
                            else
                            {
                                header('location:searchtest.php?Invalid=Me kete fjale qe ju sapo kerkuar nuk rezulton asgje!Faleminderit');
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