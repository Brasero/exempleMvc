<?php

function setNewUser($bdd, $user){
    $str = 'INSERT INTO user (nom, mail, mdp) VALUES (:nom, :mail, :mdp)';
    $query = $bdd->prepare($str);
    $query->bindValue(':nom', $user['nom'], PDO::PARAM_STR);
    $query->bindValue(':mail', $user['mail'], PDO::PARAM_STR);
    $query->bindValue(':mdp', $user['mdp'], PDO::PARAM_STR);

    if($query->execute()){
        return '<span>Enregistrement reussi</span>';
    }else{
        return '<span> Erreur lors de l\'inscription</span>';
    }
}

?>