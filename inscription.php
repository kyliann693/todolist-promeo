<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>
            <link href="css/style-inscription.css" rel="stylesheet" type="text/css">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&family=Lato:wght@300&display=swap" rel="stylesheet">
            <title>Inscription</title>
        </head>
        <body>
        <header>
            <div id="navbar">
                <img src="img/logo-promeo.png" height="50" width="50">
                <h1>Promeo</h1>
                <a href="index.php" class="btn btn-danger btn-lg">Connexion</a>
            </div>
        </header>
        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> Mot de passe
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <form action="inscription_traitement.php" method="post">
                <h2 class="text-center">Inscription</h2>       
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="bouton">Inscription</button>
                </div>   
            </form>
        </div>
        <div id="rond">
            <a><div id="divider"></div></a>
            <div id="divider-3"></div>
            <div id="divider-4"></div>
            <div id="divider-6"></div>
        </div>
        <style>
            .alert-danger{
                background-color: darkred !important;
                color: #ffffff;
                width: 200px;
                text-align: center;
                padding: 15px;
                margin-left: auto;
                margin-right: auto;
                border: 2px solid #fff;
                border-radius: 10px;
            }
            .alert-success{
                background-color: #3fb42e;
                width: 200px;
                padding: 15px;
                text-align: center;
                margin-right: auto;
                margin-left: auto;
                border: 2px solid #fff;
                border-radius: 10px;
            }

        </style>
        <footer>
            <div id="footer-body">
                <p>©2021 - Kyliann-Aland</p>
            </div>
        </footer>
        </body>
</html>