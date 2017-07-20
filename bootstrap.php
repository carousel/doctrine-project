<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$env = require_once ".env.php";
require_once "vendor/autoload.php";

$isDevMode = true;

if ($env['dbdriver'] == 'pdo_sqlite') {
    $conn = [
        'driver' => $env['dbdriver'],
        'path'   => $env['dbpath']
    ];
} else {
    $conn = [
        'dbname' => $env['dbname'],
        'user' => $env['dbuser'],
        'password' => $env['dbpassword'],
        'host' => $env['dbhost'],
        'driver' => $env['dbdriver']
    ];
}

$config = Setup::createAnnotationMetadataConfiguration([__DIR__ . "/src"], $isDevMode);

$entityManager = EntityManager::create($conn, $config);
