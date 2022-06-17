<?php
include('../model/config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple MVC</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php?page=connexion">Connexion</a>
            <a href="index.php?page=inscription">Inscription</a>
        </nav>
    </header>

    <div id="test"></div>
    <?php
        if(isset($_GET['page'])){
            switch($_GET['page']){
                case 'connexion':
                    include('../vue/connexion.php');
                    break;
                
                case 'inscription':
                    include('../vue/inscription.php');
                    break;

                default:
                    include('../vue/accueil.php');
            }
        } else {
            include('../vue/accueil.php');
        }

    ?>

<script type='text/javascript' src="./assets/js/test.js"></script>
</body>
</html>