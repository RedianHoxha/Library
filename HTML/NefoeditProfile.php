<?php 
        session_start();
        //include('../PHP/session.php');
        $user=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Edit</title>
    <style>
    .profile h4  {
      margin-bottom: 6px;
      margin-top: 40px;
      margin-left: -50px;
    }
    .form-group{
      margin-right: 60px;
    }
.test{
  margin-top: -30px;
}
    </style>
    <script>
    function myFunction()                                    
{ 
    var name = document.forms["myForm"]["emri"];  
    var surname = document.forms["myForm"]["mbiemri"];             
    var email = document.forms["myForm"]["email"];    
    
    if (name.value == "")                                  
    { 
        window.alert("Ju lutem vendosni emrin."); 
        name.focus(); 
        return false; 
    } 
   
    if (surname.value == "")                                  
    { 
        window.alert("Ju lutem vendosni mbiemrin."); 
        name.focus(); 
        return false; 
    }        
    if (email.value == "")                                   
    { 
        window.alert("Ju lutem vendosni nje adrese te sakte emaili."); 
        email.focus(); 
        return false; 
    } 
   
    return true; 
}</script> 
</head>
<body>
<div class="container-fluid">
  <div  class="row">
    <div id="dhashb"class="col-sm-4 position-relative ">
       <?php include 'dashboard.php' ?>
    </div>
    <div class="col-sm-8">
     <div class="profile">
        <h2></h2>
        <h4 class="shadow-sm p-3 mb-5 bg-white rounded"><i class="fa fa-user-o"></i> Pershendetje, ketu mund te beni ndryshimet ne lidhje me te dhenat tuaja!</h4>
     </div>
     <?php $link = mysqli_connect("localhost", "root", "", "library");
        
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sqlquery="Select * from useri  where Username = '$user'";
                   $result=mysqli_query($link, $sqlquery);
                   $row = mysqli_fetch_array($result)
        ?>
   
    <div class="form-group test">
       <form name="myForm"class="h5 py-4"action='../PHP/editProfile.php?editProfile=<?php echo $row['IdUser'] ?>' method='post'onsubmit="return myFunction()">
         <label  for="emri">Emri:</label><br>
         <input class="form-control" type="text" id="emri" name="emri"  value="<?php echo $row['Emer']; ?>" ><br>
         <label for="mbiemri">Mbiemri:</label><br>
         <input class="form-control" type="text" id="mbiemri" name="mbiemri"value="<?php echo $row['Mbiemer']; ?>"><br>
         <label for="username">Username:</label><br>
         <input class="form-control" type="text" id="username" name="username"value="<?php echo $row['Username']; ?>"disabled><br>
           <label for="email">Emaili :</label><br>
           <input class="form-control" type="email" id="email" name="email"value="<?php echo $row['Email']; ?>" pattern="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/" required><br>
           <button type="submit" class="btn btn-secondary btn-lg btn-block" name="update">Update</button>
       </form>
     </div>
    </div>
</div> 
</body>
</html>
