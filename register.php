<?php include "contents/header.php" ?>
    <body class="bg-primary">
    <?php
    require('config.php');
    if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
        // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);
        // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        //requéte SQL + mot de passe crypté
        $query = "INSERT into `users` (username, email, password)
              VALUES ('$username', '$email', '".hash('sha256', $password)."')";
        // Exécute la requête sur la base de données
        $res = mysqli_query($conn, $query);
        if (isset($res)){
            header("Location: login.php");
        }
    }
    ?>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Créer un compte</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Nom d'utilisateur</label>
                                                        <input type="text" class="form-control py-4" name="username" placeholder="Nom d'utilisateur" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>

                                                <input type="text" class="form-control py-4" name="email" aria-describedby="emailHelp" placeholder="Entrer votre adresse email" required />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Mot de passe</label>

                                                        <input type="password" class="form-control py-4" name="password" placeholder="Entrer votre Mot de Passe" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirmer le mot de passe</label>
                                                        <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirmer votre mot de passe" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><input type="submit" name="submit" value="Créer un compte" class="btn btn-primary btn-block" /></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Vous avez déjà un compte ? Se connecter</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
<?php include 'contents/footer.php'; ?>
