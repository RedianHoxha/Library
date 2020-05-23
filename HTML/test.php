<?php 
        session_start();
        //include('../PHP/session.php');
        $user=$_SESSION['user'];
      ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../CSS/styleSara.css" />
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
            <li><a href="Rrethneshlexues.php">Rreth nesh</a></li>
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
            <li><a href="kontaktilexues.php">Kontakti</a></li>
            <li><a href="dhurovizitor.php">DHURO!</a></li>
          </ul>
        </div>
        <div class="nav2">
          <ul>
          <li><a href="NefoProfile.php"><?php echo $user ?></a></li>
            <li><a href="../PHP/logout.php">Dil</a></li>
          </ul>
        </div>
        <div class="title">
          <h1>Çfarë do lexoni?</h1>
        </div>
        <div class="search">
          <input type="text" placeholder="Kërko" />
          <a href="#">Kërko</a>
        </div>
      </nav>
      <div class="miresevini">
        <h1><center>Mirësevini në Librarinë tonë. EKSPLORO!</center></h1>
      </div>
    </header>
    <div
      class="container"
      style="
        margin-right: 50px;
        margin-top: 50px;
        width: 100%;
        text-align: center;
      "
    >
      <div class="left" style="width: 25%; height: 100%; padding: 20px;">
        <!-- style="background-color: rgb(68, 173, 206); -->
        <div
          class="kopertina"
          style="
            float: left;
            text-align: left;
            height: 200px;
            width: 45%;
            /* background: rgb(179, 123, 235); */
          "
        >
          <!-- Ketu do jete kopertina e librit -->
        </div>
        <div class="properties">
          <input
            type="text"
            id="titulli"
            placeholder="Ketu do jet titulli i librit"
          />
          <br />

          <input
            type="text"
            id="autori"
            placeholder="ketu do jet autori i librit"
          />
          <br />

          <input
            type="text"
            id="cmimi"
            placeholder="ketu do jet cmimi i librit"
          />

          <br />
          <div clas="butonat">
            <button onclick="">Bli</button> <br />
            <br />
            <button onclick="">Rezervo</button> <br />
            <br />
            <button onclick="">Shto ne Wishlist</button> <br />
          </div>
        </div>
      </div>
      <div class="center" style="width: 25%; height: 100%; padding: 20px;">
        >
        <div
          class="kopertina"
          style="
            text-align: left;
            height: 200px;
            width: 45%;
            background: rgb(179, 123, 235);
          "
        >
          Ketu do jete kopertina e librit
        </div>
        <div class="properties">
          <input
            type="text"
            id="titulli"
            placeholder="Ketu do jet titulli i librit"
          />
          <br />

          <input
            type="text"
            id="autori"
            placeholder="ketu do jet autori i librit"
          />
          <br />

          <input
            type="text"
            id="cmimi"
            placeholder="ketu do jet cmimi i librit"
          />

          <div clas="butonat">
            <button onclick="">Bli</button> <br />
            <br />
            <button onclick="">Rezervo</button> <br />
            <br />
            <button onclick="">Shto ne Wishlist</button> <br />
          </div>
        </div>
      </div>
      <div class="right" style="width: 25%; height: 100%; padding: 20px;">
        >
        <div
          class="kopertina"
          style="
            text-align: left;
            height: 200px;
            width: 45%;
            background: rgb(179, 123, 235);
          "
        >
          Ketu do jete kopertina e librit
        </div>
        <div class="properties">
          <input
            type="text"
            id="titulli"
            placeholder="Ketu do jet titulli i librit"
          />
          <br />

          <input
            type="text"
            id="autori"
            placeholder="ketu do jet autori i librit"
          />
          <br />

          <input
            type="text"
            id="cmimi"
            placeholder="ketu do jet cmimi i librit"
          />

          <div clas="butonat">
            <button onclick="">Bli</button> <br />
            <br />
            <button onclick="">Rezervo</button> <br />
            <br />
            <button onclick="">Shto ne Wishlist</button> <br />
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="left" style="width: 25%; height: 100%; padding: 20px;">
        <div
          class="kopertina"
          style="
            text-align: left;
            height: 200px;
            width: 45%;
            background: rgb(179, 123, 235);
          "
        >
          Ketu do jete kopertina e librit
        </div>
        <div class="properties">
          <input
            type="text"
            id="titulli"
            placeholder="Ketu do jet titulli i librit"
          />
          <br />

          <input
            type="text"
            id="autori"
            placeholder="ketu do jet autori i librit"
          />
          <br />

          <input
            type="text"
            id="cmimi"
            placeholder="ketu do jet cmimi i librit"
          />

          <br />
          <div clas="butonat">
            <button onclick="">Bli</button> <br />
            <br />
            <button onclick="">Rezervo</button> <br />
            <br />
            <button onclick="">Shto ne Wishlist</button> <br />
          </div>
        </div>
      </div>
      <div class="center" style="width: 25%; height: 100%; padding: 20px;">
        <div
          class="kopertina"
          style="
            text-align: left;
            height: 200px;
            width: 45%;
            background: rgb(179, 123, 235);
          "
        >
          Ketu do jete kopertina e librit
        </div>
        <div class="properties">
          <input
            type="text"
            id="titulli"
            placeholder="Ketu do jet titulli i librit"
          />
          <br />

          <input
            type="text"
            id="autori"
            placeholder="ketu do jet autori i librit"
          />
          <br />

          <input
            type="text"
            id="cmimi"
            placeholder="ketu do jet cmimi i librit"
          />

          <br />
          <div clas="butonat">
            <button onclick="">Bli</button> <br />
            <br />
            <button onclick="">Rezervo</button> <br />
            <br />
            <button onclick="">Shto ne Wishlist</button> <br />
          </div>
        </div>
      </div>
      <div class="right" style="width: 25%; height: 100%; padding: 20px;">
        <div
          class="kopertina"
          style="
            text-align: left;
            height: 200px;
            width: 45%;
            /* background: rgb(179, 123, 235); */
            background-image: url();
          "
        >
          Ketu do jete kopertina e librit
        </div>
        <div class="properties">
          <input
            type="text"
            id="titulli"
            placeholder="Ketu do jet titulli i librit"
          />
          <br />

          <input
            type="text"
            id="autori"
            placeholder="ketu do jet autori i librit"
          />
          <br />

          <input
            type="text"
            id="cmimi"
            placeholder="ketu do jet cmimi i librit"
          />

          <br />
          <div clas="butonat">
            <button onclick="">Bli</button> <br />
            <br />
            <button onclick="">Rezervo</button> <br />
            <br />
            <button onclick="">Shto ne Wishlist</button> <br />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>