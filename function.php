<?php
include_once "article.php";


function displayArticle(Article $article)
{
    if (($article instanceof Pantalon)==true){
        echo $article->getId() .' '. $article->getNom() .' '. $article->getDescription() . ' ' . $article->getPrix() . ' ' .
            $article->getImage() . ' ' . $article->getPoids() . ' ' . $article->getStock() .' ' . $article->getDisponible() . ' ' .
            $article->getCouleur() . ' ' . $article->getTaille() . '<br>';
    }
    else{
            echo $article->getId() .' '. $article->getNom() .' '. $article->getDescription() . ' ' . $article->getPrix() . ' ' .
                $article->getImage() . ' ' . $article->getPoids() . ' ' . $article->getStock() .' ' . $article->getDisponible() . '<br>';
    }
}

function displayClient(Client $client){
    echo $client->getId() . ' ' . $client->getFirstName() . ' ' . $client->getLastName() . ' ' . $client->getAdress() . ' ' .
        $client->getZip() . ' ' . $client->getCity() . '<br>';
}