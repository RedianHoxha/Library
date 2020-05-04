
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

//  echo $tabelamelibra;
//     foreach($tabelamelibra as $value)   
//     {
//        echo $value;
//     }

// //Attempt insert query execution

$p1 = substr($emri,0,3);
$p2 = substr($mbiemri,0,3);
$username = $p1.$p2;

// if (is_array($values) || is_object($values))
// {
// foreach ($tabelamelibra as $key => $value) {
//     // $arr[3] will be updated with each value from $arr...
//     echo "{$key} => {$value} ";
// }
// }
$sql = "INSERT INTO useri (Emer,Mbiemer,Email,Tel,Adresa,Usename,Password,Roli)
VALUES('$emri','$mbiemri', '$email', '$telefoni', '$adresa','$username','Dhurues','Dhurues')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);

?>