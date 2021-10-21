<?php include 'DB.php';

$pdo = DB::getInstance()->getPDO();

$id_client = $_POST['id_client'];
$poisson_peche = $_POST['poisson_peche'];
$poisson_coffre = $_POST['poisson_coffre'];
date_default_timezone_set('Europe/Paris');
$date = date("Ymd");
$time = date("Hi");


try{		
	$sql = $pdo->prepare("
		INSERT INTO peche (id_client,poisson_peche,poisson_coffre,date2,heure)
		VALUES (:id_client,:poisson_peche,:poisson_coffre,:Ymd,:Hi)");
	$sql->bindParam(':id_client',$id_client);
	$sql->bindParam(':poisson_peche',$poisson_peche);
	$sql->bindParam(':poisson_coffre',$poisson_coffre);
	$sql->bindParam(':Ymd',$date);
	$sql->bindParam(':Hi',$time);
	$sql->execute();	

	header('Location:run.php');
}
catch(PDOException $e){
	echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}