<?php
//création de la fonction de connexion à la bdd
function connectdb(){
//variable pour le serveur
$serveur ="localhost";
//variable pour le user
$user= "root";
//variable pour le mdp
$password="";
//variable pour le nom de la bdd
$bdd="pixelportal";

try{
//variable de connection à la bdd
$con = new
PDO('mysql:host='.$serveur.';dbname='.$bdd,$user,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);
return $con;
}
//gestion des erreurs
catch(PDOException $error){
echo 'N°'.$error->getCode().'<br/>';
die ('Erreur : '.$error->getMessage().'<br/>');
}
}