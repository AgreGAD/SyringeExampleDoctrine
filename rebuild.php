<?php

use Syringe\Component\DI\Builder\SyringeBuilder;

require_once __DIR__.'/vendor/autoload.php';

$configFile = __DIR__ . '/config/config.yml';
$output     = __DIR__ . '/config/appconfig.php';

// build configuration
SyringeBuilder::build($configFile, $output);
