<?php
    //load libraries
    require 'vendor/autoload.php';

    //initialize the twig template
    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader, []);

    //get the json data
    $data = json_decode(file_get_contents("repp_products_test.json"), true);
    $products = $data['product_info'];
    $productOptions = $data['product_info']['options'];

    //render the twig template
    echo $twig->render('product.twig', ['products' => $products,'productOptions' => $productOptions]);
?>