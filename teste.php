<?php

use Alura\Doctrine\Helper\EntityManagerFactory;
require_once __DIR__ . '/vendor/autoload.php';

$entityManagerFactor = new EntityManagerFactory();
$entityManager = $entityManagerFactor->getEntityManager();

var_dump($entityManager->getConnection());