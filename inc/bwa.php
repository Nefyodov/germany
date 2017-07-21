<?php
require_once '../lib/config.php';
require_once '../lib/model.php';
require_once '../lib/lib.php';
if (isset($_POST['month'])){
    $month = $_POST['month'];
    $rentalArray = selectRentalForPivot($month);
    $costsArray = selectCostsForPivot($month);
}
$costsNameArray = selectCostsNameForPivot();
$sumConvCostsPlan = 0;
$sumConvCostsActual = 0;
$sumNoneConvCostsPlan = 0;
$sumNoneConvCostsActual = 0;
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>BWA</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/css/bootstrap.css">
    <link rel="stylesheet" href="../style/css/main.css">
    <script src="../style/js/jquery.js"></script>
    <script src="../style/js/bootstrap.js"></script>
</head>
<body>
    <div class="left-menu">
        <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post">
            <?php
            //Выпадающий список выбора месяца, месяц отправляется $_POST
            selectedMonth();
            ?>
            <input class="btn btn-default" type="submit" value="Choose month">
        </form>
        <div class="alert">Current selection:</div>
        <?php
        if (isset($_POST['month'])){
            echo '<div class="alert alert-success" role="alert">' . $_POST['month'] . '</div>';
        }else{
            echo '<div class="alert alert-danger" role="alert"> Choose month</div>';
        }
        ?>
        <a class="btn btn-default" href="menu">Back to menu</a>
    </div>
    <div class="table-responsive">
        <table class="table-bordered pivot-table bwa">
            <tr>
                <th>Bezeichnung</th>
                <th>2017 year</th>
                <th>Period</th>
                <th>Plan</th>
                <th>Actual</th>
            </tr>
            <tr>
                <td>Rental income</td>
                <td></td>
                <td></td>
                <td><?php echo CARentalBWA('plan');?></td>
                <td><?php echo CARentalBWA('actual');?></td>
            </tr>
            <tr>
                <td>Pre payment convertible costs</td>
                <td></td>
                <td></td>
                <td><?php echo CAPrePaymentBWA('plan');?></td>
                <td><?php echo CAPrePaymentBWA('actual');?></td>
            </tr>
            <tr class="breadcrumb">
                <td>Full income</td>
                <td></td>
                <td></td>
                <td><?php echo $fullIncomePlan = CARentalBWA('plan') + CAPrePaymentBWA('plan');?></td>
                <td><?php echo $fullIncomeActual = CARentalBWA('actual') + CAPrePaymentBWA('actual');?></td>
            </tr>
            <?php
            foreach ($costsNameArray as $key => $value){
                if ($value['status']=='convertible') {
                    ?>
                    <tr>
                        <td><?php echo ucfirst($value['art']); ?></td>
                        <td></td>
                        <td></td>
                        <td><?php echo CACostsPlan($value['art']); ?></td>
                        <td><?php echo CACostsActual($value['art']); ?></td>
                    </tr>
                    <?php
                    $sumConvCostsPlan +=CACostsPlan($value['art']);
                    $sumConvCostsActual +=CACostsActual($value['art']);
                }
            }
            ?>
            <tr class="breadcrumb">
                <td>Summary convertible costs</td>
                <td></td>
                <td></td>
                <td><?php echo $sumConvCostsPlan;?></td>
                <td><?php echo $sumConvCostsActual;?></td>
            </tr>
            <?php
            foreach ($costsNameArray as $key => $value){
                if ($value['status']=='none convertible') {
                    ?>
                    <tr>
                        <td><?php echo ucfirst($value['art']); ?></td>
                        <td></td>
                        <td></td>
                        <td><?php echo CACostsPlan($value['art']); ?></td>
                        <td><?php echo CACostsActual($value['art']); ?></td>
                    </tr>
                    <?php
                    $sumNoneConvCostsPlan +=CACostsPlan($value['art']);
                    $sumNoneConvCostsActual +=CACostsActual($value['art']);
                }
            }
            ?>
            <tr class="breadcrumb">
                <td>Summary none convertible costs</td>
                <td></td>
                <td></td>
                <td><?php echo $sumNoneConvCostsPlan;?></td>
                <td><?php echo $sumNoneConvCostsActual;?></td>
            </tr>
            <tr>
                <td>Summary all costs</td>
                <td></td>
                <td></td>
                <td><?php echo $sumConvCostsPlan + $sumNoneConvCostsPlan;?></td>
                <td><?php echo $sumConvCostsActual + $sumNoneConvCostsActual;?></td>
            </tr>
            <?php
            foreach ($costsNameArray as $key => $value){
                if ($value['status']=='taxes') {
                    ?>
                    <tr>
                        <td><?php echo ucfirst($value['art']); ?></td>
                        <td></td>
                        <td></td>
                        <td><?php echo $taxesPlan = CACostsPlan($value['art']); ?></td>
                        <td><?php echo $taxesActual = CACostsActual($value['art']); ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            <tr class="breadcrumb">
                <td>Revenue</td>
                <td></td>
                <td></td>
                <td><?php echo $fullIncomePlan - $sumConvCostsPlan - $sumNoneConvCostsPlan - $taxesPlan;?></td>
                <td><?php echo $fullIncomeActual - $sumConvCostsActual - $sumNoneConvCostsActual - $taxesActual;?></td>
            </tr>
        </table>
    </div>
</body>
</html>
