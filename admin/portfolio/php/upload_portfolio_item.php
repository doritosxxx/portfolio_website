<?php
session_start();
if(!$_SESSION['admin']){
    echo json_encode([
        "success" => false,
        "message" => "only for admin"
    ]);
    exit();
}

$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$tag_id = filter_input(INPUT_POST, 'tag', FILTER_SANITIZE_NUMBER_INT);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
$image_filename = filter_var($_FILES['image']['name'], FILTER_SANITIZE_STRING);

if($_FILES['image']['error']){
    echo json_encode([
        "success" => false,
        "message" => "Error with image uploading"
    ]);
    exit();
}
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

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
$response = $db->query("INSERT INTO portfolio (title, image, description, tag, image_filename) VALUES (\"$title\", \"$image\",\"$description\",\"$tag_id\", \"$image_filename\" )");
header("Location: /admin/portfolio");