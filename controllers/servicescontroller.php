<?php
require_once "../includes/connexiondb.php" ;
//connection à la bdd
$con = connectdb();
//faire la requête
//création de la variable requete et on y fait une requete sql
$requete = 'SELECT * from serv';
//on souhaite dans une variable avoir la réponse de la requête
//Attention on est pas encore co à la bdd
//on créé la variable "$response" et on se co à la bdd
$response = $con->query($requete);
//on va récupérer toutes les lignes de la requête
$lignes = $response->fetchAll();
?>