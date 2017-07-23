<?php
define("DB_HOST","nefyodov.mysql.ukraine.com.ua");
define("DB_LOGIN","nefyodov_db");
define("DB_PASSWORD","tjCsF6me");
define("DB_NAME","nefyodov_db");

define("M20","Mozartstraße 20");
define("D101","Duisburger Str. 101");
define("D103","Duisburger Str. 103");
define("GG","Garden/Garage");
define("RENTAL","Rent_plan");


/**
 * Подключение к БД
 */
$link = mysqli_connect(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME);
if (!$link) {
    echo 'Ошибка: '
        . mysqli_connect_errno()
        . ':'
        . mysqli_connect_error();
}