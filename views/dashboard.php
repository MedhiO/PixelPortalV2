<?php ?>

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
    <link rel="stylesheet" href="../css/dashboard.css">
    <!-- Défini le lien vers la ressources externe footer.css -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- Défini le lien vers la ressources externe font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Défini le lien vers la ressources externe google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Défini le lien vers la ressources externe google font pour la police inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <!-- Défini le contenu du header -->
    <header>
    <?php require_once "../includes/entete.php"?>
        <div class="descriptif" id="descriptif">Tableau de bord
            <form method="post" action="../controllers/deconnexionController.php" enctype="multipart/form-data">
                <input type="submit" name="déconnexion" value="Déconnexion" class="déconnexion">
                <img src="../images/sortir.png" class="deco" alt="deco">
            </form>
        </div>
    </header>
    <div class="dashboard-container">
    <h2>Bienvenue sur votre tableau de bord</h2>
    <p>Vous pouvez maintenant accéder à toutes les fonctionnalités réservées à nos utilisateurs inscrits.</p>
    <form method="POST" action="../controllers/dashboardController.php" enctype="multipart/form-data">
        <!-- On limite le fichier à 100Ko -->
        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
        Fichier : <input type="file" name="avatar">
        <input type="submit" name="envoyer" value="Envoyer le fichier">
    </form>
</div>
    <!-- Défini le contenu du footer -->
    <?php require_once "../includes/footer.php"?>
    <!-- Défini le chemin vers le script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>
