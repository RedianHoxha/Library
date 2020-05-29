
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
    //echo $isbnlibrave;
      //echo $queryValues;
    $queryValues = rtrim($queryValues, ',');
    $queryValues = 'VALUES'. $queryValues; 
    $sqlLibrari = $sqlLibrari.$queryValues;


// //Attempt insert query execution

$p1 = substr($emri,0,3);
$p2 = substr($mbiemri,0,3);
$username = $p1.$p2;



$ekzistonuseri = "select * from useri where Emer = '$emri' and Mbiemer='$mbiemri' and  Username = '$username' and Roli = 'Dhurues'";
  $resultuseri=mysqli_query($link, $ekzistonuseri);


      if(mysqli_num_rows($resultuseri) == 0)
      {
        $sqlUser = "INSERT INTO useri (Emer,Mbiemer,Email,Tel,Adresa,Username,Password,Roli)
        VALUES('$emri','$mbiemri', '$email', '$telefoni', '$adresa','$username','Dhurues','Dhurues')";
                    if(mysqli_query($link, $sqlUser) && mysqli_query($link, $sqlLibrari))
                    {
                        $gjejuser = "select * from useri where Emer = '$emri' and Mbiemer='$mbiemri' and  Username = '$username' and Roli = 'Dhurues'";
                        $resultuseriigjetur=mysqli_query($link, $gjejuser);
                        $rowekzistus = mysqli_fetch_array($resultuseriigjetur);
                        $iduser = $rowekzistus['IdUser'];
                        
                        $isbnlibrave = rtrim($isbnlibrave, ' ');
                        $str_arr = explode (" ", $isbnlibrave);
                        foreach( $str_arr as $isbn)
                        {
                            $isbn = trim($isbn);
                            if ($isbn !== '')
                            {
                                $insertdhuro = "insert into dhuro (DateDhurimi,Idlibri,Sasia,IdDhurusi) values ('$datablerjes','$isbn',1,'$iduser')";
                                echo $insertdhuro;
                                mysqli_query($link, $insertdhuro);
                            }
                        }
                        header('location:../HTML/index.php');
                    } 
                    else
                    {
                        echo "ERROR: Could not able to execute $sqlUser. " . mysqli_error($link);
                    }

            
        }
        else
        {
            
            $acc_fetch = mysqli_fetch_array($resultuseri);
            $iduser= $acc_fetch['IdUser'];
            mysqli_query($link, $sqlLibrari);

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
           header('location:../HTML/index.php');
        }
    


    



 
mysqli_close($link);

?>