<?php
function getConnexion()
{
    $serveur = 'localhost';
    $nombd = 'suivistock';
    $user = 'root';
    $mdp = '';
    
    try {
        $db = new PDO('mysql:host='.$serveur.';dbname='.$nombd,$user,$mdp,
            [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
        echo "connexion etablie";
    } catch (PDOException $e)
    {
        echo "Erreur lors de la connexion à la BD ".$e->getMessage();
    }
}

?>