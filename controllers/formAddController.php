<?php
require_once "../includes/connexiondb.php";
$con = connectdb();

// Vérifie si les champs sont remplis
if (
    isset($_POST['nomUtilisateur']) &&
    isset($_POST['prenomUtilisateur']) &&
    isset($_POST['emailUtilisateur']) &&
    isset($_POST['motDePasseUtilisateur']) &&
    isset($_POST['ConfirmMotDePasseUtilisateur'])
) {
    $motDePasseRegex = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/';
    // Récupération des valeurs saisies dans le formulaire
    $nom = $_POST['nomUtilisateur'];
    $prenom = $_POST['prenomUtilisateur'];
    $email = $_POST['emailUtilisateur'];
    $password = $_POST['motDePasseUtilisateur'];
    $confirmPassword = $_POST['ConfirmMotDePasseUtilisateur'];
    // Hashage du mot de passe avant l'enregistrement dans la base de données
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Enregistrement des valeurs dans la base de données
    $sql = "INSERT INTO utilisateur (nomUtilisateur, prenomUtilisateur, emailUtilisateur, motDePasseUtilisateur) VALUES ('$nom', '$prenom', '$email', '$passwordHash')";
    // Vérification de la longueur du nom et du prénom
    if (strlen($nom) < 3 || strlen($prenom) < 3) {
        echo "Les champs nom et prénom doivent comporter au moins 3 caractères.";
    } else
        // Vérification du format de l'email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "L'email saisi n'est pas au bon format.";
        } else
            // Vérification du format du mot de passe
            if (!preg_match($motDePasseRegex, $password)) {
                echo "Le mot de passe saisi n'est pas au bon format.";
            } else
                // Vérification de la similarité des mots de passe
                if ($password !== $confirmPassword) {
                    echo "Les mots de passe ne correspondent pas.";
                } else {
                    // Utilisation de password_verify pour vérifier le mot de passe confirmé
                    if (password_verify($confirmPassword, $passwordHash)) {
                        $con->query($sql);
                        // Redirection vers la page de connexion
                        header("Location: ../views/login.php");
                        exit();
                    } else {
                        echo "Erreur lors de la vérification du mot de passe.";
                    }
                }
} else {
    echo "Tous les champs doivent être remplis.";
}
?>