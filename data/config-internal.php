<?php
return [
  'database' => [
    'driver' => 'pdo_mysql',
    'host' => 'remotemysql.com',
    'port' => '',
    'charset' => 'utf8mb4',
    'dbname' => 'BnzOhX3Ggy',
    'user' => 'BnzOhX3Ggy',
    'password' => 'l3COEYktAC'
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
  'isInstalled' => false,
  'microtimeInternal' => 1670705831.755677,
  'passwordSalt' => '2e69edbea112d6a6',
  'cryptKey' => '7a06cbe486f2eb500c5a5d041ae5f894',
  'hashSecretKey' => 'fcb1f59e48ab70e2cde671360fdb8971'
];
