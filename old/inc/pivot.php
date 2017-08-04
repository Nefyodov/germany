<?php
require_once '../lib/config.php';
require_once '../lib/model.php';
require_once '../lib/lib.php';
require_once '../lib/language.php';

if (isset($_POST['month'])){
    $month = $_POST['month'];
    $rentalArray = selectRentalForPivot($month);
    $costsArray = selectCostsForPivot($month);
}
$costsNameArray = selectCostsNameForPivot();
if (isset($_COOKIE['auth'])) {
    $level = unserialize(base64_decode($_COOKIE['auth']));
    if ($level=='1')
        $nameTableHeaders = $pivotRU;
    else
        $nameTableHeaders = $pivotEN;
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title><?php echo $nameTableHeaders['Pivot Table']?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../old/style/css/bootstrap.css">
        <link rel="stylesheet" href="../old/style/css/main.css">
        <script src="../old/style/js/jquery.js"></script>
        <script src="../old/style/js/bootstrap.js"></script>
    </head>
    <body>
    <div class="center-block header">
        <form class="table-main" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
            <?php
            //Выпадающий список выбора месяца, месяц отправляется $_POST
            selectedMonth();
            ?>
            <input class="btn btn-default" type="submit" value="<?php echo $nameTableHeaders['Choose month']?>">
        </form>
        <div class="alert"><?php echo $nameTableHeaders['Current selection'];?>:</div>
        <?php
        if (isset($_POST['month'])) {
            echo '<div class="alert alert-success" role="alert">' . $_POST['month'] . '</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">'.$nameTableHeaders['Choose month'].'</div>';
        }
        ?>
        <a class="btn btn-default" href="menu.php"><?php echo $nameTableHeaders['Back to menu']?></a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered pivot-table">
            <tr>
                <th><?php echo $nameTableHeaders['Address']?></th>
                <th><?php echo $nameTableHeaders['Plan rental']?></th>
                <th><?php echo $nameTableHeaders['Plan convertible costs']?></th>
                <th><?php echo $nameTableHeaders['Actual rental']?></th>
                <th><?php echo $nameTableHeaders['Actual convertible costs']?></th>
            </tr>
            <tr>
                <td><?php echo M20; ?></td>
                <td><?php CARental('plan', M20); ?></td>
                <td><?php CAPrePayment('plan', M20); ?></td>
                <td><?php CARental('actual', M20); ?></td>
                <td><?php CAPrePayment('actual', M20); ?></td>
            </tr>
            <tr>
                <td><?php echo D101; ?></td>
                <td><?php CARental('plan', D101); ?></td>
                <td><?php CAPrePayment('plan', D101); ?></td>
                <td><?php CARental('actual', D101); ?></td>
                <td><?php CAPrePayment('actual', D101); ?></td>
            </tr>
            <tr>
                <td><?php echo D103; ?></td>
                <td><?php CARental('plan', D103); ?></td>
                <td><?php CAPrePayment('plan', D103); ?></td>
                <td><?php CARental('actual', D103); ?></td>
                <td><?php CAPrePayment('actual', D103); ?></td>
            </tr>
            <tr>
                <td><?php echo GG; ?></td>
                <td><?php CARental('plan', GG); ?></td>
                <td><?php CAPrePayment('plan', GG); ?></td>
                <td><?php CARental('actual', GG); ?></td>
                <td><?php CAPrePayment('actual', GG); ?></td>
            </tr>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered pivot-table">
            <tr>
                <th><?php echo $nameTableHeaders['Art']?></th>
                <th><?php echo $nameTableHeaders['Plan']?></th>
                <th><?php echo $nameTableHeaders['Actual']?></th>
                <th><?php echo $nameTableHeaders['Comments']?></th>
            </tr>
            <?php
            foreach ($costsNameArray as $key => $value) {
                ?>
                <tr>
                    <td><?php if ($level==1) echo ucfirst($value['art_ru']);else echo ucfirst($value['art']); ?></td>
                    <td><?php echo CACostsPlan($value['art']); ?></td>
                    <td><?php echo CACostsActual($value['art']); ?></td>
                    <td></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
    </body>
    </html>
    <?php
}else{
    header('Location:../');
}