<?php
    require_once __DIR__ . "../../bootstrap.php";



    for ($i = 0; $i < 10; $i++) {
        $shop = new Shop(new Money);
        $shop->getCurrency();
        $entityManager->persist($shop);
    }
        $entityManager->flush();
    //$currencies = $entityManager->getRepository('Shop')->getCurrencies();
    //foreach ($currencies as $currency) {
        //$currency->getCurrency() . "\n";
    //}
    echo "Done";

