
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
    <style>

    </style>
</head>
<body>
<div class="container-fluid">
  <div  class="row">
    <div id="dhashb"class="col-sm-4 position-relative ">
       <?php include 'dashboard.php' ?>
    </div>
    <div class="col-sm-8">
     <div>
       <h2>YOUR PROFILE</h2>
       <p>Pershendetje, ketu mund te beni ndryshimet ne lidhje me te dhenat tuaja!</p>
     </div>
     <div class="form-group">
        <fieldset>
            <form>
                <h2>Ju lutem vendosni adresen ku doni tju vije porosia</h2>
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname">
                <input type="submit" name="Ruaj">
            </form>
        </fieldset>
    </div>
</div>
</div> 
</body>
</html>
