<?php

namespace App\Helper;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory {
    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    public function getEntityManager(): EntityManagerInterface {
        $rootDir = __DIR__. '/../..';
        $dbParams = [
            'driver' => 'pdo_sqlite',
            'path' => $rootDir . '/var/data/banco.sqlite',
        ];
        $config = ORMSetup::createAttributeMetadataConfiguration([$rootDir . '/src'], true);
        $connection = DriverManager::getConnection($dbParams, $config);
        $entityManager = new EntityManager($connection, $config);
        return $entityManager;
        //return $rootDir;
        //$config = Setup::createAnnotationMetadataConfiguration([$rootDir . '/src'], true);
    }
}