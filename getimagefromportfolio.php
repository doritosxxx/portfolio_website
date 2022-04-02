<?php
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
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$id = (int)$id;

$image = mysqli_fetch_assoc($db->query("SELECT image FROM portfolio WHERE id = $id"))['image'];

header("Content-type: image/png"); //?TODO работает - не трогай
echo $image;
