<?php
require_once "config/config.php";
function leftMenuOutput() {
    $templateName = CENTER . $_POST['menu'] . '.php';
    require_once  $templateName;
}
