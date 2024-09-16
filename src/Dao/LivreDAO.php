<?php

namespace App\Dao;

class LivreDAO
{
    private \PDO $db;


    // Envoyer la requête "SELECT * FROM Livre"
    // Retourner les enregistrements sous la forme d'un tableau d'objets de la classe Livre
    /**
     * @param \PDO $db
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function selectAll() : array {
        $this->db->query("SELECT * FROM livre");
        $livresBD = $requete->fetchAll(\PDO::FETCH_ASSOC);
        // Mapping relationnel vers objet
        $livres = [];

        return $livres;
    }

}