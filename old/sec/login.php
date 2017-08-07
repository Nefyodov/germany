<?php
require_once '../lib/config.php';
require_once '../lib/model.php';

function checkHash ($password, $hash){
    return password_verify($password,$hash);
}

$data=$_POST;
$login = trim(strip_tags($data['login']));
$pswrd = trim(strip_tags($data['password']));

$logined = auth($login);
$hash = $logined['0']['password'];
if ($logined) {
    if (checkHash($pswrd,$hash)) {
        $auth = base64_encode(serialize($logined['0']['access']));
        setcookie("login",$auth,time()+86400,'/');
        header('Location: ../inc/menu');
    } else {
        header('Location:../');
    }
}


