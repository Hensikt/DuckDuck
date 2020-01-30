<?php

$config = [
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'SEC',
    'DB_USER' => 'root',
    'DB_PASSWORD' => '',
    'ROOT' => dirname(dirname(__DIR__)),
    'PRIVATE' => dirname(__DIR__),
    'WEBROOT' => dirname(dirname(__DIR__)) . '/public',
    'BASE_URL' => '/DuckDuck/public'
];

return $config;
