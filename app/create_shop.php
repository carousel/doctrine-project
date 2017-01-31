<?php
    require_once __DIR__ . "../../bootstrap.php";


    $shop = new Shop(new Money);

    $shop->getCurrency();

    $entityManager->persist($shop);
    $entityManager->flush();

