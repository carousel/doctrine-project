
<?php
    require_once __DIR__ . "../../bootstrap.php";

    $id = $argv[1];
    $product = $entityManager->find('Product',$id);
    if($product == NULL){
        echo 'No product found' . PHP_EOL;
        exit(1);
    }
    
    echo sprintf("Produce name is %s",$product->getName() . PHP_EOL);

