<?php 

$link = mysqli_connect("localhost", "root", "", "library");
 //$link = new PDO('myslq :host=localhost;dbname=library','root','');
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



$sql = "SELECT * from useri where Username =?;";

$stmt = mysqli_stmt_init($link);

if(!mysqli_stmt_prepare($stmt,$sql))
{
    echo 'error';
}
else
{
    mysqli_stmt_bind_param($stmt,"s",$username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row =mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)==0)
    {
        $slqinsert = "INSERT INTO useri (Emer,Mbiemer,Email,Tel,Adresa,Username,PassWord,Roli)
            VALUES (?,?,?,?,?,?,?,?);";

            $stmt = mysqli_stmt_init($link);
            if(!mysqli_stmt_prepare($stmt,$slqinsert))
            {
                echo  'smund te shtohet rresht';
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "sssissss" , $emri, $mbiemri, $email, $tel, $adresa, $username, $passwordenkriptuar, $roli);
                mysqli_stmt_execute($stmt);
                header('location:login.php');
            }
        
    }
    else
    {
        header('location:rregjistrim.php?Invalid=Please enter another Username!');
    }

}

mysqli_close($link);

?>