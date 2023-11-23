<?php
require_once "../includes/head.php";
require_once "../controllers/updatecontroller.php";
?>
<body>
<div>
<h1 class="">Modifier le service</h1>
</div>
<div class="">
<form action="../controllers/updatecontroller.php"
method="POST">
<div class="">
<label for="noserv" class="">Id sur service</label>
<input type="text" class="" id="nom" name="noserv"
value="<?php echo $service['noserv']; ?>">
</div>
<div class="">
<label for="nomserv" class="">Nom du service</label>
<input type="text" class="" id="nom"
name="nomserv" value="<?php echo $service['service']; ?>">
</div>
<div class="mb-3">
<label for="villeserv" class="form-label">Ville du
service</label>
<input type="text" class="form-control" id="prenom"
name="villeserv"
value="<?php echo $service['ville']; ?>">
</div>
<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
</div>
</body>
</html>