
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

echo $tabelamelibra;
    // foreach($tabelamelibra as $value)
    // {
    //    echo $value;
    // }

// Attempt insert query execution
// $sql = "INSERT INTO useri (Emer,Mbiemer,Email,Tel,Adresa,Usename,Password,Roli)
// VALUES('$emri','$mbiemri', '$email', '$telefoni', '$adresa','$email','$email','$mbiemri')";
// if(mysqli_query($link, $sql)){
//     echo "Records added successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
 
mysqli_close($link);

?>