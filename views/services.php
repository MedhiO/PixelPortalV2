<?php require_once "../includes/head.php"?>
<?php require_once "../controllers/servicescontroller.php"?>
<table>
<thead>
<tr>
<th colspan="3">Liste des services</th>
</tr>
</thead>
<tbody>
<tr>
<td>N° service</td>
<td>Nom service</td>
<td>ville</td>
</tr>
<?php
//boucle foreach pour afficher chaque ligne de la requête
foreach($lignes as $ligne){
    echo '<tr>
    <td>'.$ligne['noserv'].'</td>
    <td>'.$ligne['service'].'</td>
    <td>'.$ligne['ville'].'</td>
    <td><a
    href="serviceupdate.php?id='.$ligne['noserv'].'">Modifier</a></td>
    
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