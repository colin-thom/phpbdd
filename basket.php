<?php
include_once ("article.php");
global $articles; //import de la variable dans ce fichier

Function $basketTotal () {

$checked_article_key = $_POST["check"]; //récupération des index

    foreach ($checked_article_key as $article_key) {
        $article = $articles[$article_key];
        echo $article["name"];
        echo $article ["price"];
        echo $article ["image"];
    }
}


?>