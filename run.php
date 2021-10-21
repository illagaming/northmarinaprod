<?php include 'contents/header.php';
    include 'contents/menu.php';?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Liste Trajets</h1>
                        <br></br>
                        <div class="row">
                             <div class="col-xl-3 col-md-6">
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Trajets
                            </div>
                            <?php
                            $pdo = DB::getInstance()->getPDO();
                            $sql = 'SELECT nom, prenom, poisson_peche, poisson_coffre, DATE_FORMAT(date2,"%d/%m/%Y"),
                            DATE_FORMAT(heure,"%i:%s")
                            FROM peche 
                            INNER JOIN employes ON employes.id = peche.id_client';
                            ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Total poissons péchés</th>
                                                <th>Total poissons coffre</th>
                                                <th>Horodateur</th>  
                                            </tr>
                                        </thead>
                                        <?php foreach($pdo->query($sql) as $row){?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['nom']."</p>";?></td>
                                                <td><?php echo $row['prenom']."</p>";?></td> 
                                                <td><?php echo $row['poisson_peche']."</p>";?></td>
                                                <td><?php echo $row['poisson_coffre']."</p>";?></td>
                                                <td><?php echo $row['DATE_FORMAT(date2,"%d/%m/%Y")']." ";
                                                echo $row['DATE_FORMAT(heure,"%i:%s")']."<p>";}?></td>
                                            </tr>      
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
<?php include 'contents/footer.php';?>
