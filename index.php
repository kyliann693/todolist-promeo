<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>
            <link type="text/css" rel="stylesheet" href="css/style-connexion.css">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&family=Lato:wght@300&display=swap" rel="stylesheet">
            <title>Connexion</title>
        </head>
        <body>
        <header>
            <div id="navbar">
                <img src="img/logo-promeo.png" height="50" width="50">
                <h1>Promeo</h1>
            </div>
        </header>
        
        <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <p><strong>Erreur</strong> mot de passe incorrect</p>
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?>
        </div>
        <section>
                <div id="formulaire">
                    <div id="form">
                        <form action="connexion.php" method="post">
                            <h2 class="text-center">Connexion</h2>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="bouton">Connexion</button>
                            </div>
                        </form>
                        <div id="a-inscription">
                            <a href="inscription.php">Inscription</a>
                        </div>
                    </div>
                </div>
            <div id="rond">
                <a><div id="divider"></div></a>
                <div id="divider-3"></div>
                <div id="divider-4"></div>
                <div id="divider-6"></div>
            </div>

        </section>
        <style>
            .login-form {
                width: 340px;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                border-radius: 2px;
            }
            .btn {
                font-size: 15px;
                font-weight: bold;
            }
            .alert-danger{
                background-color: darkred;
                color: #ffffff;
                height: 35px;
                width: 200px;
                text-align: center;
                border: 2px solid #ffffff;
                border-radius: 5px;
                margin-left: 10%;
            }
        </style>
        <footer>
            <div id="footer-body">
                <p>©2021 - Kyliann-Aland</p>
            </div>
        </footer>
        </body>
</html>