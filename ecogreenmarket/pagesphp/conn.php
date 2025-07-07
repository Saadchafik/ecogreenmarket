<?php 
function connexion(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=ecogreenmarketdb;charset=utf8', 'root', '');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

?>