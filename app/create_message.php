<?php
    require_once __DIR__ . "../../bootstrap.php";

    $messageTitle = 'Invitation';

    $message = new Message($messageTitle);

    for ($i = 0; $i < 10; $i++) {
        $message->setTitle($messageTitle);
    }

    $entityManager->persist($message);
    $entityManager->flush();

