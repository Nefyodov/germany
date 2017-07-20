<?php
require_once '../lib/config.php';
require_once '../lib/model.php';
require_once '../lib/lib.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Rental Income</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/css/bootstrap.css">
    <link rel="stylesheet" href="../style/css/main.css">
    <script src="../style/js/jquery.js"></script>
    <script src="../style/js/bootstrap.js"></script>
</head>
<body>
    <div class="center-block header">
        <form class="table-main" action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post">
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
        <form id="saveCosts" action="add/addCosts" method="post">
            <input type="hidden" name="month" value="<?php echo $_POST['month'];?>">
            <input form="saveCosts" class="btn btn-default" type="submit" value="Write to database">
        </form>
        <a class="btn btn-default" href="menu">Back to menu</a>
    </div>
    <div class="center-block">
        <table class="table table-bordered costs-table">
            <tr>
                <th>Status</th>
                <th>Art</th>
                <th>Sum</th>
                <th>Comments</th>
            </tr>
            <?php
                $dbcosts = selectFromDBCosts();
                foreach ($dbcosts as $cs) {
                ?>
                <tr>
                    <td> <?= ucfirst($cs['status']) ?> </td>
                    <td> <?= ucfirst($cs['art']) ?> </td>
                    <td><input form="saveCosts" type="text" class="form-control" name="<?php echo $cs['id'].':'.'cost';?>" placeholder="50.00"></td>
                    <td><textarea form="saveCosts" class="form-control textarea" name="<?php echo $cs['id'].':'.'comments';?>"rows="1" placeholder="Comments"></textarea></td>
                </tr>
                    <?
                }
            ?>
        </table>
    </div>
</body>
</html>