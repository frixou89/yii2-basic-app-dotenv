<?php
return [
    'class' => 'yii\db\Connection',
    'dsn' => getenv('MYSQL_DSN'),
    'username' => getenv('MYSQL_USERNAME'),
    'password' => getenv('MYSQL_PASSWORD'),
    'charset' => 'utf8',
];
