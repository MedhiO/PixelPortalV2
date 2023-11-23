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
    <link rel="stylesheet" href="../css/header3.css">
    <!-- Défini le lien vers la ressources externe main.css -->
    <link rel="stylesheet" href="../css/main-categories.css">
    <!-- Défini le lien vers la ressources externe footer.css -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- Défini le lien vers la ressources externe font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Défini le lien vers la ressources externe google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Défini le lien vers la ressources externe google font pour la police inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Categories</title>
</head>
<body>
    <!-- Défini le contenu du header -->
    <header>
        <?php require_once "../includes/entete.php"?>
        <div class="descriptif" id="descriptif">Sujet
            <div class="deconnexion" id="deconnexion">
                <p>Déconnexion</p>
                <img src="../images/sortir.png" class="deco" alt="deco">
            </div>
        </div>
    </header>
    <!-- Défini le contenu du main -->
    <main>
        <div class="affichageDonnees" id="affichageDonnees"><div class="affichagePrenom" id="affichagePrenom"></div><div class="affichageDate" id="affichageDate"></div><div class="affichageHeureConnexion" id="affichageHeureConnexion"></div></div>
        <div class="bodyCategories" id="bodyCategories">
            <div class="thead">
                <h1 class="h1C" id="h1C">Sujets</h1><h1>Auteur</h1><h1>Dernier msg</h1>
            </div>
            <div class="listeSujet" id="listeSujet"></div>
            <i class="fa-solid fa-folder fa-2xl" style="color: #0b61f4;"></i>
            <h2 class="h2C" id="h2C">Nouveau sujet</h2>
            <div class="nouveauSujet" id="nouveauSujet">
              <input type="text" class="sujetTitre" id="sujetTitre" placeholder="Titre du Sujet">
              <textarea class="textaera" id="sujetMessage" placeholder="Message du Sujet"></textarea>
            </div>
            <div class="boutonCategories">
                <button class="creerSujet" id="creerSujet">POSTER</button>
                <a href="forum.html"><button class="creerSujet2" id="creerSujet">Retour a la liste<br>des categories</button></a>
            </div>
        </div>
        <div class="bodySujet" id="bodySujet">
        </div>
    </main>
    <!-- Défini le contenu du footer -->
    <?php require_once "../includes/footer.php"?>
    <!-- Défini le chemin vers le script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Défini le chemin vers les autres scripts -->
    <script src="../javascript/script(affichage prenom + date + heure de co).js"></script>
    <script src="../javascript/script(fonction pour afficher les sujets).js"></script>
    <script src="../javascript/script(verification d'authentification).js"></script>
</body>
</html>