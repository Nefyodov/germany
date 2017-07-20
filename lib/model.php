<?php
/**
 * Вывод содержимого таблицы БД в виде ассоциативного массива
 * @return array|bool|null
 */
function selectFromDatabase(){
    $chooseAddress = chooseAddress();
    $sql = "SELECT `id`, `address`, `location`, `room nr`, `space` FROM `description` WHERE address='$chooseAddress'";
    global $link;
    if(!$result = mysqli_query($link,$sql))
        return false;
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}

function addActualFromDatabase($model, $month, $id, $purpose, $cost) {
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
    global $link;
    if(!$result = mysqli_query($link,$sql))
        return false;
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}