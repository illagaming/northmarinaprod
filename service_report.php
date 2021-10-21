<?php
    include 'contents/header.php';
    include 'contents/menu.php'; ?>
	<div id="layoutSidenav_content">
                <main>
                	<div class="container-fluid">
                        <h1 class="mt-4">Service</h1>
                        <br></br>
                        <div class="row">
                             <div class="col-xl-3 col-md-6">
                            </div>
                        </div>
                       <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Prise de Service
                            </div>
                        <?php
                            $pdo = DB::getInstance()->getPDO();
                        ?>
                        <div class="card-body">
                            <div class="table-responsive">
                            	<form action="enservice.php" method="post">
	                                <table class="table table-bordered" width="100%" cellspacing="0">
	                                    <thead>
	                                        <tr>
	                                            <th>Nom et Prénom</th>
	                                            <th>Début de Service</th>
                                                <th>Fin de Service</th>
	                                        </tr>
	                                    </thead>
	                                    <?php $sql = 'SELECT nom, prenom, id, date_service, date_fin_service, heure_service, heure_fin_service, id_employes FROM service INNER JOIN employes ON employes.id = service.id_employes';
                                        foreach ($pdo->query($sql) as $row){
                                        ?>
	                                    <tbody>
	                                        <tr>
                                                <td><?php echo $row['nom'] ;?>
                                                    <?php echo $row['prenom'] ;?>
                                                </td>
                                                <td>
                                                    <?php echo $row['date_service'];?>
                                                    <?php echo $row['heure_service'];?>
                                                </td>
                                                <td>
                                                    <?php echo $row['date_fin_service'];?>
                                                    <?php echo $row['heure_fin_service']."</p>";?>
                                                </td>
	                                        </tr>
	                                        <?php } ?>
	                                    </tbody>
	                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                             <div class="col-xl-3 col-md-6"></div>
                        </div>
                    </div>
                </main>

<?php include 'contents/footer.php';?>