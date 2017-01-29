<?php
    require_once __DIR__ . "../../bootstrap.php";


    //$message = new Message;

    $messages = $entityManager->getRepository('Message')->getMessages();
    foreach ($messages as $message) {
        echo $message->getTitle() . "\n";
            //$query->setMaxResults($number);
    }
    //echo $repo->id;
    //$user = $entityManager->find("User", 4);
    //$message->sendMessageToUser('Confirmation','Your flight is confirmed',$user);

    //$entityManager->persist($message);
    //$entityManager->flush();

    //echo "Your message has been sent to user" . PHP_EOL;
