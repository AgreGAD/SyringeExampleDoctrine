<?php return array (
  'parameters' => 
  array (
    'doctrine.configuration_paths' => 
    array (
      0 => 'app/config/doctrine',
    ),
    'doctrine.db_parameters' => 
    array (
      'driver' => 'pdo_mysql',
      'user' => 'root',
      'password' => '1234',
      'dbname' => 'game',
      'charset' => 'UTF8',
    ),
  ),
  'services' => 
  array (
    'doctrine.setup_configuration' => 
    array (
      'factoryStaticMethod' => 
      array (
        0 => 'Doctrine\\ORM\\Tools\\Setup',
        1 => 'createAnnotationMetadataConfiguration',
      ),
      'arguments' => 
      array (
        0 => 
        array (
          0 => 'app/config/doctrine',
        ),
      ),
    ),
    'doctrine.entity_manager' => 
    array (
      'factoryStaticMethod' => 
      array (
        0 => 'Doctrine\\ORM\\EntityManager',
        1 => 'create',
      ),
      'arguments' => 
      array (
        0 => 
        array (
          'driver' => 'pdo_mysql',
          'user' => 'root',
          'password' => '1234',
          'dbname' => 'game',
          'charset' => 'UTF8',
        ),
        1 => '@doctrine.setup_configuration',
      ),
      'alias' => 'doctrine',
    ),
    'doctrine.connection' => 
    array (
      'factoryMethod' => 
      array (
        0 => '@doctrine.entity_manager',
        1 => 'getConnection',
      ),
      'alias' => 'db_connection',
    ),
  ),
  'aliases' => 
  array (
    'doctrine' => 'doctrine.entity_manager',
    'db_connection' => 'doctrine.connection',
  ),
  'tags' => 
  array (
  ),
);