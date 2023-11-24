<?php require_once "../includes/entete.php"?>
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
    <link rel="stylesheet" href="../css/header2.css">
    <!-- Défini le lien vers la ressources externe main.css -->
    <link rel="stylesheet" href="../css/main-forum.css">
    <!-- Défini le lien vers la ressources externe footer.css -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- Défini le lien vers la ressources externe google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Défini le lien vers la ressources externe google font pour la police inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Forum</title>
</head>
<body>
    <!-- Défini le contenu du header -->
    <header>
        <?php require_once "../includes/entete.php"?>
        <div class="descriptif" id="descriptif">Forum
            <div class="deconnexion" id="deconnexion" name="deconnexion">
                <p>Déconnexion</p>
                <img src="../images/sortir.png" class="deco" alt="deco">
            </div>
        </div>
    </header>
    <!-- Défini le contenu du main -->
    <main>
        <div class="bodyForum" id="bodyForum">
            <div class="affichageDonnees" id="affichageDonnees"><div class="affichagePrenom" id="affichagePrenom"></div><div class="affichageDate" id="affichageDate"></div><div class="affichageHeureConnexion" id="affichageHeureConnexion"></div></div>
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
            <a href="../views/categories.php">
                <div class="backgroundCategoriesRétro" id="backgroundCategoriesRétro">
                    <h1 class="h1f" id="h1f">Rétrogaming</h1>
                    <p class="p1f" id="p1f">Votre destination ultime pour tout ce qui concerne l'univers des jeux vidéo. Que vous soyez un joueur occasionnel, un passionné ou acharné vous trouverez ici une communauté dynamique et passionnée qui partage votre amour pour les jeux vidéo.</p>
                </div>
                </div>
                <div class="col"></div>
            </a>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                <a href="../views/categories.php">
                    <div class="backgroundCategoriesGénéral" id="backgroundCategoriesGénéral">
                        <h1 class="h2f" id="h2f">Général jeux vidéo</h1>
                        <p class="p2f" id="p2f">la destination incontournable pour tous les amateurs de jeux vidéo rétro. Si vous avez une passion pour les classiques intemporels, les consoles vintage et les souvenirs de l'âge d'or du gaming, vous êtes au bon endroit.</p>
                    </div>
                </div>
                <div class="col"></div>
                </a>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col">
                    <a href="../views/categories.php">
                    <div class="backgroundCategoriesGuerre" id="backgroundCategoriesGuerre">
                        <h1 class="h3f" id="h3f">Guerre des consoles</h1>
                        <p class="p3f" id="p3f">Plongez dans l'univers passionnant de la rivalité entre les principales consoles de jeu vidéo. Notre forum est le lieu de rencontre idéal pour les fans inconditionnels de Xbox, PlayStation, Nintendo, et bien d'autres, qui souhaitent débattre, comparer et défendre leur console préférée.</p>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </main>
    <!-- Défini le contenu du footer -->
    <?php require_once "../includes/footer.php"?>
    <!-- Défini le chemin vers le script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>