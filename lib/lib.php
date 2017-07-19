<?php
require_once 'config.php';
require_once 'model.php';

function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}

function chooseAddress(){
    if (isset($_POST['address'])) {
        $chooseAddress = $_POST['address'];
        return $chooseAddress;
    }
}