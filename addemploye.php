<?php include 'contents/header.php';
    include 'contents/menu.php';?>

	<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Ajouter un employé</h1>
                        <p></p>
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                Liste des employés
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                            </div>
                        </div> -->
	                        <div class="card mb-4">
	                            <div class="card-header">
	                            	<i class="fas fa-people-carry"></i>
	                                Salariés
	                            </div>
	                            <div class="card-body">
		                        <?php
                                $pdo = DB::getInstance()->getPDO();
								$select = 'SELECT id, libelle FROM fonction ORDER BY ID';
								?>
								<form action="test.php" method="post">
									<label for="nom">Nom : </label>
								    <input type="text" name="nom" id="nom" required>
									</br>
									<label for="prenom">Prénom : </label>
								    <input type="text" name="prenom" id="prenom" required>
								    </br>
								    <label for="fonction">Grade : </label>
								    <select name="fonction" id="fonction">
								    	<?php foreach($pdo->query($select) as $value){?>
								    	<option value="<?php echo $value['id'];?>">
											<?php echo $value['libelle']."</p>";?>
										</option>
										<?php } ?> 
								    </select>
								    </br>
								    <label for="commentaire">Commentaire : </label>
								    <input type="text" name="commentaire" id="commentaire">
								    </br>
								    <label for="avertissements">Avertissement : </label>
								    <input type="text" name="avertissements" id="avertissements">
								    </br>
								    <label for="tel">Téléphone : </label>
								    <input type="tel" name="tel" id="tel" required>
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
		  							<label for="formateur">Formateur : </label> 
		  							<select name="formateur" id="formateur">
		  								<?php 
		  								$sql4 = 'SELECT prenom FROM employes where id_fonction >= 6';
		  								foreach($pdo->query($sql4) as $value){?>
								    	<option value="<?php echo $value['prenom'];?>">
											<?php echo $value['prenom'];?>
										</option>
										<?php } ?> 				        
								    </select>
								    </br>
								    <input type="submit" name="button" class="btn btn-primary" value="Envoyer"> 
								</form>
							</div>
						</div>
					</div>
                </main>
               
<?php include 'contents/footer.php'?>
