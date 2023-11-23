<?php
require_once "../includes/connexiondb.php";
$con = connectdb();
//on vérifie si les champs sont remplis
if(isset($_POST['numServ']) && isset($_POST['nomServ']) &&
isset($_POST['ville'])){
//création des variables pour stocker les données des champs
$numServ= $_POST['numServ'];
$nomServ= $_POST['nomServ'];
$ville=$_POST['ville'];
//on fait notre requête sql avec le prépare
$req= $con->prepare('INSERT INTO serv (noserv,service,ville)
VALUES (?,?,?)');
//puis on exécute notre requête
$req->execute(array($numServ,$nomServ,$ville));
//retour sur le tableau des services
// header('location: services.php');
}
?>