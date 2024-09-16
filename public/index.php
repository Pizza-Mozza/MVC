<?php

// Controleur FRONTAL => ROUTER
// Toutes les requêtes des utilisateurs passent par ce fichier

require_once __DIR__ .'/../vendor/autoload.php';

// Configurer la connexion à la base de données
$dbConfig = require_once __DIR__ . '/../config/database.php';
$db = new PDO("mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']}",$dbConfig['user'], $dbConfig['password']);

// mise en place du routing
$route = $_GET['route'] ?? 'acceuil';
if ($route === "acceuil"){
    //Créer un objet AcceuilController
    $acceuilController = new App\Controllers\AcceuilController();
    $acceuilController->accueil();
} else {
    echo"Page non trouvée";
}