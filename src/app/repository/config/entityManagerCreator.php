<?php

namespace Projeto\SistemaLogin\App\Repository\Config;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator
{
    
    // Configura acesso ao banco de dados.
    public static function createEntityManager():EntityManager
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            [__DIR__."/../.."]
        );    

        $conn = [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . './../database/photo-galery.sqlite',
        ];

        return EntityManager::create($conn, $config);
    }
}

