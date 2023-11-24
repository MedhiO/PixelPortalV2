<?php
require_once "../includes/connexiondb.php";
$con = connectdb();

// Démarre la session PHP
session_start();

// Vérifie si l'utilisateur est connecté
if (isset($_SESSION['utilisateur'])) {
    // L'utilisateur est connecté

    // Vérifie si la déconnexion a été demandée
    if (isset($_POST['deconnexion'])) {
        // Détruit toutes les données de la session
        session_destroy();

        // Redirige vers la page d'accueil ou toute autre page de connexion
        header("Location: ../views/logn.php");
        exit();
    }
} else {
    // L'utilisateur n'est pas connecté, redirige vers la page de connexion
    header("Location: ../views/login.php");
    exit();
}
?>