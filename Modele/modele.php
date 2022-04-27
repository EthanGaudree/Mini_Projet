<?php

require_once 'config.inc.php';

class Modele {

    protected $_bdd;

    public function connexionBdd() {
        try {

            $pdoOptions = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $this->_bdd = new PDO('mysql:host=' . SERVEURBD . ';dbname=' .
                    NOMDELABASE, LOGIN, MOTDEPASSE, $pdoOptions);
            //echo 'BDD ouverte';
        } catch (PDOException $exc) {
            die('<br />Pb connexion serveur BD : ' . $exc->getMessage());
        }
    }

  
}