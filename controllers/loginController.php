<?php
require_once "../includes/connexiondb.php";
$con = connectdb();

// Récupération des valeurs saisies depuis le formulaire
$email2 = $_POST['email2'];
$pwd2 = $_POST['password2'];

// Affichage du contenu des variables pour le débogage
echo "Contenu de \$email2 : " . $email2 . "<br>";
echo "Contenu de \$pwd2 : " . $pwd2 . "<br>";

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

    // Affichage du contenu de $row pour le débogage
    echo "Contenu de \$row : ";
    print_r($row);
    echo "<br>";

    echo "Email saisi : " . $email2 . "<br>";
    echo "Mot de passe saisi : " . $pwd2 . "<br>";
    echo "Email stocké : " . $row["emailUtilisateur"] . "<br>";
    echo "Mot de passe stocké : " . $row["motDePasseUtilisateur"] . "<br>";


    if ($row) {
        // Affichage du mot de passe haché pour le débogage
        echo "Mot de passe haché stocké : " . $row["motDePasseUtilisateur"] . "<br>";

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

