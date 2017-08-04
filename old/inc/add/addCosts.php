<?php
require_once '../../lib/config.php';
require_once '../../lib/model.php';
require_once '../../lib/lib.php';
if (isset($_COOKIE['auth'])) {
    $month = $_POST['month'];
    $model = 'actual';
    $cost = 0;
    $comments = '';

    foreach ($_POST as $key => $value) {
        if ($value) {
            $data = explode(':', $key);
            if ((int)$data[0]) {
                $id = $data[0];
                if ($data[1] == 'cost') {
                    $cost = trim(strip_tags($value));
                } else {
                    $comments = trim(strip_tags($value));
                }
            }
            $check = checkBeforeInsertDBCosts($model, $month, $id);
            if (!$check) {
                $textResult = 'Data insert';
                addActualFromDatabaseCosts($model, $month, $id, $cost, $comments);
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
        <link rel="stylesheet" href="../../old/style/css/bootstrap.css">
        <link rel="stylesheet" href="../../old/style/css/main.css">
        <script src="../../old/style/js/jquery.js"></script>
        <script src="../../old/style/js/bootstrap.js"></script>
    </head>
    <body>
    <h3><?php echo $textResult; ?></h3>
    <p><a class="list-group-item" href="../addCosts">Back to data entry</a></p>
    </body>
    </html>
    <?php
}else{
    header('Location:../../');
}