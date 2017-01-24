<?php
    require_once __DIR__ . "/../bootstrap.php";

    $newProductName = $argv[1];

    $product = new Product;

    $product->setName($newProductName);

    $entityManager->persist($product);
    $entityManager->flush();

    echo "Product name is: " . $product->getName() . PHP_EOL;
