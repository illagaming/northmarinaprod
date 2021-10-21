<?php include 'DB.php';

$pdo = DB::getInstance()->getPDO();

$id = $_POST['service'];
date_default_timezone_set('Europe/Paris');
$date = date("Ymd");
$time = date("Hi");

try{	
	$sql = $pdo->prepare("
		INSERT INTO service (id_employes,date_service,heure_service)
		VALUES (:id_employes,:Ymd,:Hi)");
	$sql->bindParam('id_employes',$id);	
	$sql->bindParam(':Ymd',$date);
	$sql->bindParam(':Hi',$time);
	$sql->execute();

	$sql2 = $pdo->prepare("UPDATE employes SET service = '1' WHERE id = '$id'");
	$sql2->execute();

	header('Location:presence.php');
}
catch(PDOException $e){
	echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}