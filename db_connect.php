<?php 
$servername = "localhost";
$username = "root";
$password="";
$dbname= "the_district";

try{
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=the_district','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
  
catch (PDOException $e){
    echo "Erreur: ".$e->getMessage() . "<br>";
    echo "N° : " .$e->getCode();
    die("Fin du script");};
