<?php
    require_once("./traitement/connexionDb.php");

    $bdd = connexionBdd();

    /* récupère tous les projets */
    $query = $bdd->query('SELECT * FROM projet');
    $requprojet = $query->fetchAll();
    if (isset($_GET['id'])){
        $get_id = $_GET['id'];
        $requprojetid = $bdd->prepare('SELECT * FROM projet WHERE idProjet = ?');
        $requprojetid->execute(array($get_id));
        $requprojetid=$requprojetid->fetch();
    }