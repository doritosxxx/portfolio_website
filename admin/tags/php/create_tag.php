<?php
session_start();
if(!$_SESSION['admin']){
    echo json_encode([
        "success" => false,
        "message" => "only for admin"
    ]);
    exit();
}
$tag_name = filter_input(INPUT_POST, "tag", FILTER_SANITIZE_STRING);
$db_info = [
    "username"=>"Qhve9YdhKG",
    "db_name"=>"Qhve9YdhKG",
    "password"=>"AvVYDL39iH",
    "server"=>"remotemysql.com",
    "port"=>"3306"
];
$db = new mysqli(
    $db_info['server'],
    $db_info['username'],
    $db_info['password'],
    $db_info['db_name'],
    $db_info['port']
);
$db->query("INSERT INTO tags (name) VALUES (\"$tag_name\")");
header("Location: /admin/tags");