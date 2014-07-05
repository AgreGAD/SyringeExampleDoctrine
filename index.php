<?php

use Syringe\Component\DI\Container;

require_once __DIR__.'/vendor/autoload.php';

$container = new Container(require __DIR__ . '/app/runtime/appconfig.php');

$doctrine   = $container->get('doctrine');
$connection = $container->get('db_connection');
