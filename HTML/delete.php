<?php 

$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
$sql = "DELETE FROM librari WHERE id=$id";
mysqli_query($link, $sql);
header('location: Libraria.php');
}