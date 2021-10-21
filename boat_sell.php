<?php include 'contents/header.php';
include 'contents/menu.php';
$pdo = DB::getInstance()->getPDO();?>

    <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Rapport de vente de Bateau</h1>
            <br></br>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Rapport de vente 
                </div>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Date de recrutement</th>
                                <th>Fonction</th>

                            </tr>
                            </thead>

                            <tbody>
                            <tr>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include 'contents/footer.php'?>