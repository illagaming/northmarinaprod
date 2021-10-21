<?php include 'DB.php';

$pdo = DB::getInstance()->getPDO();

$stmt = $pdo->prepare('DELETE FROM employes WHERE id = :id ');
$stmt->bindParam(':id', $_GET['id']);

$IsOk = $stmt->execute();

if ($IsOk) {
	header("location:tables.php");	
}