<?php
//appel à notre fichier de connexion
require_once "../includes/connexiondb.php";
//création de la variable de connexion
$con = connectdb();
//requete pour récupérer les données du service par rapport à l'id
$req ="SELECT * FROM serv WHERE noserv = '".$_GET['id']."'";
//application de la requête
$response = $con->query($req);
//récupération d'une seule ligne
$service = $response->fetch();
//vérif si le formulaire a été soumis
if($_SERVER['REQUEST_METHOD']==='POST'){
    //récupération des valeurs soumises
    $id = $_POST['noserv'];
$nomServ = $_POST['nomserv'];
$villeServ = $_POST['villeserv'];
//Mise à jour des données
$reqUpdate ="UPDATE serv SET noserv='$id',
service='$nomServ',ville='$villeServ' where noserv='$id'";
//on se connecte à la bdd et on exécute notre requête 
$con->exec($reqUpdate);
//Redirection vers la view services
header('Location:../views/services.php');
exit;
}
    