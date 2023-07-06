<?php

namespace App\Helper;
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once dirname(dirname(__DIR__)) . "/vendor/autoload.php";


class EntityManagerFactory
{
    // Create a simple "default" Doctrine ORM configuration for Attributes
    public static function getEntityManager()
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: array(dirname(__DIR__)."/Entity"),
            isDevMode: true,
        );


        // configuring the database connection
        $connection = DriverManager::getConnection([
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/var/data/db.sqlite',
        ], $config);

        // obtaining the entity manager
        $entityManager = new EntityManager($connection, $config);
        return $entityManager;
    }
}
