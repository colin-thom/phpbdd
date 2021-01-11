<?php


class Panier
{
public $panier=array();
public function __construct($id_article)
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=php_bdd_query_playground', 'root', 'root');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $req = $bdd->query('SELECT * FROM order_product');
    while ($donnees = $req->fetch()) {
        if ($donnees['product_id'] == $id_article) {
            array_push($this->panier, $donnees);
        }
    }
}
    public function add($id_article){
        if ($id_article==$donnees['product_id'])
    }
}
$pa=new Panier(1);
var_dump($pa);