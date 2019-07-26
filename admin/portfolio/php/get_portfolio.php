<?php
session_start();
if(!$_SESSION['admin']){
    echo json_encode([
        "success" => false,
        "message" => "only for admin"
    ]);
    exit();
}

$db_info =[
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

$response = $db->query("SELECT id, title, tag, description, image_filename FROM portfolio");
$portfolio = [];
if($response !== null){
    while($row = mysqli_fetch_assoc($response)){
        $row['image'] = "/getimagefromportfolio.php?id=".$row['id'];
        $portfolio[] = $row;
    }
}
echo json_encode([
    "success" => true,
    "portfolio" => $portfolio
]);
