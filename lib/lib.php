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

function chooseMonth(){
    if (isset($_POST['month'])) {
        $selectedMonth = trim($_POST['month']);
        return $selectedMonth;
    }else {
        $date = getdate();
        $selectedMonth = $date['month'] . ' 2017';
        return $selectedMonth;
    }
}

function selectedMonth(){
    echo '<select class="form-control" name="month" required>';
    global $month;
    $selectedMonth = chooseMonth();
    for ($i=1; $i<=12; $i++){
        $m = date('F Y',mktime(0,0,0,$i));
        if ($m == $selectedMonth)
            echo '<option selected value='.$m .'>'. $m . '</option>';
        else
            echo '<option value='.$m .'>'. $m . '</option>';
    }
    echo '</select>';
}

function coorentSelection(){
    echo '<div class="alert">Current selection:</div>';
        if (isset($_POST['address'])) {
            echo '<div class="alert alert-success" role="alert">' . $_POST['address'] . '</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"> Choose address</div>';
        }
    if (isset($_POST['month'])){
        echo '<div class="alert alert-success" role="alert">' . $_POST['month'] . '</div>';
    }else{
        echo '<div class="alert alert-danger" role="alert"> Choose month</div>';
    }

}