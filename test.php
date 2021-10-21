<?php include 'DB.php';

$pdo = DB::getInstance()->getPDO();

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date = date("Ymd");
$fonction = $_POST['fonction'];
$commentaire = $_POST['commentaire'];
$avertissements = $_POST['avertissements'];
$tel = $_POST['tel'];
$moniteur = $_POST['moniteur'];
$plongee = $_POST['plongee'];
$formateur = $_POST['formateur'];



try{	
	$sql = $pdo->prepare("
		INSERT INTO employes (nom,prenom,date_recrutement,id_fonction,commentaire,avertissements,tel,moniteur,plongee,formateur)
		VALUES (:nom, :prenom, :Ymd, :fonction, :commentaire, :avertissements, :tel,:moniteur,:plongee, :formateur)");
	$sql->bindParam(':nom',$nom);
	$sql->bindParam(':prenom',$prenom);
	$sql->bindParam(':Ymd',$date);
	$sql->bindParam(':fonction',$fonction);
	$sql->bindParam(':commentaire',$commentaire);
	$sql->bindParam(':avertissements',$avertissements);	
	$sql->bindParam(':tel',$tel);
	$sql->bindParam(':moniteur',$moniteur);
	$sql->bindParam(':plongee',$plongee);
	$sql->bindParam(':formateur',$formateur);
	$sql->execute();

	header('Location:tables.php');
}
catch(PDOException $e){
	echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}