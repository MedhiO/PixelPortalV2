<?php
require_once "../includes/connexiondb.php";
$con = connectdb();

// Demarre la session
session_start();

// Vérifie si l'utilisateur est connecté
if (isset($_SESSION['user_id'])) {
    // Récupère le prénom et l'heure de connexion depuis la base de données
    $userId = $_SESSION['user_id'];
    $userInfoSql = "SELECT prenomUtilisateur, heureConnexionUtilisateur FROM utilisateur WHERE idUtilisateur = :userId";
    $userInfoStmt = $con->prepare($userInfoSql);
    $userInfoStmt->bindParam(':userId', $userId);
    $userInfoStmt->execute();
    $userInfo = $userInfoStmt->fetch(PDO::FETCH_ASSOC);

    // Affiche les informations dans le HTML
    $prenomUtilisateur = $userInfo['prenomUtilisateur'];
    $heureConnexion = $userInfo['heureConnexionUtilisateur'];
} else {
    // Si l'utilisateur n'est pas connecté, redirige-le vers la page de connexion
    header("Location: ../views/login.php");
    exit();
}
?>
