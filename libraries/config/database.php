<?php

/**
 *  Retourne une connexion à la DB
 * 
 *  @return PDO
 * 
 * 
 */

 function getPDO () {
    $servername = 'localhost';
    $dbname = 'vue-php';
    $user = 'root';
    $pass = '';


    $pdo = new PDO("mysql:host=$servername;dbname=$dbname",
    $user,$pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // Mode de requête par défaut => renvoit des tableaux associatifs
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    return $pdo;
 }