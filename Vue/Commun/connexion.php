<?php

require_once 'Modele/modele.php';

function getLogin($login){
    try {
    $bdd= connexionBdd();
    $requete = $bdd->prepare("select login from Utilisateurs");
    $requete->bindParam(":login", $login);
    $requete->execute() or die(print_r($requete->errorInfo()));
    $nbLigne = $requete->rowCount();
    
    if ($nbLigne == 0) {
        $nomLogin = "pas de login correspondant";
    }
    if ($nbLigne == 1){
        $nomLogin = $requete->fetchColumn(0);
    }
    if($nbLigne > 1){
        $nomLogin = "";
        while($ligne = $requete->fetch()){
            $nomLogin = $nomLogin. "<br/>" . $ligne['nomLogin'];
        }
    }
    $requete->closeCursor();
    return $nomLogin;
}catch (PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
}
?>