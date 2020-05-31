
<?php 


$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_GET['Bli']))
 {
 
    $titull = $_GET['Bli'];

    $emriblersit = mysqli_real_escape_string( $link,$_POST['emer']);
    $mbiemerblersi = mysqli_real_escape_string( $link, $_POST['mbiemr']);
    $telefoni = mysqli_real_escape_string( $link,$_POST['tel']);
    $emailblersi = mysqli_real_escape_string( $link, $_POST['email']);
    $adresblersi =mysqli_real_escape_string( $link, $_POST['adresa']);
    $sasilibrash = mysqli_real_escape_string( $link, $_POST['sasia']);
    

    $datablerjes = date("Y-m-d");

    $statuslibriblere = 'Blere';
    $bleres = 'Bleres';
    $blerespass = 'Bleres';

    $statuslibridhuruar = 'Dhuruar';
    $statuspune = 'To Do';
    $p1 = substr($emriblersit,0,4);
    $p2 = substr($mbiemerblersi,0,4);
    $username = $p1.$p2;


    $sasailibrave = "SELECT * from librari  where Titull = ? and Statusi =?;";
    $stmt = mysqli_stmt_init($link);

        if(!mysqli_stmt_prepare($stmt,$sasailibrave))
            {
                echo 'error';
            }
            else
            {
            mysqli_stmt_bind_param($stmt,"ss",$titull,$statuslibriblere);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row =mysqli_fetch_assoc($result);
           
             //nqs ekzston libri per tu blere
                if(mysqli_num_rows($result)!=0)
                {
                    //Behet zbritja e librave qe lexuesi do bleje
                    $idlibri = $row['IdLibri'];
                    $sasiaktuale = $row['Sasia'];
                    $diferenca = $sasiaktuale - $sasilibrash;

                   //kontrollojme nese personi qe po blen tani ekziston ne databazes
                        $ekzistonuseri = "select * from useri where Emer = ? and Mbiemer= ? and  Username = ? and Roli = ?";
                        $stmt = mysqli_stmt_init($link);

                        if(!mysqli_stmt_prepare($stmt,$ekzistonuseri))
                            {
                                echo 'error';
                            }
                            else
                            {
                                mysqli_stmt_bind_param($stmt,"ssss",$emriblersit,$mbiemerblersi,$username,$bleres);
                                mysqli_stmt_execute($stmt);
                                
                                $result = mysqli_stmt_get_result($stmt);
                                $row =mysqli_fetch_assoc($result);
                               //
                                //echo mysqli_num_rows($result);
                                if(mysqli_num_rows($result)==0)
                                {
                                    //shtohet bleres i ri
                                    $slqinsert = "INSERT INTO useri (Emer,Mbiemer,Email,Tel,Adresa,Username,PassWord,Roli)
                                    VALUES (?,?,?,?,?,?,?,?);";
                        
                                    $stmt = mysqli_stmt_init($link);
                                    if(!mysqli_stmt_prepare($stmt,$slqinsert))
                                    {
                                        echo  'smund te shtohet rresht';
                                    }
                                    else
                                    {
                                       // echo $emailblersi . ''. $emriblersit.''. $mbiemerblersi;
                                        mysqli_stmt_bind_param($stmt, "sssissss" , $emriblersit, $mbiemerblersi, $emailblersi, $telefoni, $adresblersi, $username, $blerespass, $bleres);
                                        mysqli_stmt_execute($stmt);
                                        //echo 'u shtua user';
                                    }

                                    //marrim ide  userit te saposhtuar
                                    $ekzistonuseri = "select * from useri where Emer = ? and Mbiemer= ? and  Username = ? and Roli = ?";
                                    $stmt = mysqli_stmt_init($link);
            
                                    if(!mysqli_stmt_prepare($stmt,$ekzistonuseri))
                                        {
                                            echo 'error';
                                        }
                                        else
                                        {
                                            mysqli_stmt_bind_param($stmt,"ssss",$emriblersit,$mbiemerblersi,$username,$bleres);
                                            mysqli_stmt_execute($stmt);
                                            
                                            $result = mysqli_stmt_get_result($stmt);
                                            $row =mysqli_fetch_assoc($result);
                                           //
                                            //echo mysqli_num_rows($result);
                                            if(mysqli_num_rows($result)==0)
                                            {
                                                echo 'useri nuk u rregjistrua';
                                            }
                                            else
                                            {
                                                $idblersi = $row['IdUser'];
                                                //echo $idblersi;
                                                //shtohet tek blerja
                                                    $slqinsert = "INSERT INTO bli (DateBlerje, IdLibri, Sasia ,IdBlersi,statusi)
                                                    VALUES (?,?,?,?,?);";
                                        
                                                    $stmt = mysqli_stmt_init($link);
                                                    if(!mysqli_stmt_prepare($stmt,$slqinsert))
                                                    {
                                                        echo  'smund te shtohet rresht';
                                                    }
                                                    else
                                                    {
                                                        mysqli_stmt_bind_param($stmt, "siiis" , $datablerjes, $idlibri, $sasilibrash,$idblersi,$statuspune );
                                                        mysqli_stmt_execute($stmt);
                                                       // echo 'u shtua dhe blerja';
                                                    }
                                            }
                                        }
                                }
                                else
                                //nqs blersi ekziston shtohet vetem blerje e re
                                {
                                    $idblersi = $row['IdUser'];
                                    $slqinsert = "INSERT INTO bli (DateBlerje, IdLibri, Sasia ,IdBlersi,statusi)
                                    VALUES (?,?,?,?,?);";
                        
                                    $stmt = mysqli_stmt_init($link);
                                    if(!mysqli_stmt_prepare($stmt,$slqinsert))
                                    {
                                        echo  'smund te shtohet rresht';
                                    }
                                    else
                                    {
                                        mysqli_stmt_bind_param($stmt, "siiis" , $datablerjes, $idlibri, $sasilibrash,$idblersi,$statuspune );
                                        mysqli_stmt_execute($stmt);
                                    }


                                }


                                    $sql = "UPDATE librari set Sasia = ? WHERE IdLibri = ?;";
                                
                                        $stmt = mysqli_stmt_init($link);
                                        if(!mysqli_stmt_prepare($stmt,$sql))
                                        {
                                            echo 'error';
                                        }
                                        else
                                        {
                                            mysqli_stmt_bind_param($stmt,"ii",$diferenca,$idlibri);
                                            mysqli_stmt_execute($stmt);
                                        }
                            }
                            header('location:index.php');
                }
                //nqs libri nuk ekziston
                else
                {
                    $sql = "SELECT * from librari where Titull =? and Statusi= ?;";

                        $stmt = mysqli_stmt_init($link);

                       if(!mysqli_stmt_prepare($stmt,$sql))
                        {
                            echo 'error';
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt,"ss",$titull,$statuslibridhuruar);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            $row =mysqli_fetch_assoc($result);
                        
                            if(mysqli_num_rows($result)==0)
                            {
                                echo 'Na vjen keq por ky liber na ka mbaruar Faleminderit';
                            }
                            else
                            {
                                Echo 'fatkeqesisht ne librarine tone te gjith librat me titull '.  $titull. 
                                ' jane shitur por ju mund ta rezervoni nje te tille per ta lexuar deri sa ne te
                                 marrim ne librarine tone kete liber perseri'; 
                            }

                        }
                }
            } 
}
else{
    echo 'bli seshte klikuar';
}
?>