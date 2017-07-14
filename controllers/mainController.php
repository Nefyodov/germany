<?php
require_once "config/config.php";
function leftMenuOutput() {
    if (!$_POST['menu']==false){
        $templateName = CENTER . $_POST['menu'] . '.php';
        require_once  $templateName;
    }
}
//if ($_SERVER["REQUEST_METHOD"]=="POST") {
//    $name = $_POST[''];
//    echo $name;
//}
if ($_POST) {
    echo '<pre>';
    echo key($_POST);
    echo '</pre>';
}