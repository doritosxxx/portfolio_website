<?php

function response($response){
    echo json_encode($response);
    exit;
}

if(
    !( filter_has_var ( INPUT_POST , 'login' ) && filter_has_var ( INPUT_POST , 'password' ) )
){
    response([
        'success'=>false,
        'message'=>"Не указано одно из полей ввода"
    ]);
}
$login = $_POST['login'];
$password = $_POST['password'];

$correct_inputs = [
    'login' => "admin82",
    'password' => "temporary49"
];

if($login === $correct_inputs['login'] && $password === $correct_inputs['password']){
    response([
        'success' => true,
        'message' => "Вы вошли"
    ]);
}
else {
    response([
        'success' => false,
        'message' => "Неизвестная комбинация логина и пароля"
    ]);
}