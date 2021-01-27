
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<?php
include_once "article.php";
include_once "function.php";

class Catalogue
{
    public $catalogue = array();

    public function __construct()
    {
        try {
            $bdd = new PDO('mysql:host=127.0.0.1;dbname=thomas_db', 'thomas', 'vx3wcejfb');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $req = $bdd->query('SELECT * from products');
        while ($donnees = $req->fetch()) {
            if ($donnees['category_id'] != 2) {
                $art = new Article($donnees['id'], $donnees['name'], $donnees['description'], $donnees['price'], $donnees['picture'], $donnees['weight'], $donnees['quantity'], $donnees['available']);
                array_push($this->catalogue, $art);
            } else {
                $art = new Pantalon($donnees['id'], $donnees['name'], $donnees['description'], $donnees['price'], $donnees['picture'], $donnees['weight'], $donnees['quantity'], $donnees['available'], $donnees['length'], $donnees['color']);
                array_push($this->catalogue, $art);
            }
        }
    }

    public function displayCat()
    {var_dump($this->catalogue);
        foreach ($this->catalogue as $article) {
            ?>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    <?php displayArticle($article); ?>
                </label>
            </div>

<?php
        }
    }
}

?>
</body>
</html>

