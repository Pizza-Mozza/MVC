<?php

namespace App\Entity;

// Cette classe représente une entité (table liée dans la BDD)
class Livre
{
    private int $id;
    private string $titre;
    private string $auteur
    private int $nbPages;/**
 * @return int
 */
public function getId()
{
    return $this->id;
}/**
 * @param int $id
 */
public function setId($id)
{
    $this->id = $id;
}/**
 * @return string
 */
public function getTitre()
{
    return $this->titre;
}/**
 * @param string $titre
 */
public function setTitre($titre)
{
    $this->titre = $titre;
}/**
 * @return string
 */
public function getAuteur()
{
    return $this->auteur;
}/**
 * @param string $auteur
 */
public function setAuteur($auteur)
{
    $this->auteur = $auteur;
}/**
 * @return int
 */
public function getNbPages()
{
    return $this->nbPages;
}/**
 * @param int $nbPages
 */
public function setNbPages($nbPages)
{
    $this->nbPages = $nbPages;
}


}