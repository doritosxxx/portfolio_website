<?php
const BR = "<BR>";
$db_info =[
    "username"=>"",
    "db_name"=>"",
    "password"=>"",
    "server"=>"",
    "port"=>"3306"
    // Данные не актуальны.
];

$db = new mysqli(
    $db_info['server'],
    $db_info['username'],
    $db_info['password'],
    $db_info['db_name'],
    $db_info['port']
);
