<!-- <?php
require('includes/config.php');
 session_start();
	
	
	
	$search=$_GET['s'];
	$query="select *from book where b_nm like '%$search%'";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");

?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../CSS/dhuroStyleSara.css" />
    <style>
      button {
        text-decoration: none;
        color: #fff;
        padding: 5px 20px;
        border: 1px solid transparent;
        border-radius: 5px;
        background-color: rgb(68, 173, 206);
        transition: 0.6s ease;
        cursor: pointer;
      }

      .kopertina {
        float: left;
        text-align: left;
        height: 200px;
        width: 45%;
        /* background: rgb(179, 123, 235); */
        background-image: url("../FOTO/Becoming-Michelle-Obama-400x600.jpg");
      }

      .properties {
        float: right;
      }
      .container {
        margin-right: 50px;
        margin-top: 50px;
        width: 100%;
        text-align: center;
      }

      .left {
        float: left;
        width: 100px;
        box-shadow: 1px 2px 20px 0px rgb(179, 123, 235);
      }

      .center {
        display: inline-block;
        margin: 0 auto;
        width: 100px;
        box-shadow: 1px 2px 20px 0px rgb(179, 123, 235);
      }

      .right {
        float: right;
        width: 100px;
        box-shadow: 1px 2px 20px 0px rgb(179, 123, 235);
      }
      .miresevini {
        background-color: rgb(68, 173, 206);
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 5em;
        padding: 14px;
        box-shadow: 1px 2px 20px 0px rgb(179, 123, 235);
      }
    </style>

    <title>HomePage</title>
  </head>

  <body>
    <header>
      <nav>
        <div class="nav">
          <div class="logo">
            <ul>
              <li>
                <img src="../FOTO/logo.png" />
              </li>
            </ul>
          </div>

          <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="Rreth nesh.html">Rreth nesh</a></li>
            <li>
              <div class="menu">
                <button id="dd">Libraria jonë</button>

                <ul>
                  <li><a href="#">Autoret</a></li>
                  <li><a href="#">Zhanret</a></li>
                  <li><a href="#">Te dhuruar</a></li>
                </ul>
              </div>
            </li>
            <li><a href="kontakti.html">Kontakti</a></li>
            <li><a href="dhurovizitor.php">DHURO!</a></li>
          </ul>
        </div>
        <div class="nav2">
          <ul>
            <li><a href="../PHP/login.php">Identifikohu</a></li>
          </ul>
        </div>
      </nav>
    </header>
  </body>
</html>
