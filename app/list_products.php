<?php
    require_once __DIR__ . "../../bootstrap.php";

    $productRepository = $entityManager->getRepository('Product');
    $products = $productRepository->findAll();
    
    foreach ($products as $key => $product) {
        echo sprintf("$key.%s\n",$product->getName());
    }    

