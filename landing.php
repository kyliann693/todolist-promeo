<?php
session_start();
require_once 'config.php'; // ajout connexion bdd
if(!isset($_SESSION['user'])){
    header('Location:index.php');
    die();
}
// On récupere les données de l'utilisateur
$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
$req->execute(array($_SESSION['user']));
$data = $req->fetch();


if (isset($_POST['creer_tache'])) { // On vérifie que la variable POST existe
    if (empty($_POST['creer_tache'])) {  // On vérifie qu'elle as une valeure
        $erreurs = 'Aucune valeurs na était saisie';
    } else {
        $tache = $_POST['creer_tache'];
        $bdd->exec("INSERT INTO tache(tache) VALUES('$tache')"); // On insère la tâche dans la base de donnée
    }
}
if(isset($_GET['supprimer_tache'])) {
    $id = $_GET['supprimer_tache'];//Suppresion d'une tache
    $bdd->exec("DELETE FROM tache WHERE id=$id");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Promeo-projet</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&family=Lato:wght@300&display=swap" rel="stylesheet">
<body>

    <header>
        <div id="navbar">
            <img src="img/logo-promeo.png" height="50" width="50">
            <h1>Promeo</h1>
            <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
        </div>

    </header>


    <section id="tache-form">
        <div id="form">
            <div class="header">
                <h4 class="header_titre">Taches :</h4>
            </div>
            <form class="taches_input" method="post" action="landing.php">
                <input id="inserer" type="text" name="creer_tache"/><br>
                <button id="envoyer">Créer</button>
            </form>
            <table class="taches">
                <div id="title-taches">
                    <tr>
                        <th>N</th>
                        <th>Nom</th>
                        <th>Action</th>
                    </tr>
                </div>
                <div id="divider"></div>
                <?php // suppresion d'une tache
                $reponse = $bdd->query('Select * from tache'); // On récupére les tâches
                while ($taches = $reponse->fetch()) {
                    ?>
                    <tr>
                        <td><?php echo $taches['id'] ?></td><!--Numéro de l'id-->
                        <td><?php echo $taches['tache'] ?></td> <!--Affichage des valeurs récuperer-->
                        <td><a class="suppr" href="landing.php?supprimer_tache=<?php echo $taches['id'] ?>"> <img src="https://img.icons8.com/material-outlined/24/000000/delete-trash.png"/></a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </section>


    <footer>
        <div id="footer-part-1">
            <div id="footer">

            </div>
        </div>
    </footer>



</body>
</html>