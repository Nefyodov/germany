<?php
require_once 'config.php';
require_once 'model.php';

function debug($var) {
    echo '<pre>';
    print_r($var);
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
    echo '<select class="form-control" name="month" required> ';
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

/**
 * PIVOT TABLE
 */

function CARental($model,$address){
    if (isset($_POST['month'])){
        global $rentalArray;
        $sum=0;
        foreach ($rentalArray as $v) {
            if ($v['model'] == $model and $v['address']== $address and $v['purpose']==RENTAL) {
                $sum += $v['cost'];
            }
        }
    }
    echo $sum;
}
function CAPrePayment($model,$address){
    if (isset($_POST['month'])){
        global $rentalArray;
        $sum=0;
        foreach ($rentalArray as $v) {
            if ($v['model'] == $model and $v['address']== $address and $v['purpose']!=RENTAL) {
                $sum += $v['cost'];
            }
        }
    }
    echo $sum;
}

function CACostsPlan($nameArtCost){
    if (isset($_POST['month'])){
        global $costsArray;
        $sum=0;
        foreach ($costsArray as $c){
            if ($nameArtCost == $c['art'] and $c['model']=='plan'){
               $sum = $c['cost'];
               return $sum;
            }
        }
    }
}
function CACostsActual($nameArtCost){
    if (isset($_POST['month'])){
        global $costsArray;
        $sum=0;
        foreach ($costsArray as $c){
            if ($nameArtCost == $c['art'] and $c['model']=='actual'){
                $sum = $c['cost'];
                return $sum;
            }
        }
    }
}

/**
 * BWA
 */
function CARentalBWA($model){
    if (isset($_POST['month'])){
        global $rentalArray;
        $sum=0;
        foreach ($rentalArray as $v) {
            if ($v['model'] == $model and $v['purpose']==RENTAL) {
                $sum += $v['cost'];
            }
        }
    }
    return $sum;
}
function CAPrePaymentBWA($model){
    if (isset($_POST['month'])){
        global $rentalArray;
        $sum=0;
        foreach ($rentalArray as $v) {
            if ($v['model'] == $model and $v['purpose']!=RENTAL) {
                $sum += $v['cost'];
            }
        }
    }
    return $sum;
}

function placeholder($placeholder,$ad,$purpose){
    foreach ($placeholder as $p){
        if ($p['id_description']==$ad['id'] and $p['purpose']==$purpose)
            return $p['cost'] . '.00';
    }
}
