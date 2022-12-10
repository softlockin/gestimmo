<?php
return [
  'database' => [
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'port' => '',
    'charset' => 'utf8mb4',
    'dbname' => 'gestimmodb1',
    'user' => 'root',
    'password' => ''
  ],
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'isInstalled' => true,
  'microtimeInternal' => 1670690261.680661,
  'passwordSalt' => 'e8c68b59ca126428',
  'cryptKey' => '17422288f900bca250cd8b31ffa4a69e',
  'hashSecretKey' => '0c4672a4aeacd0cb51b83dc9b40e22cb',
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '10.4.24'
];
