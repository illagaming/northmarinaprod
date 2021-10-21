<?php include 'contents/header.php';
    include 'contents/menu.php';
    $pdo = DB::getInstance()->getPDO();
?>
			<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Ajouter un trajet</h1>
                        <div class="row">
                             <div class="col-xl-3 col-md-6">
                            </div>
                        </div>
                        <?php $sql2 = 'SELECT nom, prenom FROM employes where id="'.$_GET['id'].'"'; ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-fish"></i>
                                <?php
                                    foreach($pdo->query($sql2) as $value){
                                    echo $value['prenom']." ";
                                    echo $value['nom'];}
                                ?>
                            </div>
                            <div class="card-body">
							<form action="tables.php" method="post">
								<?php $sql = 'SELECT nom, prenom, commentaire, avertissements, tel FROM employes where id="'.$_GET['id'].'"';
								?>
								<?php foreach($pdo->query($sql) as $row){ ?>
									<label for="nom">Nom : </label>
								    <input type="text" name="nom" id="nom" value="<?php echo $row['nom'];?>">
									</br>
									<label for="prenom">Prénom : </label>
								    <input type="text" name="prenom" id="prenom" value="<?php echo $row['prenom'];?>">
								    </br>
								    <label for="commentaire">Commentaire : </label>
								    <input type="text" name="commentaire" id="commentaire" value="<?php echo $row['commentaire'];?>">
								    </br>
								    <label for="avertissements">Avertissement : </label>
								    <input type="text" name="avertissements" id="avertissements" value="<?php echo $row['avertissements'];?>">
								    </br>
								    <label for="tel">Téléphone : </label>
								    <input type="tel" name="tel" id="tel" value="<?php echo $row['tel'];}?>">
								    </br>  
								    <label for="moniteur">Moniteur : </label>  
								    <select name="moniteur" id="moniteur">							
								    	<option value="non">non</option>
								    	<option value="oui">oui</option>
								    </select>
		  							</br>
		  							<label for="plongee">Plongée : </label> 
								    <select name="plongee" id="plongee">
								    	<option value="non">non</option>
								    	<option value="oui">oui</option>
								    </select> 
		  							</br>
		  							<label for="fonction">Grade : </label>
		  							<select name="fonction" id="fonction">
		  								<?php
		  								$reponse = $pdo->query('SELECT fonction.id,libelle FROM fonction INNER JOIN employes ON fonction.id = employes.id_fonction where employes.id="'.$_GET['id'].'"');
		  								while ($donnees = $reponse->fetch()){
		  								?>
		  								<option value="<?php echo $donnees['id'];?>" selected>
		  									<?php echo $donnees['libelle'];}?>
		  								</option>
								    	<?php 
								    	$sql3 = "SELECT DISTINCT fonction.id,libelle FROM fonction LEFT JOIN employes ON  fonction.id = employes.id_fonction where fonction.id NOT IN ('".$_GET['id_fonction']."') ORDER BY fonction.id";
								    	foreach($pdo->query($sql3) as $value){?>
								    	<option value="<?php echo $value['id'];?>" >
											<?php echo $value['libelle'];?>
										</option>
										<?php } ?> 
								    </select>
								    </br>
		  							<label for="formateur">Formateur : </label> 
		  							<select name="formateur" id="formateur">
		  								<?php 
		  								$answer = $pdo->query('SELECT DISTINCT formateur FROM employes where formateur = "'.$_GET['formateur'].'"');
		  								while ($donnees = $answer->fetch()){
		  								?>
		  								<option value="<?php echo $donnees['formateur'];?>" selected>
											<?php echo $donnees['formateur'];}?>
										</option>
		  								<?php 
		  								$sql4 = "SELECT DISTINCT prenom FROM employes where (prenom != '".$_GET['formateur']."') AND id_fonction >= 6 ORDER BY prenom";
		  								foreach($pdo->query($sql4) as $value){?>
								    	<option value="<?php echo $value['prenom'];?>">
											<?php echo $value['prenom'];?>
										</option>
										<?php } ?> 				        
								    </select>
								    </br>
								    <input type="hidden" name="id_user" value="<?php echo $_GET['id'];?>"> 
								    <input type="submit" class="btn btn-primary" name="modifier" value="Envoyer">
								    <button class="btn btn-danger" href="tables.php">Annuler</button>
								</form>
							</div>
						</div>
                    </div>
                </main>
            </div>



<?php include 'contents/footer.php';?>