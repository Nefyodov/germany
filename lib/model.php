<?php
/**
 * Вывод содержимого таблицы БД в виде ассоциативного массива
 * @return array|bool|null
 */
function selectAllAddress(){
    $chooseAddress = chooseAddress();
    $sql = "SELECT `id`, `address`, `location`, `room nr`, `space` FROM `description` WHERE address='$chooseAddress'";
    global $link;
    if(!$result = mysqli_query($link,$sql))
        return false;
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}