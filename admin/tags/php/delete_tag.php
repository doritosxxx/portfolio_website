<?php
session_start();
if(!$_SESSION['admin']){
    echo json_encode([
        "success" => false,
        "message" => "only for admin"
    ]);
    exit();
}
$id = (int)filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
if($id === 0){
    echo json_encode([
        "success" => false,
        "message" => "you cant delete tag with id = 0"
    ]);
    exit();
}
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

$response = mysqli_fetch_assoc($db->query("SELECT id FROM tags WHERE id = \"$id\""));
if($response === null){
    echo json_encode([
        "success" => false,
        "message" => "Произошла ошибка. Тег не найден в базе данных"
    ]);
    exit();
}
$db->query("UPDATE portfolio SET tag=0 WHERE tag=\"$id\"");
$response = $db->query("DELETE FROM tags WHERE id = \"$id\"");
echo json_encode([
    "success" => $response === true ? true : false,//это важно
    "response" => $response
]);