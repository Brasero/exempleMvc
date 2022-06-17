<?php
include('../controller/inscriptionController.php');
if(persoIsset($_POST)){
    $retour = newUser($bdd, $_POST);
    echo $retour;
} else {
    echo 'Merci de remplir tout les champs';
}
?>




<form action="" method="POST">
    <input type="text" name="nom" id="">
    <input type="text" name="mail" id="">
    <input type="password" name="mdp" id="">
    <input type="submit" value="S'inscrire">
</form>