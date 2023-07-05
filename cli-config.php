<?php
use App\Helper\EntityManagerFactory;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

// replace with file to your own project bootstrap
require_once __DIR__ . '/vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$enityManagerFactory = new EntityManagerFactory();
$entityManager = $enityManagerFactory->GetEntityManager();

return ConsoleRunner::run(new SingleManagerProvider($entityManager, ));