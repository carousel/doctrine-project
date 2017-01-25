<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration([__DIR__ . "/src"],$isDevMode);

$conn = [
    'dbname' => 'doctrine',
    'user' => 'root',
    'password' => 'bumerang',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
    //'driver' => "pdo_sqlite",
    //'driver' => "mysql",
    //'path'   => __DIR__ . "/db.sqlite"
];

$entityManager = EntityManager::create($conn,$config);
