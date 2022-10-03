<?php

// Arquivo de configuração.

require __DIR__ . '../../vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;
use Projeto\SistemaLogin\App\Repository\Config\EntityManagerCreator;

$entityManager = EntityManagerCreator::createEntityManager();

ConsoleRunner::run(
    new SingleManagerProvider($entityManager)
);

