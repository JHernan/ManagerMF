<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

/**
 * @var $loader ClassLoader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

ini_set('xdebug.max_nesting_level', 500);

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
