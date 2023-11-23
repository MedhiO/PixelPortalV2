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
    <link rel="stylesheet" href="../css/main-login.css">
    <!-- Défini le lien vers la ressources externe footer.css -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- Défini le lien vers la ressources externe google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Défini le lien vers la ressources externe google font pour la police inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <!-- Défini le lien vers la ressources externe font awesome pour les icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <!-- Défini le contenu du header -->
    <header>
        <?php require_once "../includes/entete.php"?>
        <div class="descriptif" id="descriptif">Se connecter</div>
    </header>
    <!-- Défini le contenu du main -->
    <main>
        <div class="body" id="body">
            <div class="shapeBody" id="shapeBody">
                <form class="formRegister2" id="formRegister2">
                    <div class="shapeConnexion" id="shapeConnexion">
                        <label for="identify" class="identify" id="identify">Identifiez vous :</label>
                        <div class="input1" id="input1">
                            <i class="fa-regular fa-user fa-2xl" style="color: #ffffff;"></i>
                            <input type="email" id="email2" class="email2"  placeholder="Saisissez votre email">
                        </div>
                        <div class="separateur" id="separateur"></div>
                            <div class="input2" id="input2">
                                <div class="eye">
                                <i class="fa-solid fa-lock fa-2xl" style="color: #ffffff;"></i>
                                <input type="password" id="password2" class="password2" placeholder="Saisissez votre mot de passe">
                                    <i class="fa-regular fa-eye fa-2xl" style="color: #ffffff;"></i>
                                    <i class="fa-regular fa-eye-slash fa-2xl" style="color: #ffffff;"></i>
                                </div>
                            </div>
                        <input type="submit" value="Valider" class="inputValider" id="Valider">
                        <div id="erreurInfoSaisie" class="messageErreur"></div>
                        <div id="erreurSimilariteInfo" class="messageErreur"></div>
                    </div>
                </form>
                <div class="shapeCreerCompte" id="shapeCreerCompte">
                    <span class="spanA" id="span1">Vous ne possédez pas de compte sur PixelPortal ?</span>
                    <span class="spanC" id="span5">C'est rapide, gratuit, et ca vous permettra de participer sur le forums,</span>
                    <span class="spanC" id="span3">afin que vous puissiez profitez pleinement de notre communauté...</span>
                    <a href="./register.php"><input type="button" value="Créer un compte" class="inputCréerCompte" id="inputCréerCompte"></a>
                </div>
            </div>
            </div>
    </main>
    <!-- Défini le contenu du footer -->
    <?php require_once "../includes/footer.php"?>
    <!-- Défini le chemin vers le script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>