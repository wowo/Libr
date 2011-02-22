<?php

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony'            => __DIR__.'/../vendor/symfony/src',
    'Application'        => __DIR__.'/../src',
    'Doctrine\\Common'   => __DIR__.'/../vendor/doctrine-common/lib',
    'Doctrine\\DBAL'     => __DIR__.'/../vendor/doctrine-dbal/lib',
    'Doctrine'           => __DIR__.'/../vendor/doctrine/lib',
    'Assetic'            => __DIR__.'/../vendor/assetic/src',
    'Zend\\Log'          => __DIR__.'/../vendor/zend-log',
));
$loader->registerPrefixes(array(
    'Twig_Extensions_'   => __DIR__.'/../vendor/twig-extensions/lib',
    'Twig_'              => __DIR__.'/../vendor/twig/lib',
));
$loader->register();
