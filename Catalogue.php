<?php
include_once "article.php";
include_once "function.php";

class Catalogue
{
    public $catalogue=array();
    public function __construct(){
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=php_bdd_query_playground', 'root', 'root');
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        $req=$bdd->query('SELECT * from products');
        while ($donnees=$req->fetch()){
            if($donnees['category_id']!=2){
                $art=new Article($donnees['id'], $donnees['name'], $donnees['description'], $donnees['price'], $donnees['picture'], $donnees['weight'], $donnees['quantity'], $donnees['available']);
                array_push($this->catalogue, $art);
            }
            else{
                $art=new Pantalon($donnees['id'], $donnees['name'], $donnees['description'], $donnees['price'], $donnees['picture'], $donnees['weight'], $donnees['quantity'], $donnees['available'], $donnees['length'], $donnees['color']);
                array_push($this->catalogue, $art);
            }
        }
    }
    public function displayCat(){
        foreach($this->catalogue as $article){
           displayArticle($article);
        }
    }
}
$jojo= new Catalogue;
$jojo->displayCat();
