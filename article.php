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
function displayArticle(Article $article)
{
    echo $article->getId() .' '. $article->getNom() .' '. $article->getDescription() . ' ' . $article->getPrix() . ' ' . $article->getImage() . ' ' . $article->getPoids() . ' ' . $article->getStock() .' ' . $article->getDisponible() . '<br>';
}
