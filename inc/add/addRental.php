<?php
require_once '../../lib/config.php';
require_once '../../lib/model.php';
require_once '../../lib/lib.php';
if (isset($_COOKIE['auth'])) {
    $month = $_POST['month'];
    $model = 'actual';

    foreach ($_POST as $key => $value) {
        if ($value) {
            $data = explode(':', $key);
            if ((int)$data[0]) {
                $id = $data[0];
                $purpose = $data[1];
                $cost = trim(strip_tags($value));
            }
            $check = checkBeforeInsertDB($model, $month, $id, $purpose);
            if (!$check) {
                $textResult = 'Data insert';
                addActualFromDatabaseRental($model, $month, $id, $purpose, $cost);
            } else {
                $textResult = 'Database already have value. Please check address and month.';
            }
        }
    }
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title>Write to database</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../style/css/bootstrap.css">
        <link rel="stylesheet" href="../../style/css/main.css">
        <script src="../../style/js/jquery.js"></script>
        <script src="../../style/js/bootstrap.js"></script>
    </head>
    <body>
    <h3><?php echo $textResult; ?></h3>
    <p><a class="list-group-item" href="../addRental.php">Back to data entry</a></p>
    </body>
    </html>
    <?php
}else{
    header('Location:../../');
}
