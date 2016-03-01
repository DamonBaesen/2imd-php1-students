<?php
    session_start();
include_once("products.inc.php");
$id = $_GET['product'];
$product = $products[$id];
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<style>
    #inputfieldText
    {
        display: none;
    }

    body
    {
        background-color: lightskyblue;
    }
</style>
<a href="products.php">Go back</a>
<h1><?php echo $product['name']?></h1>
<img src="<?php echo $product['picture'] ?>" alt="">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" id="inputfieldText" name="idForm" value="<?php echo $id; ?>">
    <input type="submit" value="buy now" name="verzend">
</form>

</body>
</html>
<?php
if (isset($_POST['verzend'])) {
    if(!empty($_SESSION['cart'])){
        array_push($_SESSION['cart'], $product['name']);
    }
    else
    {
        $_SESSION['cart']= array();
        array_push($_SESSION['cart'], $product['name']);
    }
}
include_once("cart.inc.php"); ?>

