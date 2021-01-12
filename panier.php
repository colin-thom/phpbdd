<?php
include_once "catalogue.php";

class Panier
{
    private $panier = array();
    public function __construct($list_produit)
    {
        $this->panier = $list_produit;

    }

    public function getPanier()
    {
        return $this->panier;
    }

    public function diplay_panier()
    {
        foreach ($this->panier as $article) {
            echo $article['name'] . ' ' . $article['price'] . ' ' . $article['picture'] . ' ' . $article['weight'] .  ' ' . $article['quantity'] . ' ' . $article['available'] . '<br>';
        }
    }
}


