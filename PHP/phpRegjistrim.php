<?php 

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
    $emri = mysqli_real_escape_string( $link,$_POST['emer']);
    $mbiemri =mysqli_real_escape_string( $link, $_POST['mbiemer']);
    $username= mysqli_real_escape_string( $link,$_POST['username']);
    $email =mysqli_real_escape_string( $link, $_POST['email']);
    $tel=mysqli_real_escape_string( $link,$_POST['tel']);
    $adresa =mysqli_real_escape_string( $link, $_POST['adrese']);
    $password=mysqli_real_escape_string( $link,$_POST['pass1']);
    $reset_password=mysqli_real_escape_string( $link,$_POST['pass2']);


    $roli = "Vizitor";






   $passwordenkriptuar=$_POST['hidenpassword'];

    

   $sqlusername= "select * from useri where Username='$username'";
   $result=mysqli_query($link, $sqlusername);

   if(mysqli_num_rows($result)==0){

    $sql = $link->prepare("INSERT INTO useri (Emer,Mbiemer,Email,Tel,Adresa,Username,PassWord,Roli)
Values (?, ?, ?, ?, ?, ?, ?, ?)");
$sql->bind_param("sssdssss", '&emri', '&mbiemri', '&email', '&tel', '&adresa', '&username', '&passwordenkriptuar', '&roli');
if (!$sql->execute() || $sql.affected_rows == 0) {
 echo "error executing query";
//  exit;
}
else {
 echo "success";
//  exit;
}

//    $sql = "INSERT INTO useri (Emer,Mbiemer,Email,Tel,Adresa,Username,PassWord,Roli)
//    VALUES('$emri','$mbiemri', '$email','$tel' , '$adresa','$username','$passwordenkriptuar','$roli')";
//   
// $sql ="INSERT INTO useri (Emer,Mbiemer,Email,Tel,Adresa,Username,PassWord,Roli)
// Values (:e,:m,:emal,:t,:ad,:us,:pas,:rol)";

// //     $sql->bindParam(':e',$emri);
// // $sql->bindParam(':m',$mbiemri);
// // $sql->bindParam(':emal',$email);
// // $sql->bindParam(':t',$tel);
// // $sql->bindParam(':ad',$adresa);
// // $sql->bindParam(':us',$username);
// // $sql->bindParam(':pas',$passwordenkriptuar);
// // $sql->bindParam(':rol',$roli);

// $sql ->Execute('$emri','$mbiemri', '$email','$tel' , '$adresa','$username','$passwordenkriptuar','$roli'); 


 



// if(mysqli_query($link, $sql)){
        
//         header('location:login.php');
//     } else{
//         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//     }
}
else{
    header('location:rregjistrim.php?Invalid=Please enter another Username!');
}

 
mysqli_close($link);

?>