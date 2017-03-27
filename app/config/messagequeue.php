<?php

return [
  'enabled' => false,
  'type' => 'none', // none, rabbitmq
  'rabbitmq' => [
    'host'=> 'localhost',
    'port'=> 5672,
    'username'=> 'guest',
    'password'=> 'guest',
    'vhost'=> '/',
    'exchange'=> 'learninglocker',
    'ssl_enabled'=> true,
    'ssl'=> [
      'cafile'=> '/etc/ssl/cert/somecert.pem',
      'verify_peer'=> true
    ]
  ],
  'message_includes' => ['id', 'lrs_id', 'client_id', 'statement', 'stored'], // False is include "all"
  'message_excludes' => false // False = no exclusions (same as empty array)
];