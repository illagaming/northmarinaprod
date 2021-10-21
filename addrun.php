<?php include 'contents/header.php';
    include 'contents/menu.php';?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Ajouter un trajet</h1>
                        <br></br>
                        <div class="row">
                             <div class="col-xl-3 col-md-6">
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-fish"></i>
                                Trajets
                            </div>
                            <?php $pdo = DB::getInstance()->getPDO();
                            $select = 'SELECT id, nom, prenom FROM employes';
                            ?>
                            <div class="card-body">
                            <form action="peche.php" method="post">
                                <label for="id_client">Nom et Prénom : </label>
                                <select name="id_client" id="id_client">
                                    <?php foreach($pdo->query($select) as $value){?>
                                    <option value="<?php echo $value['id'];?>">
                                        <?php echo $value['nom']."</p>";?>
                                        <?php echo $value['prenom']."</p>";?>
                                    </option>
                                    <?php } ?>
                                </select> 
                                </br>
                                <label for="poisson_peche">Total poissons péchés : </label>
                                <input type="text" name="poisson_peche" id="poisson_peche" required>
                                </br>
                                <label for="poisson_coffre">Total poissons péchés : </label>
                                <input type="text" name="poisson_coffre" id="poisson_coffre">
                                </br>
                                <input type="submit" name="button" class="btn btn-primary" value="Envoyer"> 
                            </form>
                            <div class="card-body">
                                <div class="table-responsive"></div> 
                            </div>
                        </div>
                        </div>
                    </div>
                </main>
                
<?php include 'contents/footer.php'?>
