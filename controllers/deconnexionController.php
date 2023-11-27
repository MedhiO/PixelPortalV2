<?php
// Démarre la session
session_start();

// Vérifie si l'utilisateur est connecté
if (isset($_SESSION['user_id'])) {

    // Vérifie si la déconnexion a été demandée
    if (isset($_POST['deconnexion'])) {
        // Détruit la session
        session_destroy();

        // Redirige vers la page de login
        header("Location: ../views/login.php");
        exit();
    }
} else {
    // L'utilisateur n'est pas connecté, redirige vers la page de connexion
    header("Location: ../views/login.php");
    exit();
}
?>