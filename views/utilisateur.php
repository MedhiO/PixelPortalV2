<?php require_once "../controllers/utilisateurController.php"?>
<?php require_once "../includes/head.php"?>
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
<td>Mot De passe utilisateur</td>
</tr>
<?php
//boucle foreach pour afficher chaque ligne de la requête
foreach($lignes as $ligne){
    echo '<tr>
    <td>'.$ligne['prenomUtilisateur'].'</td>
    <td>'.$ligne['nomUtilisateur'].'</td>
    <td>'.$ligne['emailUtilisateur'].'</td>
    <td>'.$ligne['motDePasseUtilisateur'].'</td>
    <td><a href="serviceupdate.php?id='.$ligne['noserv'].'">Modifier</a></td>
    
    <td><form action="../controllers/deletecontroller.php"
    method="GET"><button class="btn btn-danger" type="submit" name="del"
    value='.$ligne['noserv'].' >Supprimer</button></form></td>
    </tr>';
    }
    ?>
    </tbody>
    </table>
</body>
</html>