<?php

include('../controller/function.php');
include('../model/inscriptionModel.php');

/**
 * Créer un nouvel utilisateur en base de données
 *
 * @param PDO $bdd
 * @param array $array
 * @return void
 */
function newUser($bdd, $array){
    $user['nom'] = strip_tags($array['nom']);
    $user['mail'] = strip_tags($array['mail']);
    $user['mdp'] = password_hash($array['mdp'], PASSWORD_BCRYPT);

    $retour = setNewUser($bdd, $user);

    return $retour;
}


?>