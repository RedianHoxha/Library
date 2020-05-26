<?php 
     
            
     session_start();
     //include('../PHP/session.php');
     $user=$_SESSION['user'];
     $link = mysqli_connect("localhost", "root", "", "library");
 
 // Check connection
 if($link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }
   ?>

<!DOCTYPE html>
<html>
    <head>
        <link  href="../CSS/Punonjescss.css" rel="stylesheet" type="text/css">
        <title>Punonjsi</title>
        <div id="top-page">
                <div id="top-page-left">
                <p>Today is: 12/Prill/2020</p>
                <p>Punen e sotme mos e ler per neser mor ta marsha</p>
                </div>
                <div id="top-page-right">
                    <input  class="button" type="button"  value="<?php echo $user ?>" onclick="window.location='NefoProfile.html'">
                    <input  class="button" type="button"  value="Web" onclick="window.location='homeperdorues.php'">
                    <input  class="button"type="button"  value="Log out" onclick="window.location='../PHP/logout.php'">
                </div>
        </div>


    </head>
    <body>
        <div id="page-down">
            <div id="page-down-djathtas">
                <div id="todo-part">
                    <table style="width:100%">
                       <th><td><b>Blerjet</b></td></th>
                        <tr colspan="2">
                            <td >ID Blerje</td>
                            <td>Statusi punes</td> 
                        </tr>
                        <?php $sqlquerybli="Select * from bli where statusi = 'To Do'";
                
                    $resultbli=mysqli_query($link, $sqlquerybli);

                while ($row = mysqli_fetch_array($resultbli)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['IdBlerje']; ?></td>
                        <td><?php echo $row['statusi']; ?></td>
                    </tr>
                </tbody>
                <?php } ?>

                    </table>
                </div>
                <div id="doing-part">
                    <table style="width:100%"> 
                        <th><td colspan="2"><b>Rezervimet</b></td></th>  
                        <tr>
                            <td>ID Rezervimi</td>
                            <td>Statusi</td> 
                        </tr>
                        <?php $sqlqueryrezervo="Select * from rezervo  where statusi  = 'To Do'";
                //echo $sqlquery;
                    $resultrezervo=mysqli_query($link, $sqlqueryrezervo);

                while ($row = mysqli_fetch_array($resultrezervo)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['IdRezervimi']; ?></td>
                        <td><?php echo $row['statusi']; ?></td>
                    </tr>
                </tbody>
                <?php } ?>
                    </table>
                </div>
                <div id="done-part">
                    <table style="width:100%">
                        <th><td colspan="2"><b>Punet e mia</b></td></th>  
                        <tr>
                            <td>ID Pune</td>
                            <td>Statusi</td> 
                        </tr>
                        <?php $sqlquerypunet="Select * from rezervo  where statusi  = 'To Do'";
                    $resultpunet=mysqli_query($link, $sqlquerypunet);

                while ($row = mysqli_fetch_array($resultpunet)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['IdLibri']; ?></td>
                        <td><?php echo $row['IdLexusi']; ?></td>
                    </tr>
                </tbody>
                <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>