<?php
    require_once __DIR__ . "../../bootstrap.php";

    $newUserName = $argv[1];

    $user = new User();

    $user->setName($newUserName);

    $entityManager->persist($user);
    $entityManager->flush();

    echo "New username is: " . $user->getName() . PHP_EOL;
