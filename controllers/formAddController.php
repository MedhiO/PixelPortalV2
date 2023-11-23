<?php
require_once "../includes/connexiondb.php";
$con = connectdb();
//on vérifie si les champs sont remplis
if(isset($_POST['prenomUtilisateur']) && isset($_POST['nomUtilisateur']) && isset($_POST['emailUtilisateur']) && isset($_POST['motDePasseUtilisateur'])){
//création des variables pour stocker les données des champs
$prenom= $_POST['prenomUtilisateur'];
$nom= $_POST['nomUtilisateur'];
$email=$_POST['emailUtilisateur'];
$mdp=$_POST['motDePasseUtilisateur'];
//on fait notre requête sql avec le prépare
$req= $con->prepare('INSERT INTO utilisateur (prenomUtilisateur,nomUtilisateur,emailUtilisateur,motDePasseUtilisateur) VALUES (?,?,?,?)');
//puis on exécute notre requête
$req->execute(array($prenom,$nom,$email,$mdp));
//retour sur le tableau des services
// header('location: services.php');
}
?>