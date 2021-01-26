<?php
require_once 'panier.php';
try {
    $bdd = new PDO('mysql:host=localhost;dbname=thomas_db', 'thomas', 'vx3wcejfb');
} catch (PDOException $e) {
    echo $e->getMessage();
}
$req = $bdd->prepare('SELECT * FROM order_product INNER JOIN products ON order_product.product_id=products.id WHERE order_product.order_id="' . $_POST["order_id"] . '"');
$req->execute();
$products = $req->fetchAll(PDO::FETCH_ASSOC);
$panier = new Panier($products);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<?php
$panier->diplay_panier();
?>

</body>
</html>

