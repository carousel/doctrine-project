<?php
    require_once __DIR__ . "/../bootstrap.php";

    $id = $argv[1];
    $newProductName = $argv[2];

    $product = $entityManager->find('Product',$id);
    if($product == NULL){
        echo 'No product found' . PHP_EOL;
        exit(1);
    }
    $product->setName($newProductName);
    $entityManager->flush();
    

