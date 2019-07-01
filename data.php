<?php
const BR = "<BR>";
$db_info =[
    "username"=>"Qhve9YdhKG",
    "db_name"=>"Qhve9YdhKG",
    "password"=>"AvVYDL39iH",
    "server"=>"remotemysql.com",
    "port"=>"3306"
];

$connecton = new mysqli(
    $db_info['server'],
    $db_info['username'],
    $db_info['password'],
    $db_info['db_name'],
    $db_info['port']
);
