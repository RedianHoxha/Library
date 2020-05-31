<?php 
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
body{
  background-image: url("../FOTO/sorry.png");
  background-repeat:no-repeat;
}
div{
  margin: auto;
  width: 40%;
  background-color: rgb(129, 160, 182);
  padding: 10px;
  margin-top: 90px;
  border-radius: 15px;
}
div:hover {
  color: rgb(78, 84, 139);
}
p{
  font-size:200%;
  font-family: "Times New Roman", Times, serif;
}
</style>
    
  </head>
  <body>
    <div>
    <p>Pershendjetje, ju nuk mund te kryeni veprimet e rezervimit apo perdorimit te shportes pa qene me pare te regjistruar.</p>
    <p>Per me shume opsione ju ftojme te beheni pjese e librarise tone.</p>
           <button class="btn btn-secondary" onclick="location.href = '../PHP/rregjistrim.php'">Krijo nje acount ne librarin tone</button> 
           <button class="btn btn-secondary" onclick="location.href = 'index.php'" name="rezervo">Ktheu ne home</button> <br />
    </div>
  </body>
</html>

