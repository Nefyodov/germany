<?php
if ($_POST['address'] && $_POST['month']){
    $data['selection'] = [
        'address' => $_POST['address'],
        'month' => $_POST['month'],
    ];

    echo json_encode($data['selection']);
}
