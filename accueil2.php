<?php include 'contents/header.php';
    include 'contents/menu.php';
    ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <br></br>
                        <div class="row">
                             <div class="col-xl-3 col-md-6">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Poissons Pêchés
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Revenue
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Salariés
                            </div>
                            <?php   

                            $sql = 'SELECT nom, prenom, DATE_FORMAT(date_recrutement,"%d/%m/%Y"), libelle, commentaire, 
                                    avertissements, tel, moniteur, plongee, formateur FROM employes INNER JOIN fonction 
                                    ON fonction.id = employes.id_fonction ORDER BY fonction.id DESC';
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
                                            </tr>
                                        </thead>
                                        <?php
                                        $pdo = DB::getInstance()->getPDO();
                                        foreach($pdo->query($sql) as $row){?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['nom']."</p>";?></td>  
                                                <td><?php echo $row['prenom']."</p>";?></td>
                                                <td><?php echo $row['DATE_FORMAT(date_recrutement,"%d/%m/%Y")']."</p>";?></td>
                                                <td><?php echo $row['libelle']."</p>";?></td>
                                                <td><?php echo $row['commentaire']."</p>";?></td>
                                                <td><?php echo $row['avertissements']."</p>";?></td>
                                                <td><?php echo $row['tel']."</p>";?></td>
                                                <td><?php echo $row['moniteur']."</p>";?></td>
                                                <td><?php echo $row['plongee']."</p>";?></td>
                                                <td><?php echo $row['formateur']."</p>";}?></td>
                                            </tr>      
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<?php include 'contents/footer.php'?>

                
