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
                <label class="radio-inline">
                    <input type="radio" name="address" value="Mozartstraße 20"> Mozartstraße 20
                </label>
                <label class="radio-inline">
                    <input type="radio" name="address" value="Duisburger Str. 101"> Duisburger Str. 101
                </label>
                <label class="radio-inline">
                    <input type="radio" name="address" value="Duisburger Str. 103"> Duisburger Str. 103
                </label>
                <label class="radio-inline">
                    <input type="radio" name="address" value="Garden/Garage"> Garden/Garage
                </label>
                <?php
                //Выпадающий список выбора месяца, месяц отправляется $_POST
                selectedMonth();
                ?>
                <input class="btn btn-default" type="submit" value="Choose">
        </form>
    </div>
    <div class="center-block header">
        <?php coorentSelection();?>
        <form id="saveRental" action="add/addRental" method="post">
            <input type="hidden" name="month" value="<?php echo $_POST['month'];?>">
            <input form="saveRental" class="btn btn-default" type="submit" value="Write to database">
        </form>
        <a class="btn btn-default" href="menu">Back to menu</a>
    </div>
    <div class="center-block">
        <table class="table table-bordered rental-table">
            <tr>
                <th>Address</th>
                <th>Location</th>
                <th>Room nr.</th>
                <th>Space</th>
                <th>Rent plan</th>
                <th>Costs plan</th>
                <th>Heating plan</th>
                <th>Cable TV</th>
                <th>Comments</th>
                <th>&#8364;/m2</th>
            </tr>
                <?php
                $address = selectFromDatabaseRantal();
                    foreach ($address as $ad) {
                        ?>
                        <tr>
                            <td> <?= $ad['address'] ?> </td>
                            <td> <?= $ad['location'] ?> </td>
                            <td> <?= $ad['room nr'] ?> </td>
                            <td> <?= $ad['space'] ?> </td>
                            <td><input form="saveRental" type="text" class="form-control" name="<?php echo $ad['id'].':'.'Rent plan';?>" placeholder="1200.00"></td>
                            <td><input form="saveRental" type="text" class="form-control" name="<?php echo $ad['id'].':'.'Costs plan';?>" placeholder="100.00"></td>
                            <td><input form="saveRental" type="text" class="form-control" name="<?php echo $ad['id'].':'.'Heating plan';?>" placeholder="100.00"></td>
                            <td><input form="saveRental" type="text" class="form-control" name="<?php echo $ad['id'].':'.'Cable TV';?>" placeholder="50.00"></td>
                            <td><textarea form="saveRental" class="form-control textarea" name="<?php echo $ad['id'].':'.'Comments';?>"rows="1" placeholder="Comments"></textarea></td>
                            <td>10.00 &#8364;</td>
                        </tr>
                        <?
                    }
                ?>
        </table>
    </div>
</body>
</html>
