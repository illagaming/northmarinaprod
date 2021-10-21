<?= session_start(); ?>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="accueil2.php">North Marina</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Rechercher..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div> -->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="deco.php">Déconnexion</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Bienvenue !</div>
                            <a class="nav-link" href="index2.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-door-open"></i></div>
                                Accueil
                            </a> <div class="sb-sidenav-menu-heading">Informations</div>
                            <a class="nav-link" href="presence.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-anchor"></i></div>
                                Prise/Fin de service
                            </a>
                            <!--
                            <a class="nav-link" href="service.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-ship"></i></div>
                                Choix Véhicules
                            </a>
                            -->
                            <a class="nav-link" href="addrun.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-fish"></i></div>
                                Ajouter un Trajets
                            </a>

                            <!----------------------------------------------->

                            <?php

                            ?>

                            <div class="sb-sidenav-menu-heading">Administration</div>
                            <a class="nav-link" href="accueil2.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="run.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-pencil-ruler"></i></div>
                                Trajets
                            </a>
                            <a class="nav-link" href="addemploye.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                                Ajouter un employé
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                                Ressources humaines
                            </a>
                            <a class="nav-link" href="service_report.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-envelope"></i></div>
                                Rapport de Service
                            </a>
                            <!--
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-money-bill"></i></div>
                                Rapport de vente Bateaux
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-money-bill"></i></div>
                                Rapport vente Matériel
                            </a> 
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-id-badge"></i></div>
                                Rapport permit Bateau
                            </a>
                            -->
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Connecté en tant que :</div>
                        <?php include 'DB.php';?>
                    </div>
                </nav>
            </div>