<?php
class Article{
    private $nom;
    private $description;
    private $prix;
    private $image;
    private $poids;
    private $stock;
    private $disponible;
    private $id;

    public function __construct($id, $nom, $description, $prix, $poids, $stock, $disponible,  $image){
        $this->nom=$nom;
        $this->description=$description;
        $this->prix=$prix;
        $this->poids=$poids;
        $this->stock=$stock;
        $this->disponible=$disponible;
        $this->id=$id;
        $this->image=$image;

    }
    public function getImage()
    {
        return $this->image;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function getPoids()
    {
        return $this->poids;
    }
    public function getDisponible()
    {
        return $this->disponible;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getStock()
    {
        return $this->stock;
    }
}

class Pantalon extends Article{
    private $taille;
    private $couleur;

    public function getTaille()
    {
        return $this->taille;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function __construct($id, $nom, $description, $prix, $poids, $stock, $disponible,$image, $taille,$couleur){
        parent::__construct($id, $nom, $description, $prix, $poids, $stock, $disponible,$image);
        $this->taille=$taille;
        $this->couleur=$couleur;
    }
}