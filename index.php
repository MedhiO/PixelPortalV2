<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Défini le lien vers la ressources externe bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Défini le lien vers la ressources externe reset.css -->
    <link rel="stylesheet" href="./css/reset.css">
    <!-- Défini le lien vers la ressources externe body.css -->
    <link rel="stylesheet" href="./css/body.css">
    <!-- Défini le lien vers la ressources externe header.css -->
    <link rel="stylesheet" href="./css/header.css">
    <!-- Défini le lien vers la ressources externe main.css -->
    <link rel="stylesheet" href="./css/main-index.css">
    <!-- Défini le lien vers la ressources externe footer.css -->
    <link rel="stylesheet" href="./css/footer.css">
    <!-- Défini le lien vers la ressources externe google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Défini le lien vers la ressources externe google font pour la police inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Accueil</title>
</head>
<body>
    <!-- Défini le contenu du header -->
    <header>
        <?php require_once "../includes/entete.php"?>
        <div class="descriptif" id="descriptif">Accueil</div>
    </header>   
    <!-- Défini le contenu du main -->
    <main>
        <div class="boutonAccueil" id="boutonAccueil">
            <div class="row">
                <div class="col"></div>
                <div class="col"><a href="./html/register.html"><input type="submit" id="boutonRegister" class="boutonRegister" value="S'ENREGISTRER"></a></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col"><a href="./html/login.html"><input type="submit" id="boutonLogin" class="boutonLogin" value="   CONNEXION   "></a></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
        </div>
    </main>
    <!-- Défini le contenu du footer -->
    <?php require_once "../includes/footer.php"?>
    <!-- Défini le chemin vers le script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>