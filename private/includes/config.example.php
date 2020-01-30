<?php

$config = [
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'myband',
    'DB_USER' => 'root',
    'DB_PASSWORD' => 'root',
    'ROOT' => dirname(dirname(__DIR__)),
    'PRIVATE' => dirname(__DIR__),
    'WEBROOT' => dirname(dirname(__DIR__)) . '/public',
    'BASE_URL' => 'SEC/DuckDuck/public'
];

return $config;
?>
