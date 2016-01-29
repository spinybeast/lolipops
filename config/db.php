<?php
$_fn = realpath(__DIR__ . "/../database") . "/illidiance.sqlite";

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlite:' . $_fn,
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
