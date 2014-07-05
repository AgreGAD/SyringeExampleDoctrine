<?php

use Syringe\Component\DI\Container;

require_once __DIR__.'/vendor/autoload.php';

$configListFile = __DIR__ . '/app/configuration_files.php';
$appConfigFile  = __DIR__ . '/app/runtime/appconfig.php';

// build configuration
$builderConfiguration = require __DIR__ . '/vendor/syringe/dependency-injection/Syringe/Component/DI/Builder/config.php';
(new Container($builderConfiguration))->get('container.configuration.builder')->run($configListFile, $appConfigFile);
