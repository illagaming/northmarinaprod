<?php
include 'DB.php';

$pdo = DB::getInstance()->getPDO();

$id = $_GET['id'];
date_default_timezone_set('Europe/Paris');
$date = date("Ymd");
$time = date("Hi");

try{
    $sql = $pdo->prepare("UPDATE service SET date_fin_service = '$date', heure_fin_service = '$time' WHERE id_employes = '$id'");
    $sql->execute();

    $sql2 = $pdo->prepare("UPDATE employes SET service = '0' WHERE id = '$id'");
    $sql2->execute();

    header('Location:presence.php');
}
catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}

?>
