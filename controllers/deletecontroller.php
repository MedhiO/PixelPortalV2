<?php
require_once "../includes/connexiondb.php";
$con = connectdb();
//suppression d'un service
if(isset($_GET['del'])){
    // $id = $_GET['del'];
$delRequest = "DELETE FROM serv WHERE noserv=?";
$deleteRequest = $con->prepare($delRequest);
$deleteRequest->execute(array($_GET['del']));
header('Location: ../views/services.php');
}
?>