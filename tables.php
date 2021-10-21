<?php include 'contents/header.php';
    include 'contents/menu.php';
    $pdo = DB::getInstance()->getPDO();?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Ressources humaines</h1>
                        <br></br>
                        <div class="row">
                             <div class="col-xl-3 col-md-6">
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Salariés
                            </div>
                            <?php
                            if(isset($_POST["modifier"])){
                            	$stmt = $pdo->prepare('UPDATE employes SET 
                            	nom ="'.$_POST['nom'].'",
                            	prenom ="'.$_POST['prenom'].'",
                            	commentaire ="'.$_POST['commentaire'].'",
                            	avertissements ="'.$_POST['avertissements'].'",
                            	tel ="'.$_POST['tel'].'",
                            	id_fonction ="'.$_POST['fonction'].'",
                            	formateur ="'.$_POST['formateur'].'",
                                moniteur ="'.$_POST['moniteur'].'",
                                plongee ="'.$_POST['plongee'].'"
                            	WHERE id = "'.$_POST['id_user'].'";');
                                $stmt->execute();
							};
                            ?>
                            <?php                              
                            $sql = 'SELECT id_fonction,employes.id, nom, prenom, DATE_FORMAT(date_recrutement,"%d/%m/%Y"), libelle, commentaire, avertissements, tel, moniteur, plongee, formateur FROM employes INNER JOIN fonction ON fonction.id = employes.id_fonction ORDER BY fonction.id DESC';                            
                            ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Date de recrutement</th>
                                                <th>Fonction</th>
                                                <th>Commentaire</th>
                                                <th>Avertissements</th>
                                                <th>Téléphone</th>
                                                <th>Moniteur</th>
                                                <th>Plongée</th>
                                                <th>Formateur</th>
                                                <th>✍️</th>
                                                <th>❌</th>
                                            </tr>
                                        </thead>
                                        <?php foreach($pdo->query($sql) as $row){?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['nom']."</p>";?></td> 
                                                <td><?php echo $row['prenom']."</p>";?></td>
                                                <td>
                                                	<?php echo $row['DATE_FORMAT(date_recrutement,"%d/%m/%Y")']."</p>";?>	
                                                </td>
                                                <td><?php echo $row['libelle']."</p>";?>
                                                <td><?php echo $row['commentaire']."</p>";?>
                                                <td><?php echo $row['avertissements']."</p>";?>
                                                <td><?php echo $row['tel']."</p>";?>
                                                <td><?php echo $row['moniteur']."</p>";?>
                                                <td><?php echo $row['plongee']."</p>";?>
                                                <td><?php echo $row['formateur']."</p>";?>
                                                <td><a href="employe.php?id=<?php echo $row['id'];?>&id_fonction=<?php echo $row['id_fonction'];?>&formateur=<?php echo $row['formateur'];?>">✍️</a></td>
                                                <td><a href="delet_entry.php?id=<?php echo $row['id'];?>">❌</a></td>
                                            </tr> 
                                        	<?php }?>             
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
<?php include 'contents/footer.php'?>