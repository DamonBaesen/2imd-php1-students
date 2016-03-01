<?php
session_start();
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>
<style>
    body
    {
        background-color: lightskyblue;
    }
</style>
    <?php

    include_once("products.inc.php");
    foreach($products as $key => $p): ?>
        <h1><?php echo $p['name']?></h1>
        <img src="<?php echo $p['picture'] ?>" alt="">
        <a href="detail.php?product=<?php echo $key;?>" >more info</a>
    <?php endforeach;
    include_once('cart.inc.php');
    ?>
</body>
</html>