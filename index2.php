<?php include 'contents/header.php';
    include 'contents/menu.php';
?>
<div id="layoutSidenav_content">
                <div class=dateFR>
                <!-- DATE -->
                    <?php function date_fr ($njour=0){

                        $timestamp=time() + $njour*0*3600;
                        $semaine = array(" Dimanche "," Lundi "," Mardi "," Mercredi "," Jeudi ","Vendredi "," Samedi ");
                        $mois = array(1=>" Janvier "," Février "," Mars "," Avril "," Mai "," Juin "," Juillet "," Aout "," Septembre "," Octobre "," Novembre "," Décembre ");
                        $chdate = $semaine[date('w',$timestamp)]." ".date('j',$timestamp)." ".$mois[date('n',$timestamp)];
                        return $chdate.date('Y');
                    }
                        echo date_fr(20);
                    ?>
                    </div>
                    <div class='imgNM'>
                        <img src="img/img_north_marina.png">
                    </div>
                    <div class='PHAC'>
                        <h1> Bienvenue Moussaillons </h1>
                    </div>

                    <main>
                        <div class="container-fluid">
                            <div class="row">
                                 <div class="col-xl-3 col-md-6">
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    Top 3 des salariés de la Semaine
                                </div>
                                <?php

                                $sql = 'SELECT nom,prenom, COUNT(*),commentaire,tel 
                                FROM employes
                                INNER JOIN peche ON peche.id_client = employes.id
                                GROUP BY id_client
                                ORDER BY COUNT(*) DESC
                                LIMIT 3';
                                ?>


                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Nombre de Run</th>
                                                <th>Commentaire</th>
                                                <th>Téléphone</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $pdo = DB::getInstance()->getPDO();
                                        foreach($pdo->query($sql) as $row){?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['nom']."</p>";?></td>
                                                <td><?php echo $row['prenom']."</p>";?></td>
                                                <td><?php echo $row['COUNT(*)']."</p>";?></td>
                                                <td><?php echo $row['commentaire']."</p>";?></td>
                                                <td><?php echo $row['tel']."</p>";}?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>


<?php include 'contents/footer.php'?>