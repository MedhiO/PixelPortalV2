<?php require_once "../includes/head.php"?>
<?php require_once "../controllers/utilisateurController.php"?>
<table>
<thead>
<tr>
<th colspan="4">Liste des utilisateurs</th>
</tr>
</thead>
<tbody>
<tr>
<td>Prenom utilisateur</td>
<td>Nom utilisateur</td>
<td>Email utilisateur</td>
<td>Mot de passe utilisateur</td>
</tr>
<?php
//boucle foreach pour afficher chaque ligne de la requête
foreach($lignes as $ligne){
    echo '<tr>
    <td>'.$ligne['prenomUtilisateur'].'</td>
    <td>'.$ligne['nomUtilisateur'].'</td>
    <td>'.$ligne['emailUtilisateur'].'</td>
    <td>'.$ligne['motDePasseUtilisateur'].'</td>
    </tr>';
    }
    ?>
    </tbody>
    </table>
</body>
</html>