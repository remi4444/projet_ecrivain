

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="view/css/styles.css" type="text/css">


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body class="bg-dark">
    <header>
        <a id="bouton_connexion" class="btn btn-outline-warning " href="admin/indexAdmin.php">Connexion</a>
            <div id="titre_principal" class="jumbotron text-right">
                <p> <strong class="text-danger">Jean Forteroche</strong> vous presente son nouveau roman : </p>
                <p id="titre_roman" class="text-danger">Billet simple pour l'Alaska</p>
            </div>
    </header>
        
        <?= $content ?>
        
    </body>
        
</html>

