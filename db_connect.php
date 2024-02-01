<?php 
$servername = "localhost";
$username = "admin";
$password= "Afpa1234";
$dbname= "the_district";

try{
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=the_district','admin','Afpa1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
  
catch (PDOException $e){
    echo "Erreur: ".$e->getMessage() . "<br>";
    echo "N° : " .$e->getCode();
    die("Fin du script");};
