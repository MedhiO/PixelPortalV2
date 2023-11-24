<?php
require_once "../includes/connexiondb.php";
$con = connectdb();

// Récupération des valeurs saisies depuis le formulaire
$email2 = $_POST['email2'];
$pwd2 = $_POST['password2'];

// Vérifie si les champs sont remplis
if (empty($email2) || empty($pwd2)) {
    echo "Veuillez remplir tous les champs.";
} else {

    // Requête SQL pour récupérer les informations stockées dans la base de données
    $sql = "SELECT emailUtilisateur, motDePasseUtilisateur FROM utilisateur WHERE emailUtilisateur = :email2";

    $stmt = $con->prepare($sql);
    $stmt->bindParam(':email2', $email2);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // Vérifie si les informations saisies correspondent aux informations stockées
        if ($email2 != $row["emailUtilisateur"] || !password_verify($pwd2, $row["motDePasseUtilisateur"])) {
            echo "Les informations saisies sont incorrectes.";
        } else {
            // Redirection vers la page forum.php
            header("Location: ../views/forum.php");
            exit();
        }
    } else {
        echo "Les informations saisies sont incorrectes.";
    }
}
?>

