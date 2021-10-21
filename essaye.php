
<?php

include 'connexion.php';



$select = 'SELECT nom FROM employes';
$array = array();
while ($data = $select->fetch())
{
	$array[]= $data['nom'];
}
?>

