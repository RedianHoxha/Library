
<?php 

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
    $emri = $_POST['fname'];
    $mbiemri = $_POST['lname'];
    $email = $_POST['email'];
    $telefoni = $_POST['tel'];
    $adresa = $_POST['adresa'];
    $tabelamelibra =  $_POST['hiddenValue'];
    // Convert JSON string to Array
    $someArray = json_decode($tabelamelibra, true);
    $queryValues = '';
    $sqlLibrari = 'INSERT INTO librari (ISBN, Titull, Autor, Pershkrim, Zhanri, Sasia, Statusi, Cmimi, Foto)';
    foreach ($someArray as $key => $value) {
        $queryValues .= "( '$value[isbn]' , '$value[titull]', '$value[autor]', '$value[pershkrim]', '$value[zhanri]', 1 , 'Dhuruar', $value[cmimi], ' ' ),";
      }
    $queryValues = rtrim($queryValues, ',');
    $queryValues = 'VALUES'. $queryValues; 
    $sqlLibrari = $sqlLibrari.$queryValues;


// //Attempt insert query execution

$p1 = substr($emri,0,3);
$p2 = substr($mbiemri,0,3);
$username = $p1.$p2;



$ekzistonuseri = "select * from useri where Emer = '$emri' and Mbiemer='$mbiemri' and  Username = '$username' and Roli = 'Dhurues'";
  $resultuseri=mysqli_query($link, $ekzistonuseri);

      if(mysqli_num_rows($resultuseri)>0)
      {
        $acc_fetch = mysqli_fetch_array($resultuseri);
        $user = $acc_fetch['Username'];

        if($user != $username)
        {
            $sqlUser = "INSERT INTO useri (Emer,Mbiemer,Email,Tel,Adresa,Username,Password,Roli)
            VALUES('$emri','$mbiemri', '$email', '$telefoni', '$adresa','$username','Dhurues','Dhurues')";
            if(mysqli_query($link, $sqlUser) && mysqli_query($link, $sqlLibrari)){
                header('location:../HTML/homeperdorues.html');
            } else
            {
                echo "ERROR: Could not able to execute $sqlUser. " . mysqli_error($link);
            }
            
        }
        else
        {
            mysqli_query($link, $sqlLibrari);
            header('location:../HTML/homeperdorues.html');
        }
    }



 
mysqli_close($link);

?>