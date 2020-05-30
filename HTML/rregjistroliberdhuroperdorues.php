
<?php 

session_start();
//include('../PHP/session.php');
$user=$_SESSION['user'];

$link = mysqli_connect("localhost", "root", "", "library");

// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

// $emri = $_POST['fname'];
// $mbiemri = $_POST['lname'];
// $email = $_POST['email'];
// $telefoni = $_POST['tel'];
// $adresa = $_POST['adresa'];
$destinacionhome ;

$tabelamelibra =  $_POST['hiddenValue'];
$datablerjes = date("Y-m-d");


// Convert JSON string to Array
$someArray = json_decode($tabelamelibra, true);
$queryValues = '';
$isbnlibrave = '';
$sqlLibrari = 'INSERT INTO librari (ISBN, Titull, Autor, Pershkrim, Zhanri, Sasia, Statusi, Cmimi, Foto)';
foreach ($someArray as $key => $value) {
$queryValues .= "( '$value[isbn]' , '$value[titull]', '$value[autor]', '$value[pershkrim]', '$value[zhanri]', 1 , 'Dhuruar', $value[cmimi], ' ' ),";
$isbnlibrave .= $value['isbn'] . ' ';

}

$queryValues = rtrim($queryValues, ',');
$queryValues = 'VALUES'. $queryValues; 
$sqlLibrari = $sqlLibrari.$queryValues;

            if( mysqli_query($link, $sqlLibrari))
            {
                echo 'jemi ketu';
                $gjejuser = "select * from useri where Username = '$user'";
                $resultuseriigjetur=mysqli_query($link, $gjejuser);
                $rowekzistus = mysqli_fetch_array($resultuseriigjetur);
                $iduser = $rowekzistus['IdUser'];
                $roli = $rowekzistus['Roli'];
                $email = $rowekzistus['Email'];
                
                $isbnlibrave = rtrim($isbnlibrave, ' ');
                $str_arr = explode (" ", $isbnlibrave);
                foreach( $str_arr as $isbn)
                {
                    $isbn = trim($isbn);
                    if ($isbn !== '')
                    {
                        $insertdhuro = "insert into dhuro (DateDhurimi,Idlibri,Sasia,IdDhurusi) values ('$datablerjes','$isbn',1,'$iduser')";
                        mysqli_query($link, $insertdhuro);
                    }
                }

                $to = 'hoxharedian@gmail.com';
                $Subject = "Faleminderit per librin e dhururar";
                $message = "stafi i Biblary ju falenderon jasht mase per librin e dhuruar";
                $headers = "From Stafi i Biblery";

                mail($to,$Subject,$message,$headers);
                
                if($roli === 'Admin')
                { 
                    header('location:../HTML/homeadmin.php');
                }
                else if($roli === 'Vizitor'){

                    header('location:../HTML/homelexues.php');
                }
                else{
                    header('location:../HTML/homeperdorues.php');
                }




                
            } 

            
            else
            {
                echo "ERROR: Could not able to execute $sqlUser. " . mysqli_error($link);
            }

    

mysqli_close($link);

?>