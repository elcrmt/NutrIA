<?php 

$servername = "localhost";
$username = "root";
$password = "nouveaumotdepasse";
$dbname = "teachAi";

try{
    $pdo = new PDO('mysql:host='.$servername.';dbname='.$dbname.';', $username, $password);
    define("PDO", $pdo);

}catch(Exception $e){
die('Impossible de se connecter à la base de donnée -> '.$e);
}



?>