<?php

/**
 * Retourne une connexion à la DB
 * 
 * @return PDO
 */

function getPDO(): PDO
{

  $servername = '127.0.0.1';
  $dbname = 'vue-php';
  $user = 'root';
  $pass = '';

  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass, [
    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
    // mode de requête par défaut => renvoit des tableaux associatifs
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);

  return $pdo;
}
