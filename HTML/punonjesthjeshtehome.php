<?php 
        session_start();
        //include('../PHP/session.php');
        $user=$_SESSION['user'];
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
                       <th><td colspan="2">TO DO</td></th>
                        <tr>
                            <td>ID</td>
                            <td>Pershkrimi</td> 
                        </tr>
                        <!-- <tr>
                            <td> <a href="" >a112</a></td>
                            <td>Rezervim</td> 
                        </tr> -->
                    </table>
                </div>
                <div id="doing-part">
                    <table style="width:100%"> 
                        <th><td colspan="2">TO DO</td></th>  
                        <tr>
                            <td>ID</td>
                            <td>Pershkrimi</td> 
                        </tr>
                        <!-- <tr>
                            <td> <a href="" >a122</a></td>
                            <td>Blerje</td> 
                        </tr> -->
                    </table>
                </div>
                <div id="done-part">
                    <table style="width:100%">
                        <th><td colspan="2">TO DO</td></th>  
                        <tr>
                            <td>ID</td>
                            <td>Pershkrimi</td> 
                        </tr>
                        <!-- <tr>
                            <td> <a href="" >a132</a></td>
                            <td>Dhurim</td> 
                        </tr> -->
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>