<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
include_once ("article.php"); //identique à include mais permet de ne pas utiliser le fichier 2x
global $articles;
?>

    <form method="POST" action="basket.php">

<?php
    foreach ($articles as $key => $article) { ?>
    <?php echo $article["name"];?> <br>
    <?php echo $article["price"];?> €<br>
    <?php echo $article["image"];?> <br>

    <input type="checkbox" name="check[]" value="<?php echo $key ?>">
        <!-- on utilise les [] car on veut soumettre un table de valeurs
            https://stackoverflow.com/questions/3314567/how-to-get-form-input-array-into-php-array
            https://www.php.net/manual/fr/faq.html.php : Comment créer un tableau dans une balise <form> HTML ?
         -->
    <br>

<?php
}
?>
     <br>

    <button type="submit">Ajouter au panier</button>

    </form>

</body>
</html>
