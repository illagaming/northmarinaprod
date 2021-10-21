<?php include 'contents/header.php';
    include 'contents/menu.php';?>
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
	                                            <th>Prendre son service</th>
	                                        </tr>
	                                    </thead>
	                                    <?php $sql = 'SELECT id, nom, prenom FROM employes where service = 0';?>
	                                    <tbody>
	                                        <tr>
	                                            <td>
	                                            	<select name="service" id="service">
	                                                	<?php foreach($pdo->query($sql) as $value){?>
													    <option value="<?php echo $value['id'];?>">
													        <?php echo $value['nom']."</p>";?>
													        <?php echo $value['prenom']."</p>";?>
													    </option>
													    <?php } ?>
													</select>
												</td>
	                                            <td><input type="submit" class="btn btn-primary" name="button" value="Avec plaisir"></td>
	                                        </tr>           
	                                    </tbody>
	                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                             <div class="col-xl-3 col-md-6">
                            </div>
                        </div>
                       <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                En service
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Heure de début</th>
                                                <th>Fin de service</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql2 = 'SELECT id, MAX(id_service) , nom, prenom, DATE_FORMAT(date_service,"%d/%m/%Y"), DATE_FORMAT(heure_service,"%i:%s") FROM service INNER JOIN employes ON employes.id = id_employes WHERE employes.service = "1" GROUP BY id_employes';
                                            foreach($pdo->query($sql2) as $donnees){
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $donnees['nom'];?>
                                                </td>
                                                <td>
                                                    <?php echo $donnees['prenom'];?>
                                                </td>
                                                <td>
                                                    <?php echo $donnees['DATE_FORMAT(date_service,"%d/%m/%Y")'];?>
                                                    <?php echo $donnees['DATE_FORMAT(heure_service,"%i:%s")'];?>
                                                </td>
                                                <td>
                                                    <a href="end_service.php?id=<?php echo $donnees['id'];?> type="submit" class="btn btn-primary" name="button" ">Bon Travail !</a>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<?php include 'contents/footer.php'?>