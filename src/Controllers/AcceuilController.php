<?php
namespace App\Controllers;

class AcceuilController
{
    //Méthode permettant de géré la page d'acceuil
    public function accueil() {
        //Fait appel au modèle afin de récupérer les données dans la BDD

        //Fait appel à la vue afin de renvoyer la page
        require_once __DIR__ . "/../../views/acceuil/acceuil.php";
    }
}