<?php include "contents/header.php" ?>
    <body class="bg-primary">
    <?php
    require('config.php');
    session_start();

    if (isset($_POST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['username'] = $username;
            header("Location: index.php");
        }else{
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }
    }
    ?>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Page de connexion</h3></div>
                                    <div class="card-body">
                                        <form class="box" action="" method="post" name="login">
                                            <?php if (! empty($message)) { ?>
                                                <p class="errorMessage" style="color: #ff0000"><?php echo $message; ?></p>
                                            <?php } ?>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Identifiant</label>
                                                <input type="text" class="form-control py-4" id="inputEmailAddress" name="username" placeholder="Nom d'utilisateur" />
                                                <!--<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">-->
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Mot de passe</label>
                                                <input type="password" class="form-control py-4" id="inputPassword" name="password" placeholder="Mot de passe" />
                                                <!--<input type="password" class="box-input" name="password" placeholder="Mot de passe">-->
                                            </div>
                                             <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Se souvenir de moi</label>
                                                </div>
                                            </div>
                                             <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">

                                                <a class="small" href="password.html">Mot de passe oublié ?</a>
                                                <input class="btn btn-primary" type="submit" value="Connexion " name="submit" class="box-button">
                                                <!--<a class="btn btn-primary" href="index.html">Login</a>-->
                                            </div>
                                            <p class="box-register" style="margin-top: 20px; margin-bottom: 0px;">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>

                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

<?php include 'contents/footer.php'?>
