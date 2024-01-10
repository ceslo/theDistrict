<?php 
$servername = "localhost";
$username = "admin";
$password= "Afpa1234";
$dbname= "the_district";

try{
$conn = new PDO("mysql:host=$servername;dbname= $dbname", $username, $password);
$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connecté avec succès à la base de données";
}
catch (PDOException $e){
    echo"Erreur de connexion à la base de données: ". $e-> getMessage();
}?>
