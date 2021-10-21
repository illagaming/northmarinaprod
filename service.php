<?php include 'contents/header.php';
    include 'contents/menu.php';?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Véhicules</h1>
                        	<br></br>
                        <div class="row">
                             <div class="col-xl-3 col-md-6">
                            </div>
                        </div> 

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-ship"></i>
                                Véhicules utilisés
                            </div>
                            <?php $pdo = DB::getInstance()->getPDO(); ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Immatriculation du bateau</th>
                                                <th>Occupé par</th>
                                                <th>Mule choisie</th>
                                                <th>Utilisé par Manager</th>
                                                <th>Supprimer</th>                                                 
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td>
                                                	
                                            	</td>                                 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-ship"></i>
                                Véhicules disponnibles
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Immatriculation du bateau</th>
                                                <th>Votre Nom</th>
                                                <th>Mule choisie</th>
                                                <th>Utilisé par Manager</th>
                                                <th>Ajouter</th>                                                  
                                            </tr>
                                        </thead>
                                        <?php 
                                        $sql = 'SELECT immat_bateau FROM bateau';            
                                        	foreach($pdo->query($sql) as $row){?>
                                        <tbody>
                                            <tr>
                                                <td>
                                                	<?php echo $row['immat_bateau']."</p>";?>
                                            	</td> 
                                                <?php 
                                                $select = 'SELECT id, nom, prenom FROM employes';
                                                ?>
                                                <td>
                                                	<select name="personne" id="personne">
                                                		<?php foreach($pdo->query($select) as $value){?>
												        <option value="<?php echo $value['id'];?>">
												        	<?php echo $value['nom']."</p>";?>
												        	<?php echo $value['prenom']."</p>";?>
												        </option>
												        <?php } ?>
												    </select>  
												</td> 
												<?php 
                                                $select2 = 'SELECT id,immat FROM mules';?> 
												<td>
													<select name="mules" id="mules">
                                                		<?php foreach($pdo->query($select2) as $value2){?>
												        <option value="<?php $value2['id'];?>">
												        	<?php echo $value2['immat']."</p>";?>		
												        </option>
												        <?php } ?>
												    </select>													
												</td>
												<td>													 
								    				<input type="checkbox" id="manager" value="oui" name="manager">
												</td> 
												<td>
													<input type="submit" name="button2" class="btn btn-primary" value="Envoyer"> 
												</td>                                      
                                            </tr>                                                                              
                                        </tbody>
                                    	<?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<?php include 'contents/footer.php'?>
                
