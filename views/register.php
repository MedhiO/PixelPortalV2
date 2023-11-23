<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Défini le lien vers la ressources externe bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Défini le lien vers la ressources externe reset.css -->
    <link rel="stylesheet" href="../css/reset.css">
    <!-- Défini le lien vers la ressources externe body.css -->
    <link rel="stylesheet" href="../css/body.css">
    <!-- Défini le lien vers la ressources externe header.css -->
    <link rel="stylesheet" href="../css/header.css">
    <!-- Défini le lien vers la ressources externe main.css -->
    <link rel="stylesheet" href="../css/main-register.css">
    <!-- Défini le lien vers la ressources externe footer.css -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- Défini le lien vers la ressources externe google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Défini le lien vers la ressources externe google font pour la police inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <!-- Défini le contenu du header -->
    <header>
        <?php require_once "../includes/entete.php"?>
        <div class="descriptif" id="descriptif">Ajouter un compte</div>
    </header>
    <!-- Défini le contenu du main -->
    <main>
        <div class="backgroundFormRegister" id="backgroundFormRegister">
            <form action="../controllers/formAddController.php" method="POST" class="formRegister" id="formRegister">
                <label for="nom" id="lnom" class="lnom">Nom :</label>
                <label for="prenom" id="lprenom" class="lprenom">Prenom :</label>
                <div class="nomPrenomForm" id="nomPrenomForm">
                    <input type="text" class="inputNom" id="nom" placeholder="Saisissez votre nom">
                    <input type="text" class="inputPrenom" id="prenom" placeholder="Saisissez votre prenom">
                </div>
                <div class="shapeEmail" id="shapeEmail">
                    <label for="email" id="lemail" class="lemail">Adresse email :</label>
                    <input type="email" class="inputmail" id="email" placeholder="Saisissez votre email">
                </div>
                <label for="motDePasse" id="mdp" class="lmdp">Mot de passe :</label>
                <div class="spanFormShape" id="spanFormShape">
                    <span class="span6" id="span6">Le mot de passe doit contenir :</span>
                    <span class="spanForm" id="span7">min 8 caractères</span>
                    <span class="spanForm" id="span8">1 majuscule</span>
                    <span class="spanForm" id="span9">1 minuscule</span>
                    <span class="spanForm" id="span10">1 chiffre</span>
                    <span class="span11" id="span11">1 caractères spécial</span>
                </div>
                <div class="mdpForm" id="mdpForm">
                    <input type="password" class="inputPwd" id="password" placeholder="Créer votre mot de passe">
                    <input type="password" class="inputConfirmPwd" id="confirmPassword" placeholder="Confirmer le mot de passe">
                </div>
                <input type="submit" value="Confirmer" class="inputConfirmer" id="Confirmer">
                <div id="erreurCompletion" class="messageErreur"></div>
                <div id="erreurLongueur" class="messageErreur"></div>
                <div id="erreurFormatEmail" class="messageErreur"></div>
                <div id="erreurFormatMdp" class="messageErreur"></div>
                <div id="erreurSimilariteMdp" class="messageErreur"></div>
            </form>
        </div>
    </main>
    <!-- Défini le contenu du footer -->
    <?php require_once "../includes/footer.php"?>
    <!-- Défini le chemin vers le script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
