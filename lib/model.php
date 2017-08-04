<?php
function returnSQL($sql){
    global $link;
    if(!$result = mysqli_query($link,$sql))
        return false;
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}

/**
 * Вывод содержимого таблицы БД в виде ассоциативного массива
 * @return array|bool|null
 */
function selectFromDatabaseRental(){
    $chooseAddress = chooseAddress();
    $sql = "SELECT `id`, `address`, `location`, `room nr`, `space` 
            FROM `description` 
            WHERE address='$chooseAddress'";
    return returnSQL($sql);
}

function selectTableAndPlaceholder($month){
    $sql = "SELECT `id_description`,`purpose`,`cost` 
            FROM `rental`
            WHERE month='$month' AND model='plan'";
    return returnSQL($sql);
}

function addActualFromDatabaseRental($model, $month, $id, $purpose, $cost) {
    $sql = 'INSERT INTO rental (model, month, id_description, purpose, cost)
            VALUE (?,?,?,?,?)';
    global $link;
    if (!$stmt = mysqli_prepare($link, $sql))
        return false;
    mysqli_stmt_bind_param($stmt, "ssisi", $model, $month, $id, $purpose, $cost);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return true;
}

function checkBeforeInsertDB($model, $month, $id, $purpose){
    $sql = "SELECT `id`, `model`, `month`, `id_description`, `purpose` 
            FROM `rental` 
            WHERE model='$model' AND month='$month' AND id_description='$id' AND purpose='$purpose'";
    return returnSQL($sql);
}

function selectFromDBCosts(){
    $sql = "SELECT `id`, `status`, `art`, `art_ru` FROM `costs_name`";
    return returnSQL($sql);
}

function addActualFromDatabaseCosts($model, $month, $id, $cost, $comments) {
    $sql = 'INSERT INTO costs (model, month, id_costs, cost, comments)
            VALUE (?,?,?,?,?)';
    global $link;
    if (!$stmt = mysqli_prepare($link, $sql))
        return false;
    mysqli_stmt_bind_param($stmt, "ssiis", $model, $month, $id, $cost, $comments);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return true;
    echo 'da';
}
function checkBeforeInsertDBCosts($model, $month, $id){
    $sql = "SELECT `id`, `model`, `month`, `id_costs`, `cost`, `comments` 
            FROM `costs` 
            WHERE model='$model' AND month='$month' AND id_costs='$id'";
    global $link;
    if(!$result = mysqli_query($link,$sql))
        return false;
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    if ($items['cost']!=null and $items['comments']!=null)
        return false;
    return $items;
}

function selectRentalForPivot($month){
    $sql = "SELECT t1.id,`model`, `month`, t1.id_description, `purpose`,`address`,`location`,`room nr`,`purpose`,`cost` 
            FROM `rental` AS `t1` 
            LEFT JOIN `description` AS `t2` 
            ON t1.id_description=t2.id 
            WHERE month='$month'";
    return returnSQL($sql);
}

function selectCostsForPivot($month){
    $sql = "SELECT name.id, `status`, `art`,`model`,`month`,`cost`,`comments` 
            FROM `costs_name` AS name 
            LEFT JOIN costs ON name.id=costs.id_costs
            WHERE month='$month'";
    return returnSQL($sql);
}
function selectCostsNameForPivot(){
    $sql = "SELECT `status`,`art`,`art_ru` FROM `costs_name`";
    return returnSQL($sql);
}

//function BWA($month){
//
//}

function auth($user) {
    $sql = "SELECT `login`,`password`,`access` FROM `users` WHERE login='$user'";
    return returnSQL($sql);
}
