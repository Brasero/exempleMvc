<?php

$host = "localhost";
$user = "root";
$mdp = "root";
$char = "utf8";
$dbName = "testMvc";

try{
    $bdd = new PDO("mysql:host=$host;dbname=$dbName;char=$char", $user, $mdp);
}
catch(PDOException $e){
    echo "[ERREUR] => ".$e->getMessage();
    die();
}



?>