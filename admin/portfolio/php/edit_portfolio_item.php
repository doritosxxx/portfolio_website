<?php
session_start();
if(!$_SESSION['admin']){
    echo json_encode([
        "success" => false,
        "message" => "only for admin"
    ]);
    exit();
}

$post_id = filter_input(INPUT_POST, "post_id", FILTER_SANITIZE_NUMBER_INT);

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

$compare = mysqli_fetch_assoc($db->query("SELECT title,description,tag FROM portfolio WHERE id = \"$post_id\""));
$new = [
    "title" => filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING),
    "description" => filter_input(INPUT_POST, "description", FILTER_SANITIZE_STRING),
    "tag" => filter_input(INPUT_POST, "tag", FILTER_SANITIZE_NUMBER_INT),
];
$image = $_FILES['image']['error'] === 4 ? null : file_get_contents($_FILES['image']['tmp_name']);
$subquery = [];
foreach($new as $key => $item){
    if($item !== $compare[$key]){
        $subquery[$key] = $item;
    }
}
if($image !== null){
    $subquery['image'] = $image;
}
if($subquery !== []){
    
    foreach($subquery as $key => $item){
        $subquery[$key] = "$key=\"".addslashes($item)."\"";
    }
    $subquery = implode(",", $subquery);
    $query = "UPDATE portfolio SET $subquery WHERE id = \"$post_id\"";
    $db->query($query);
}
header("Location: /admin/portfolio");
