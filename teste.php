<?php
use App\Helper\EntityManagerFactory;

require_once __DIR__ . '/vendor/autoload.php';

$enityManagerFactory = new EntityManagerFactory();
$enityManager = $enityManagerFactory->getEntityManager();

var_dump($enityManager);