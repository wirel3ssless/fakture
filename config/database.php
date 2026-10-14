<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "program_fakture"; 
$port = 3306;

$konekcija = mysqli_connect($host, $username, $password, $database, $port);

if (!$konekcija) {
    header("Location: error.php");
}
?>
